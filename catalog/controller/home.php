<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
	    	// $data['title'] = "Home";
	    	$style = array(
	    		'assets/home.css'
	    	);
	    	$data['style'] 	= $style;
 	    	$this->render('home',$data); 
	    }
	}
?>