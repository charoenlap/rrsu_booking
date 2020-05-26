<?php  
	class bookingController extends Controller{
		public function home(){
			$this->view('booking/home');
		}
		public function booking(){
			$this->view('booking/booking');
		}
		public function printbook(){
			$this->render('booking/print');
		}
		public function pastactivity(){
			$this->view('booking/pastactivity');
		}
		public function cancelactivity(){
			$this->view('booking/cancelactivity');
		}
	}
?>