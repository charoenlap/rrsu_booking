<?php  
	class activityController extends Controller{
		public function home(){
			$data = array();
			$id_student = id_student();
			$data['id_student'] = $id_student;
			$data['stu_code'] = $this->getSession('stu_code');
			$data['stu_prefix'] = $this->getSession('stu_prefix');
			$data['stu_name'] = $this->getSession('stu_name');
			$data['stu_lname'] = $this->getSession('stu_lname');
			$data['stu_group'] = $this->getSession('stu_group');
			$data['stu_branch'] = $this->getSession('stu_branch');
			$data['stu_point_behavior'] = (int)$this->getSession('stu_point_behavior');
			$data['stu_point_event'] = (int)$this->getSession('stu_point_event');
			$data['stu_code_edu'] = $this->getSession('stu_code_edu');
			$data['stu_detail'] = $this->getSession('stu_detail');

			$event = $this->model('event');
			$data_select = array(
				'stu_code' => $this->getSession('stu_code'),
				't_e_status' => 3
			);
			$data['list_event_approve'] = $event->listApproveEvent($data_select);
			$this->view('activity/home',$data);
		}
	}
?>