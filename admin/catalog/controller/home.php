<?php  
	class homeController extends Controller{
		public function index(){
			$data = array();
			if(method_post()):
				$data = $_POST;
				$admin = $this->model('admin');
				$data_select = array(
					'username' => $data['username'],
					'password' => $data['password']
				);
				$result_admin = $admin->login($data_select);
				if($result_admin['result'] == 'success'){
					redirect('dashboard/dashboard');
				}else{
					redirect('home&result=fail');
				}
			endif;
			$data['action'] = route('home');
			$this->render('home',$data);
		}
	}
?>