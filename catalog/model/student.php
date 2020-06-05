<?php 
	class StudentModel extends db {
		public function login($data=array()){
			$result = array(
				'result' => 'fail'
			);
			$stu_code = $this->escape($data['stu_code']);
			$stu_password = $this->escape($data['stu_password']);
			if(!empty($stu_password)){
				$sql = "SELECT * FROM booking_student 
				JOIN booking_type_student
				ON booking_student.id_type_student = booking_type_student.id_type_student 
				JOIN booking_group
				ON booking_student.id_group = booking_group.id_group 
				JOIN booking_branch
				ON booking_student.branch_code = booking_branch.branch_code 
				JOIN booking_center
				ON booking_student.center_code = booking_center.center_code 
				JOIN booking_level
				ON booking_student.level_code = booking_level.level_code
				WHERE 
				(stu_code = '".$stu_code."' AND stu_password=MD5('".$stu_password."')) 
				OR 
				(stu_code = '".$stu_code."' AND stu_birth='".$stu_password."' 
				AND 
				(stu_password='' OR stu_password IS NULL))";
				$result_student = $this->query($sql);
				if($result_student->num_rows){
					$result = array(
						'result' 	=> 'success',
						'data' 		=> $result_student->row
					);
				}
			}
			return $result;
		}
		public function getStudent($data = array()){
			$id_student = (int)$data['id_student'];
			$result = array();
			$sql = "SELECT * FROM booking_student
				JOIN booking_type_student
				ON booking_student.id_type_student = booking_type_student.id_type_student 
				JOIN booking_group
				ON booking_student.id_group = booking_group.id_group 
				JOIN booking_branch
				ON booking_student.branch_code = booking_branch.branch_code 
				JOIN booking_center
				ON booking_student.center_code = booking_center.center_code 
				JOIN booking_level
				ON booking_student.level_code = booking_level.level_code
			WHERE booking_student.id_student = '".$id_student."'
			";
			$result_student = $this->query($sql);
			$result = $result_student->row;
			return $result;
		}
	}
?>