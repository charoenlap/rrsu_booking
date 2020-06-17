<?php  
	class checkController extends Controller{
		public function home(){
			$data = array();
			$behavior = $this->model('behavior');
			// var_dump($_SESSION);
			$stu_code = $this->getSession('stu_code');
			$data_select = array(
				'stu_code' => $stu_code
			);
			$result_behavior = $behavior->listBehavior($data_select);
			$data['list_behavior'] = $result_behavior;
			$this->view('check/home',$data);
		}
	}
?>