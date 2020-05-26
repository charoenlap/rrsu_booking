<?php  
	class bannerController extends Controller{
		public function home(){
			$this->view('banner/home');
		}
		public function subBanner(){
			$this->view('banner/subBanner');
		}
		public function addBanner(){
			$this->view('banner/addBanner');
		}
	}
?>