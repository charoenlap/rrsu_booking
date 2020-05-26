<?php  
	class activityController extends Controller{
		public function home(){
			$this->view('activity/home');
		}
		public function upload(){
			$this->view('activity/upload');
		}
		public function addActivity(){
			$this->view('activity/addActivity');
		}
	}
?>