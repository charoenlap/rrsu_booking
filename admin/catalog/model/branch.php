<?php  
	class branchModel extends db {
		public function getBranch($data=array()){
			$result = array();
			$sql_booking_branch = "SELECT * FROM booking_branch ORDER BY branch_name";
			$result_booking_branch = $this->query($sql_booking_branch);
			// $result_booking_branch_num_rows = $this->query("SELECT * ".$sql_booking_branch);
			$result = array(
				// 'num_rows' 	=>  $result_booking_branch_num_rows->num_rows,
				'data'		=>	$result_booking_branch->rows
			);
			return $result;
		}
	}
?>