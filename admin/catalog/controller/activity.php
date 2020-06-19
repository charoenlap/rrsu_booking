<?php  
	class activityController extends Controller{
		public function home(){
			$event = $this->model('event');
			$result_event = $event->getEvent();
			$data['list_event'] = $result_event['data'];
			$this->view('activity/home',$data);
		}
		public function delEvent(){
			
		}
		public function upload(){
			$data = array();
			$data['action'] = route('activity/upload');
			$data['route'] = 'activity/upload';
			$event = $this->model('event');
			$data['result'] = '';
			if(method_post()){
				if(isset($_FILES['file_name'])){
					$data_insert = array();
					$path = 'admin/upload_approve/';
					$name = time().'_'.$_FILES['file_name']['name'];
					$result_upload = upload_excel($_FILES['file_name'],DOCUMENT_ROOT.$path,$name);
					$path = $path.$name;
					$result_excel = readExcel($path,1);
					$data_list_approve = array();
					foreach($result_excel as $val){
						$data_list_approve[] = $val[0];
					}
					$data_insert['file_name'] = $name;
					$data_insert['list_approve'] = $data_list_approve;
					$result_event_upload = $event->approveEvent($data_insert);
					$data['result'] = $result_event_upload['result'];
				}
			}
			$data['list_upload'] = $event->listUploadEvent();
			$this->view('activity/upload',$data);
		}
		public function form(){
			$id_event = get('id_event');
			if(method_post()){
				$id_event = $_POST['id_event'];
				$event = $this->model('event');
				$data = $_POST;
				if(isset($_FILES['event_file'])){
					$path = DOCUMENT_ROOT.'uploads/files/';
					$name = time();
					$file_name = upload($_FILES['event_file'],$path,$name);
					$data['event_file'] = $file_name;
				}
				$result_edit_event = $event->actionEvent($data);
				$para_id_event = '';
				if($id_event){
					$para_id_event = '&id_event='.$id_event.'&result=sucess';
					redirect('activity/form'.$para_id_event);
				}else{
					redirect('activity/home'.$para_id_event);
				}
				
			}
			$data['result'] = get('result');
			$data = array();
			$style = array(
	    		'assets/boostrap_jquery/css/bootstrap-datepicker3.css',
	    	);
	    	$data['style'] = $style;
	    	$script = array(
	    		'assets/boostrap_jquery/js/bootstrap-datepicker.js',
  				'assets/boostrap_jquery/js/locales/bootstrap-datepicker.en-AU.min.js',
  				'assets/boostrap_jquery/js/jquery-ui.js',
	    	);
	    	$data['script'] = $script;
	    	$event = $this->model('event');
	    	$data_event = array(
	    		'id_event' => $id_event
	    	);
	    	$result_event_detail = $event->getEventDetail($data_event);
	    	$data['data'] = $result_event_detail['data'];
	    	$data['sub'] = $result_event_detail['sub'];

	    	$student = $this->model('student');
	    	$data['route'] = 'activity/form';
	    	$data['id_event'] = get('id_event');
	    	$data['action'] = route($data['route']);
	    	$data['list_event'] = $event->getEventType()['data'];
	    	$data['list_type_student'] = $student->getTypeStudent()['data'];
			$this->view('activity/form',$data);
		}
	}
?>