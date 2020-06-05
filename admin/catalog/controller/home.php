<?php  
	class homeController extends Controller{
		public function index(){
			$data = array();
			$this->view('home',$data);
		}
	}
?>