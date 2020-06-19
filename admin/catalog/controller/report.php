<?php  
	class reportController extends Controller{
		public function activity(){
			check_admin();
			$data = array();
			$event = $this->model('event');
			$data['listTakeEvent'] = $event->listTakeEvent();
			$this->view('report/activity',$data);
		}
		public function bookingActivity(){
			check_admin();
			$this->view('report/bookingActivity');
		}
		public function statusActivity(){
			check_admin();
			$this->view('report/statusActivity');
		}
		public function checkActivity(){
			check_admin();
			$this->view('report/checkActivity');
		}
	}
?>