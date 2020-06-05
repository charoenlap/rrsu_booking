<?php  
	class studentModel extends db {
		public function getTypeStudent($data=array()){
			$result = array();
			$sql = "SELECT * FROM booking_type_student";
			$result = $this->query($sql);
			// $result_num_rows = $this->query("SELECT * ".$sql);
			$result = array(
				// 'num_rows' 	=>  $result_num_rows->num_rows,
				'data'		=>	$result->rows
			);
			return $result;
		}
		public function muntiInsertStudent($data = array()){
			$result = array(
				'result' => 'fail'
			);
			if(isset($data['csv'])){
				if(!empty($data['csv'])){
					$this->query('TRUNCATE booking_student;');
					$sql = "LOAD DATA LOCAL INFILE '" . $data['csv'] . "' INTO TABLE booking_student FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' 
					IGNORE 1 ROWS (stu_code,center_code,id_type_student,id_group,branch_code,level_code,stu_prefix,stu_name,stu_lname,stu_birth,stu_year);";

					$result_dump_file = $this->query($sql);
					$result = array(
						'result' => 'success'
					);
				}
			}
			return $result;
		}
		public function exportStudent($data = array()){
			$result = array();
			$sql = "SELECT * FROM booking_student";
			$result_student = $this->query($sql);
			foreach($result_student->rows as $val){
				$result[] = array(
					'stu_code' => $val['stu_code'],
					'center_code' => $val['center_code'],
					'id_type_student' => $val['id_type_student'],
					'id_group' => $val['id_group'],
					'branch_code' => $val['branch_code'],
					'level_code' => $val['level_code'],
					'stu_prefix' => $val['stu_prefix'],
					'stu_name' => $val['stu_name'],
					'stu_lname' => $val['stu_lname'],
					'stu_birth' => $val['stu_birth']
				);
			}
			return $result;
		}
		public function getstudent($data=array()){
			$result = array();
			// echo $data['page'];exit();
			$where = "WHERE id_student <> '' ";
			$center_code = (isset($data['center_code'])?$data['center_code']:'');
			$stu_code = (isset($data['stu_code'])?$data['stu_code']:'');
			$id_group = (isset($data['id_group'])?$data['id_group']:'');
			$branch_code = (isset($data['branch_code'])?$data['branch_code']:'');
			$level_code = (isset($data['level_code'])?$data['level_code']:'');

			if(!empty($stu_code)){
				$where .= " AND booking_student.stu_code like '%".$stu_code."%'";
			}
			if(!empty($center_code)){
				$where .= " AND booking_center.center_code = '".$center_code."'";
			}
			$id_group = (isset($data['id_group'])?$data['id_group']:'');
			if(!empty($id_group)){
				$where .= " AND booking_group.id_group = '".$id_group."'";
			}
			$branch_code = (isset($data['branch_code'])?$data['branch_code']:'');
			if(!empty($branch_code)){
				$where .= " AND booking_branch.branch_code  = '".$branch_code."'";
			}
			$level_code = (isset($data['level_code'])?$data['level_code']:'');
			if(!empty($level_code)){
				$where .= " AND booking_level.level_code  = '".$level_code."'";
			}
			$page = ($data['page']-1)*DEFAULT_LIMIT_PAGE;
			$sql_stu = " FROM booking_student 
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
			";
			// echo $where;exit();
			$result_stu = $this->query("SELECT * ".$sql_stu.$where.' LIMIT '.($page).','.DEFAULT_LIMIT_PAGE);
			$result_stu_num_rows = $this->query("SELECT * ".$sql_stu.$where);
			$result = array(
				'num_rows' 	=>  $result_stu_num_rows->num_rows,
				'data'		=>	$result_stu->rows
			);
			return $result;
		}
	}
?>