<?php 
	class BehaviorModel extends db {
		public function listBehavior($data = array()){
			$result = array();
			$stu_code = $data['stu_code'];
			$sql = "SELECT * FROM booking_behavior LEFT JOIN booking_behavior_type ON booking_behavior.id_behavior_type = booking_behavior_type.id_behavior_type
			 WHERE stu_code = '".$stu_code."'";
			$result_behavior = $this->query($sql);
			$result = $result_behavior->rows;
			return $result;
		}
	}
?>