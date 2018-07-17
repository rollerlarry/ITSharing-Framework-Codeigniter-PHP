<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member/Courses_model');
		$this->numberCourseOnPage = 10;
	}

	public function index()
	{
		if ($this->session->has_userdata('UserID')) {
			$userID = $this->session->userdata('UserID');
			$listIDMyCourses = $this->Courses_model->getIDListMyCourses($userID);
			$countMyCourses = count($this->Courses_model->getIDListMyCourses($userID));
			$dataListCourses = $this->Courses_model->getListCourses($this->numberCourseOnPage,$listIDMyCourses,$countMyCourses);

			$numberCourses = count($dataListCourses);
			$numberPage = ceil($numberCourses/$this->numberCourseOnPage)+1;

			$dataListCourses = array('arrayDataListCourses' => $dataListCourses, 'numberPage' =>  $numberPage);

			$this->load->view('member/home_view',$dataListCourses);
		}else{
			$dataListCourses = $this->Courses_model->getListCoursesNotLoginHome($this->numberCourseOnPage);
			$numberPage = $this->Courses_model->getNumberPage($this->numberCourseOnPage);

			$dataListCourses = array('arrayDataListCourses' => $dataListCourses, 'numberPage' =>  $numberPage);

			$this->load->view('member/home_view',$dataListCourses);
		}
	}

	public function page($numberPageCurrent)
	{
		if ($numberPageCurrent <=0) {
			redirect(base_url().'Home','refresh');
		}else{

			if ($this->session->has_userdata('UserID')) {
				$userID = $this->session->userdata('UserID');
				$listIDMyCourses = $this->Courses_model->getIDListMyCourses($userID);
				$countMyCourses = count($this->Courses_model->getIDListMyCourses($userID));
				$dataListCourses = $this->Courses_model->getListCoursesForPage($this->numberCourseOnPage,$numberPageCurrent,$listIDMyCourses,$countMyCourses);
				$numberCourses = count($dataListCourses);
				$numberPage = ceil($numberCourses/$this->numberCourseOnPage)+1;


				$dataListCourses = array('arrayDataListCourses' => $dataListCourses, 'numberPage' =>  $numberPage);

				$this->load->view('member/home_view',$dataListCourses);
			}else{
				$dataListCourses = $this->Courses_model->getListCoursesNotLogin($this->numberCourseOnPage,$numberPageCurrent);
				$numberPage = $this->Courses_model->getNumberPage($this->numberCourseOnPage,$numberPageCurrent);

				$dataListCourses = array('arrayDataListCourses' => $dataListCourses, 'numberPage' =>  $numberPage);

				$this->load->view('member/home_view',$dataListCourses);
			}
		}
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */