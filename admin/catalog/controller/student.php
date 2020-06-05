<?php  
	class studentController extends Controller{
		public function home(){
			$data = array();
			$student = $this->model('student');
			$center = $this->model('center');
			$data['list_center'] = $center->getCenter()['data'];

			$group = $this->model('group');
			$data['list_group'] = $group->getGroup()['data'];

			$level = $this->model('level');
			$data['list_level'] = $level->getLevel()['data'];

			$branch = $this->model('branch');
			$data['list_branch'] = $branch->getBranch()['data'];
			// $result = $student->getstudent();
			$data['action_form_import'] = route('student/importExcel');
			
			$link = route('student/home');
			$page = (int)(get('page')?get('page'):1);

			$data['center_code'] 	= $center_code  	= (get('center_code')?get('center_code'):$data['list_center'][0]['center_code']);
			$data['level_code'] 	= $level_code  		= (get('level_code')?get('level_code'):'');
			$data['stu_code'] 		= $stu_code  		= (get('stu_code')?get('stu_code'):'');
			$data['id_group'] 		= $id_group  		= (get('id_group')?get('id_group'):'');
			$data['branch_code'] 	= $branch_code  	= (get('branch_code')?get('branch_code'):'');

			// echo $stu_code;exit();
			$data_student = array(
				'page' => $page,
				'center_code' 	=> $center_code,
				'level_code' 	=> $level_code,
				'stu_code'		=> $stu_code,
				'id_group'		=> $id_group,
				'branch_code'	=> $branch_code
			);
			$result_student = $student->getstudent($data_student);
			$data['result_student'] = $result_student['data'];
			$data_pageing = array(
				'total' 	=> $result_student['num_rows'],
				'link' 		=> $link,
				'active' 	=> $page,
			);
			$data['page'] = $page;
			$data['pageing'] = pageing($data_pageing);
			$data['action'] = route('student/home');
			// $data['']
			
			$this->view('student/home',$data);
		}
		public function importExcel(){ 
			$path = 'admin/file/';
			$name = time().'_'.$_FILES['file']['name'];
			$result_upload = upload_excel($_FILES['file'],DOCUMENT_ROOT.$path,$name);
			if($result_upload){
				$path = $path.$name;
				$result_excel = readExcel($path);
				$data_excel = array();
				$count = 1;
				$file_csv_output = DOCUMENT_ROOT.'admin/csv/'.time()."_output.csv";
				$output = fopen($file_csv_output,'w') or die("Can't open ".$file_csv_output);
				foreach($result_excel as $val){
					$year = substr($val[0],0,2);
					$data_excel = array(
						'stu_code' 			=> $val[0],
						'center_code' 		=> sprintf("%02d", $val[1]),
						'id_type_student' 	=> $val[2],
						'id_group' 			=> $val[3],
						'branch_code' 		=> $val[4],
						'level_code' 		=> $val[5],
						'stu_prefix' 		=> $val[6],
						'stu_name' 			=> $val[7],
						'stu_lname' 		=> $val[8],
						'stu_birth' 		=> $val[9],
						'stu_year'			=> $year
					);
					fputcsv($output, $data_excel);
					$count++; 
				}
				fclose($output) or die("Can't close ".$file_csv_output);
				// echo "<pre>";
				// var_dump($data_excel);exit();
				$student = $this->model('student');
				$data_insert = array(
					'csv' => $file_csv_output
				);
				$result_student = $student->muntiInsertStudent($data_insert);
				header('location:index.php?route=student/home');
			}
			
		}
		public function exportExcel(){
			$data = array();
			$student = $this->model('student');
			$data_excel = $student->exportStudent();
			$FileName = time().'_export.xlsx';
			$path = 'admin/excel/';
			$result = exportExcel($FileName,$path,$data_excel);
			header('location:excel/'.$FileName); 
		}
	}
?>