<?php  
	class groupModel extends db {
		public function getGroup($data=array()){
			$result = array();
			$sql_booking_group = "SELECT * FROM booking_group ORDER BY group_name";
			$result_booking_group = $this->query($sql_booking_group);
			// $result_booking_group_num_rows = $this->query("SELECT * ".$sql_booking_group);
			$result = array(
				// 'num_rows' 	=>  $result_booking_group_num_rows->num_rows,
				'data'		=>	$result_booking_group->rows
			);
			return $result;
		}
	}
?>