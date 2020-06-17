<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
	    	if(method_post()){
	    		$student = $this->model('student');
	    		$data_login = array(
	    			'stu_code' 		=> post('stu_code'),
	    			'stu_password'	=> post('stu_password')
	    		);
	    		$result_login = $student->login($data_login);
	    		if($result_login['result']=='success'){
	    			$behavior = (int)$result_login['data']['stu_point_behavior']-(int)$result_login['behavior'];
	    			$this->setSession('id_student',$result_login['data']['id_student']);
	    			$this->setSession('stu_detail',$result_login['data']);
	    			$this->setSession('stu_code',$result_login['data']['stu_code']);
	    			$this->setSession('stu_prefix',$result_login['data']['stu_prefix']);
	    			$this->setSession('stu_name',$result_login['data']['stu_name']);
	    			$this->setSession('stu_lname',$result_login['data']['stu_lname']);
	    			$this->setSession('stu_group',$result_login['data']['stu_group']);
	    			$this->setSession('stu_branch',$result_login['data']['stu_branch']);
	    			$this->setSession('stu_point_event',$result_login['event_unit']);
	    			$this->setSession('stu_point_behavior',$behavior);
	    			$this->setSession('stu_code_edu',$result_login['data']['stu_code_edu']);
	    			redirect('index/home');
	    		}else{
	    			redirect('home&result=fail');
	    		}
	    	}
	    	$data['result'] = get('result');
	    	$data['action'] = route('home');
	    	$data['title'] = "SSRU";
	    	$style = array(
	    		'assets/home.css'
	    	);
	    	$data['style'] 	= $style;
 	    	$this->render('home',$data); 
	    }
	    public function logout(){
	    	$this->destroySession();
	    	redirect('home');
	    }
	}
?>