<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member/Courses_model');
	}

	public function index()
	{
		$this->load->view('Member/template');
	}

	public function myCourses()
	{
		$userID = $this->session->userdata('UserID');

		$dataListCourses = $this->Courses_model->getListMyCourses($userID);

		$dataListCourses = array('arrayDataListCourses' => $dataListCourses);
		$this->load->view('member/my_courses_view',$dataListCourses);
	}

	public function searchCourse()
	{
		$searchContent = $this->input->post('search');

		$dataListCoursesSearchResult = $this->Courses_model->searchCourse($searchContent);

		$countCourseSearch = count($dataListCoursesSearchResult);

		
		$dataListCoursesSearchResult = array('arrayDataListCourses' => $dataListCoursesSearchResult, 'countCourseSearch' => $countCourseSearch);
		$this->load->view('member/home_view',$dataListCoursesSearchResult);
	}

	public function addMyCourse()
	{
		$userID = $this->input->post('userID');
		$tutorialID = $this->input->post('tutorialID');
		$categorieID = $this->input->post('categorieID');

		$this->Courses_model->insertMyCourse($userID,$tutorialID,$categorieID);
	}

	public function delMyCourse($tutorialID)
	{
		$this->Courses_model->deleteMyCourse($tutorialID);
	}

	// public function getListMyCourses()
	// {
	// 	$dataListCourses = $this->Courses_model->getListMyCourses();
		

	// 	echo '<pre>';
	// 	var_dump($listIDMyCourses);
	// 	echo '</pre>';

	// 	die();

	// 	$dataListCourses = array('arrayDataListCourses' => $dataListCourses);
	// 	$this->load->view('member/my_courses_view',$dataListCourses);
	// }



}

/* End of file Courses.php */
/* Location: ./application/controllers/Courses.php */