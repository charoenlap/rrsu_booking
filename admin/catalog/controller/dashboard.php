<?php 
	class DashboardController extends Controller {
	    public function dashboard(){
	    	check_admin();
	    	$data = array();
	    	$dashboard = $this->model('dashboard');
	    	$data['dashboard'] = $dashboard->getDashboard();

	    	$event = $this->model('event');
	    	$data_select = array(
	    		'limit' => '0,10'
	    	);
			$data['listTakeEvent'] = $event->listTakeEvent($data_select);
	    	$this->view('dashboard/dashboard',$data);
	    }
	}
?>