<?php  
	class eventModel extends db {
		public function listUploadEvent($data = array()){
			$result = array();
			$sql = "SELECT * FROM booking_upload_event ORDER BY id_event_file DESC";
			$result_upload_event = $this->query($sql);
			$result = $result_upload_event->rows;
			return $result;
		}
		public function approveEvent($data = array()){
			$result = array();
			$data_insert = array(
				'file_name' => $data['file_name'],
				'date_create' => date('Y-m-d H:i:s')
			);
			$result_upload_event = $this->insert('upload_event',$data_insert);
			$where = '';
			foreach($data['list_approve'] as $val){
				$where .= " OR (id_take_event = '".$val."')";
			}
			$this->query("UPDATE booking_take_event SET t_e_status = '3' WHERE (t_e_status = '0' ) ".$where);
			$result = array(
				'result' => 'success'
			);
			return $result;
		}
		public function getEventDetail($data=array()){
			$result = array();
			$id_event = (int)$data['id_event'];
			$sql_event = "SELECT * FROM booking_event WHERE id_event = '".$id_event."'";
			$result_event = $this->query($sql_event);

			$sql_event_sub = "SELECT * FROM booking_event_sub WHERE id_event = '".$id_event."'";
			$result_event_sub = $this->query($sql_event_sub);

			$result = array(
				'data' => $result_event->row,
				'sub' => $result_event_sub->rows
			);

			return $result;
		}
		public function actionEvent($data=array()){
			$id_event = (int)$data['id_event'];
			$data_event = array(
				'event_name' 		=> $data['event_name'],
				'event_year' 		=> $data['event_year'],
				'event_place' 		=> $data['event_place'],
				'event_head' 		=> $data['event_head'],
				'event_date_start' 	=> $data['event_date_start'],
				'event_date_end' 	=> $data['event_date_end'],
				'event_total' 		=> $data['event_total'],
				'event_hour' 		=> $data['event_hour'],
				'event_unit' 		=> $data['event_unit'],
				'event_detail' 		=> $data['event_detail'],

			);
			if(!empty($data['event_file'])){
				$data_event['event_file'] = $data['event_file'];
			}
			
			$this->delete('event_sub',"id_event='".$id_event."'");
			
			if($data['id_event']){
				$result_update = $this->update('event',$data_event,"id_event = '".$id_event."'");
			}else{
				$data_event['event_status'] 		= 0;
				$data_event['event_total_join'] 	= 0;
				$id_event = $this->insert('event',$data_event);
			}
			$data_event_sub = array(); 
			foreach($data['chk'] as $key => $val){
				$data_event_sub[] = array(
					'id_event_type' 	=> $data['id_event_type'][$key],
					'id_type_student' 	=> $data['id_type_student'][$key],
					'id_event'			=> $id_event,
					'year_1'			=> (isset($val[1])?$val[1]:0),
					'year_2'			=> (isset($val[2])?$val[2]:0),
					'year_3'			=> (isset($val[3])?$val[3]:0),
					'year_4'			=> (isset($val[4])?$val[4]:0),
					'year_5'			=> (isset($val[5])?$val[5]:0)
				);
			}
			foreach($data_event_sub as $val){
				$this->insert('event_sub',$val);
			}
		}
		public function getEvent($data=array()){
			$result = array();
			$sql_booking_event = "SELECT * FROM booking_event";
			$result_booking_event = $this->query($sql_booking_event);
			// $result_booking_event_num_rows = $this->query("SELECT * ".$sql_booking_event);
			$result = array(
				// 'num_rows' 	=>  $result_booking_event_num_rows->num_rows,
				'data'		=>	$result_booking_event->rows
			);
			return $result;
		}
		public function getEventType($data=array()){
			$result = array();
			$sql_booking_event_type = "SELECT * FROM booking_event_type";
			$result_booking_event_type = $this->query($sql_booking_event_type);
			// $result_booking_event_type_num_rows = $this->query("SELECT * ".$sql_booking_event_type);
			$result = array(
				// 'num_rows' 	=>  $result_booking_event_type_num_rows->num_rows,
				'data'		=>	$result_booking_event_type->rows
			);
			return $result;
		}
	}
?>