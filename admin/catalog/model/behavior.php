<?php  
	class behaviorModel extends db {
		public function listStuBehavior($data=array()){
			$data = array();
			$sql_list = "SELECT * FROM booking_behavior 
			LEFT JOIN booking_behavior_type ON booking_behavior.id_behavior_type = booking_behavior_type.id_behavior_type
			ORDER BY id_behavior DESC";
			$result_behavior = $this->query($sql_list);
			$result = array(
				'num_rows' 	=>  $result_behavior->num_rows,
				'data'		=>	$result_behavior->rows
			);
			return $result;
		}
		public function getBehavior($data=array()){
			$result = array();
			$sql_behavior = "SELECT * FROM booking_behavior_type";
			$result_behavior = $this->query($sql_behavior);
			$result = array(
				'num_rows' 	=>  $result_behavior->num_rows,
				'data'		=>	$result_behavior->rows
			);
			return $result;
		}
		public function addBehavior($data = array()){
			// $result = array();
			$data_insert = array(
				'id_behavior_type' 	=> (int)$data['id_behavior_type'],
				'stu_code'			=> $data['stu_code'],
				'behavior_comment'	=> $data['behavior_comment'],
				'behavior_point'	=> $data['behavior_point'],
				'date_create'		=> date('Y-m-d H:i:s')
			);
			$insert_id = $this->insert('behavior',$data_insert);
			return $insert_id;
		}
	}
?>