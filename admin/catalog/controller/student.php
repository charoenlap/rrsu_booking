<?php  
	class studentController extends Controller{
		public function home(){
			$data = array();
			$student = $this->model('student');
			$result = $student->getstudent();
			$data['result_student'] = $result;
			$this->view('student/home',$data);
		}
	}
?>