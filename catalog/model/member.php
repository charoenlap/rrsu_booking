<?php 
	class MemberModel extends db {
		public function changePwd($data=array()){
			$result = array(
				'result' => 'fail'
			);
			$password = $this->escape($data['password']);
			$confirmPassword = $this->escape($data['confirmPassword']);
			$id_student = $this->escape($data['id_student']);
			if( ($password == $confirmPassword) AND !empty($password) ){
				$sql = "UPDATE booking_student SET stu_password = MD5('".$password."') WHERE id_student = '".(int)$id_student."'";
				$result_student = $this->query($sql);
				// if($result_student->num_rows){
					$result = array(
						'result' 	=> 'success'
					);
				// }
			}
			return $result;
		}
	}
?>