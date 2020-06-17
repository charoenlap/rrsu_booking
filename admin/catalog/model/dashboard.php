<?php 
	class DashboardModel extends db {
		public function getDashboard($data = array()){
			$result = array();
			$sql_student = "SELECT count(id_student) AS sum_student FROM booking_student";
			$sql_event = "SELECT count(id_event) AS sum_event FROM booking_event";
			$sql_take_event = "SELECT count(id_take_event) AS sum_take_event FROM booking_take_event";
			$sql_behavior = "SELECT count(id_behavior) AS sum_behavior FROM booking_behavior";
			$result = array(
				'sum_student' 		=> (int)$this->query($sql_student)->row['sum_student'],
				'sum_event' 		=> (int)$this->query($sql_event)->row['sum_event'],
				'sum_take_event' 	=> (int)$this->query($sql_take_event)->row['sum_take_event'],
				'sum_behavior' 		=> (int)$this->query($sql_behavior)->row['sum_behavior']
			);

			return $result;
		}
	}
?>