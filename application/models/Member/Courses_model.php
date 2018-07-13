<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getListCoursesNotLoginHome($numberCourseOnPage)
	{
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$dataCourses = $this->db->get('tbtutorials',$numberCourseOnPage);
		return $dataCourses = $dataCourses->result_array();
	}

	public function getListCoursesNotLogin($numberCourseOnPage,$numberPageCurrent)
	{
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$offset = ($numberPageCurrent-1)*$numberCourseOnPage;
		$dataCourses = $this->db->get('tbtutorials',$numberCourseOnPage,$offset);
		return $dataCourses = $dataCourses->result_array();
	}

	public function getListCourses($numberCourseOnPage,$listIDMyCourses,$countMyCourses)
	{
		$arrayID = array();
		if ($countMyCourses == 0) {
			$arrayID = 0;
		}else{
			for ($i = 0; $i < $countMyCourses; $i++) {
				array_push($arrayID, $listIDMyCourses[$i]['TutorialID']);
			}
		}
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$this->db->where_not_in('tbtutorials.TutorialID', $arrayID);
		$dataCourses = $this->db->get('tbtutorials',$numberCourseOnPage,0);
		return $dataCourses = $dataCourses->result_array();
	}

	public function getListCoursesForPage($numberCourseOnPage,$numberPageCurrent,$listIDMyCourses,$countMyCourses)
	{
		$arrayID = array();
		if ($countMyCourses == 0) {
			$arrayID = 0;
		}else{
			for ($i = 0; $i < $countMyCourses; $i++) {
				array_push($arrayID, $listIDMyCourses[$i]['TutorialID']);
			}
		}
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$this->db->where_not_in('tbtutorials.TutorialID', $arrayID);
		$offset = ($numberPageCurrent-1)*$numberCourseOnPage;
		$dataCourses = $this->db->get('tbtutorials',$numberCourseOnPage,$offset);
		return $dataCourses = $dataCourses->result_array();
	}

	public function getNumberPage($numberCourseOnPage)
	{
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$dataCourses = $this->db->get('tbtutorials');
		$dataCourses = $dataCourses->result_array();
		$numberCourses = count($dataCourses);
		return $numberPage = ceil($numberCourses/$numberCourseOnPage);
	}

	

	public function getListMyCourses($userID)
	{
		
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbmytutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbmytutorials.UserID = tbusers.UserID', 'left');
		$this->db->join('tbtutorials', 'tbmytutorials.TutorialID = tbtutorials.TutorialID', 'left');
		$this->db->where('tbmytutorials.UserID', $userID);
		$dataCourses = $this->db->get('tbmytutorials');
		return $dataCourses = $dataCourses->result_array();
	}

	public function getIDListMyCourses($userID)
	{
		$this->db->select('TutorialID');
		$this->db->where('UserID', $userID);
		$dataCourses = $this->db->get('tbmytutorials');
		return $dataCourses = $dataCourses->result_array();
	}

	public function searchCourse($serachContent)
	{
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$this->db->like('TutorialTitle', $serachContent, 'BOTH');
		$dataCourses = $this->db->get('tbtutorials');
		return $dataCourses = $dataCourses->result_array();
	}

	public function insertMyCourse($userID,$tutorialID,$categorieID)
	{
		$dataCourses = array(
			'TutorialID' => $tutorialID,
			'UserID' => $userID,
			'categorieID' => $categorieID
		);

		$this->db->insert('tbmytutorials', $dataCourses);
	}

	public function deleteMyCourse($tutorialID)
	{
		$this->db->where('TutorialID', $tutorialID);
		return $this->db->delete('tbmytutorials');
	}

}

/* End of file Courses_model.php */
/* Location: ./application/models/Courses_model.php */