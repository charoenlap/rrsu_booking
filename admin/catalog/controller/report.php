<?php  
	class reportController extends Controller{
		public function activity(){
			$data = array();
			$event = $this->model('event');
			$data['listTakeEvent'] = $event->listTakeEvent();
			$this->view('report/activity',$data);
		}
		public function bookingActivity(){
			$this->view('report/bookingActivity');
		}
		public function statusActivity(){
			$this->view('report/statusActivity');
		}
		public function checkActivity(){
			$this->view('report/checkActivity');
		}
	}
?>