<?php  
	class studentModel extends db {
		public function getstudent($data=array()){
			$result = array();
			$sql = "SELECT * FROM sl_student";
			$result = $this->query($sql)->rows;
			return $result;
		}
	}
?>