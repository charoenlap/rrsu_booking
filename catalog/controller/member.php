<?php  
	class memberController extends Controller{
		public function edit(){
			$data = array();
			$data['result'] = '';
			if(method_post()){
				$member = $this->model('member');
				$id_student = id_student();
				$data_change_pwd = array(
					'password' => post('password'),
					'confirmPassword' => post('confirmPassword'),
					'id_student'	=> (int)$id_student
				);
				$result_change_pwd = $member->changePwd($data_change_pwd);
				$data['result'] = $result_change_pwd['result'];
			}
			$data['action'] = route('member/edit');
			$this->view('member/edit',$data);
		}
	}
?>