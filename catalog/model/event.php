<?php 
	class EventModel extends db {
		public function listApproveEvent($data = array()){
			$result = array();
			$stu_code = (int)$data['stu_code'];
			$t_e_status = (int)$data['t_e_status'];
			$sql = "SELECT * FROM booking_take_event 
			LEFT JOIN booking_event_sub ON booking_take_event.id_event_sub = booking_event_sub.id_event_sub  
			LEFT JOIN booking_event ON booking_event_sub.id_event = booking_event.id_event  
			LEFT JOIN booking_event_type ON booking_event_sub.id_event_type = booking_event_type.id_event_type 
			WHERE stu_code='".$stu_code."' AND t_e_status = '".$t_e_status."'";
			$result_event = $this->query($sql);
			foreach($result_event->rows as $val){
				$result[] = array(
					'id_event'			=> $val['id_event'],
					'event_name' 		=> $val['event_name'],
					'event_date_start'	=> $val['event_date_start'],
					'event_unit'		=> $val['event_unit'],
					'event_type_name'	=> $val['event_type_name'],
					'event_hour'		=> $val['event_hour'],
					'status_event'		=>	''
				);
			}
			return $result;
		}
		public function check_event($data=array()){
			$result = array(
				'result' => 'fail'
			);
			$id_take_event = (int)$data['id_take_event'];
			$stu_code = (int)$data['stu_code'];
			$sql = "SELECT * FROM booking_take_event WHERE id_take_event='".$id_take_event."' AND stu_code='".$stu_code."'";
			$result_check = $this->query($sql);
			if($result_check->num_rows>0){
				$result = array(
					'result' => 'success',
					'id_event' => $result_check->row['id_event']
				);
			}
			return $result;
		}
		public function getEvent($data=array()){
			$id_event = (int)$data['id_event'];
			$stu_code = (int)$data['stu_code'];
			$sql = "SELECT * FROM booking_take_event 
			LEFT JOIN booking_event ON booking_take_event.id_event = booking_event.id_event 
			WHERE booking_take_event.id_event='".$id_event."' AND stu_code='".$stu_code."'";
			$result_check = $this->query($sql);
			if($result_check->num_rows>0){
				$result = $result_check->row;
			}
			return $result;
		}
		public function listEvent($data=array()){
			$date_start = $data['date_start'];
			$date_end 	= $data['date_end'];
			$list_event_type = $data['list_event_type'];
			$id_type_student = (int)$data['id_type_student'];
			$current_year = (int)$data['current_year'];

			$where = '';
			if(!empty($date_start) AND !empty($date_end)){
				$where .= " AND (event_date BETWEEN '".$date_start."' AND '".$date_end."')";
			}
			if(!empty($list_event_type)){
				$where .= " AND (event_type = '".$list_event_type."') ";
			}
			$where .= " AND booking_event_sub.id_type_student = '".$id_type_student."' AND booking_event_sub.year_".$current_year." = '1'";
			$result = array();
			$sql = "SELECT * FROM booking_event 
			LEFT JOIN booking_event_sub ON booking_event.id_event = booking_event_sub.id_event 
			LEFT JOiN booking_event_type ON booking_event_type.id_event_type = booking_event_sub.id_event_type 
			LEFT JOIN booking_type_student ON booking_type_student.id_type_student = booking_event_sub.id_type_student 
			WHERE event_status <> 3 ".$where;
			$result = $this->query($sql)->rows;
			return $result;
		}
		public function getTakeEvent($data=array()){
			$result = array();
			$id_student = (int)$data['id_student'];
			$status = (int)$data['status'];
			$sql = "SELECT * FROM booking_take_event 
			LEFT JOIN booking_event ON booking_take_event.id_event = booking_event.id_event 
			WHERE id_student = '".$id_student."' AND (t_e_status = '".$status."') ";
			$result = $this->query($sql)->rows;
			return $result;
		}
		public function takeEvent($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$id_event_sub = (int)$data['id_event_sub'];
			$sql_event_sub = "SELECT * FROM booking_event_sub WHERE id_event_sub='".(int)$data['id_event_sub']."'";
			$result_event_sub = $this->query($sql_event_sub);
			$data['id_event'] = $result_event_sub->row['id_event'];


			$sql_check_booking = "SELECT * FROM booking_take_event WHERE id_student='".(int)$data['id_student']."' AND id_event = '".(int)$data['id_event']."'";
			$result_check_booking = $this->query($sql_check_booking);
			if($sql_check_booking->num_rows == 0 ){
				$sql_event = "SELECT * FROM booking_event WHERE id_event = '".(int)$data['id_event']."'";
				$result_event = $this->query($sql_event);

				$data_insert = array(
					'id_student' => $data['id_student'],
					'stu_code'	=> $data['stu_code'],
					'id_event' => $data['id_event'],
					't_e_status' => '0',
					'take_event_no' => ((int)$result_event->row['event_total_join']+1),
					'id_event_sub'	=> $data['id_event_sub']
				);
				$result_insert = $this->insert('take_event',$data_insert);

				$sql_update_event = "UPDATE booking_event SET event_total_join = event_total_join+1 WHERE id_event = '".(int)$data['id_event']."'";
				$this->query($sql_update_event);
				$result = array(
					'result' => 'success',
					'detail'=> $result_insert
				);
			}
			return $result;
		}
		public function listTypeEvent($data=array()){
			$result = array();
			$list = array(
				'กิจกรรมบังคับ','กิจกรรมเลือก'
			);
			$result = $list;
			// 
			// $sql = "SELECT * FROM booking_event";
			// $result = $this->query($sql)->rows;
			return $result;
		}
	}
?>