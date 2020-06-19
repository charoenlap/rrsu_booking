<?php  
	class homeController extends Controller{
		public function index(){
			$data = array();
			if(method_post()):
				$data = $_POST;
				$ip = get_client_ip();
				if($ip=="::1"){
					$ip = "localhost";
				}else{
					$ip = '110.170.181.52';
				}
	    		// $ip = get_client_ip();
	    		// var_dump($ip);exit();
	    		//KEY // 6Lf6raYZAAAAAKGMQqYCsUjECh6uJ7K5j_lZ0nWz
	    		$url = "https://www.google.com/recaptcha/api/siteverify";
	    		$type = "post";
	    		$params = array(
	    			'secret' => '6Lf6raYZAAAAAKGMQqYCsUjECh6uJ7K5j_lZ0nWz',
	    			'response' => (isset($_POST['g-recaptcha-response'])?$_POST['g-recaptcha-response']:''),
	    			'remoteip'	=> $ip
	    		);
	    		$result = api_test($url,$type,$params);
	    		$result = json_decode($result,true);
	    		if($result['success'] == 'true'){

					$admin = $this->model('admin');
					$data_select = array(
						'username' => $data['username'],
						'password' => $data['password']
					);
					$result_admin = $admin->login($data_select);
					if($result_admin['result'] == 'success'){
						$this->setSession('login_admin',1);
						redirect('dashboard/dashboard');
					}else{
						redirect('home&result=fail');
					}
				}else{
	    			// var_dump($result);
	    			redirect('home&result=fail_captcha');
	    		}
			endif;
			$data['action'] = route('home');
			$this->render('home',$data);
		}
	}
?>