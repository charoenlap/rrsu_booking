<?php
	class behaviorController extends Controller{
		public function home(){
			$data = array();
			$behavior = $this->model('behavior');
			$data['list_stu_behavior'] = $behavior->listStuBehavior();
			$this->view('behavior/home',$data);
		}
		public function form(){
			$behavior = $this->model('behavior');
			if(method_post()){
				$data_select = $_POST;
				$result_add = $behavior->addBehavior($data_select);
			}
			$data = array();
			$data['result'] = '';
			$data['listBehavior'] = $behavior->getBehavior();
			$data['action'] = route('behavior/form');
			$this->view('behavior/form',$data);
		}
	}
?>