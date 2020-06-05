<?php  
	class centerModel extends db {
		public function getCenter($data=array()){
			$result = array();
			$sql_booking_center = "SELECT * FROM booking_center ORDER BY center_name";
			$result_booking_center = $this->query($sql_booking_center);
			// $result_booking_center_num_rows = $this->query("SELECT * ".$sql_booking_center);
			$result = array(
				// 'num_rows' 	=>  $result_booking_center_num_rows->num_rows,
				'data'		=>	$result_booking_center->rows
			);
			return $result;
		}
	}
?>