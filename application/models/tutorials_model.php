<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorials_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getListTutorials()
	{
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$dataTutorials = $this->db->get('tbtutorials');
		return $dataTutorials = $dataTutorials->result_array();
	}

	public function insertTutorial($userID,$tutorialTitle,$tutorialDescription,$tutorialImage,$tutorialCategorie,$tutorialURL,$tutorialURL2,$tutorialURL3,$tutorialLanguage,$tutorialLevel)
	{
		$dataTutorial = array(
			'UserID' => $userID,
			'TutorialTitle' => $tutorialTitle,
			'TutorialDescription' => $tutorialDescription,
			'TutorialImage' => $tutorialImage,
			'CategorieID' => $tutorialCategorie,
			'TutorialURL' => $tutorialURL,
			'TutorialURL2' => $tutorialURL2,
			'TutorialURL3' => $tutorialURL3,
			'TutorialLanguage' => $tutorialLanguage,
			'TutorialLevel' => $tutorialLevel
		);

		return $this->db->insert('tbtutorials', $dataTutorial);
	}

	public function updateTutorial($tutorialID,$tutorialTitle,$tutorialDescription,$tutorialURL,$updateView,$tutorialURL3,$tutorialCategorie,$tutorialLanguage,$tutorialLevel)
	{
		$dataUpdateTutorial = array(
			'TutorialTitle' => $tutorialTitle,
			'TutorialDescription' => $tutorialDescription,
			'TutorialURL' => $tutorialURL,
			'TutorialURL2' => $tutorialURL2,
			'TutorialURL3' => $tutorialURL3,
			'TutorialLanguage' => $tutorialLanguage,
			'TutorialLevel' => $tutorialLevel,
			'CategorieID' => $tutorialCategorie,
		);
		
		$this->db->where('TutorialID', $tutorialID);
		return $this->db->update('tbtutorials', $dataUpdateTutorial);
	}

	public function privateTutorial($tutorialID)
	{
		$dataTutorial = array('TutorialStatus' => 1);
		$this->db->where('TutorialID', $tutorialID);
		$this->db->update('tbtutorials', $dataTutorial);
	}
	public function publicTutorial($tutorialID)
	{
		$dataTutorial = array('TutorialStatus' => 0);
		$this->db->where('TutorialID', $tutorialID);
		$this->db->update('tbtutorials', $dataTutorial);
	}

	public function getInfoDetailTutorial($tutorialID)
	{
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->where('TutorialID', $tutorialID);
		$dataTutorial = $this->db->get('tbtutorials');
		return $dataTutorial = $dataTutorial->result_array();
	}

	public function getUserIDUploadTutorial($tutorialID)
	{
		$this->db->select('*');
		$this->db->where('TutorialID', $tutorialID);
		$userID = $this->db->get('tbtutorials');
		return $userID = $userID->result_array();

	}

	public function getListTutorialsForUser($userID,$tutorialID)
	{
		$this->db->select('*');
		$this->db->where('UserID', $userID);
		$this->db->where_not_in('TutorialID', $tutorialID);
		$dataTutorials = $this->db->get('tbtutorials');
		return $dataTutorials = $dataTutorials->result_array();
	}

	public function getListTutorialsForUserUpload($userID)
	{
		$this->db->select('*');
		$this->db->join('tbcategorietutorials', 'tbtutorials.CategorieID = tbcategorietutorials.CategorieID', 'left');
		$this->db->join('tbusers', 'tbtutorials.UserID = tbusers.UserID', 'left');
		$this->db->order_by('tbtutorials.TutorialID', 'desc');
		$this->db->where('tbtutorials.UserID', $userID);

		$dataTutorials = $this->db->get('tbtutorials');
		
		return $dataTutorials = $dataTutorials->result_array();
	}

	public function delTutorial($tutorialID)
	{
		$this->db->where('TutorialID', $tutorialID);
		return $this->db->delete('tbtutorials');
	}

	public function countListTutorials()
	{
		$this->db->select('*');
		$dataTutorials = $this->db->get('tbtutorials');
		$dataTutorials = $dataTutorials->result_array();

		return count($dataTutorials);
	}

	public function countListTutorialsForUserUpload($userID)
	{
		$this->db->select('*');
		$this->db->where('tbtutorials.UserID', $userID);

		$dataTutorials = $this->db->get('tbtutorials');
		
		return count($dataTutorials->result_array());
	}

	public function updateFastEdit($tutorialID,$tutorialTitle,$tutorialDescription)
	{
		$dataTutorial = array(
			'TutorialTitle' => $tutorialTitle,
			'TutorialDescription' => $tutorialDescription
		);
		$this->db->where('TutorialID', $tutorialID);
		return $this->db->update('tbtutorials', $dataTutorial);
	}

	public function updateView($tutorialID)
	{
		$this->db->where('TutorialID', $tutorialID);
		$this->db->set('TutorialView', 'TutorialView + 1', FALSE);
		$this->db->update('tbtutorials');
	}

	public function updateCountDownload($tutorialID)
	{
		$this->db->where('TutorialID', $tutorialID);
		$this->db->set('TutorialCountDownload', 'TutorialCountDownload + 1', FALSE);
		$this->db->update('tbtutorials');
	}















	//Categories

	public function insertCategorie($categorieName,$categorieIcon)
	{
		$dataCategorie = array(
			'CategorieName' => $categorieName,
			'CategorieIcon' => $categorieIcon
		);

		return $this->db->insert('tbcategorietutorials ', $dataCategorie);
	}

	public function getListCategories()
	{
		$this->db->select('*');
		
		$dataCategorie = $this->db->get('tbcategorietutorials');
		return $dataCategorie = $dataCategorie->result_array();

	}

	public function editCategorie($CategorieID,$categorieNameEdit)
	{
		$dataCategorie = array(
			'CategorieName' => $categorieNameEdit
		);

		$this->db->where('CategorieID', $CategorieID);
		return $this->db->update('tbcategorietutorials', $dataCategorie);
	}

	public function delCategorie($CategorieID)
	{
		$this->db->where('CategorieID', $CategorieID);
		return $this->db->delete('tbcategorietutorials');
	}

}

/* End of file tutorials_model.php */
/* Location: ./application/models/tutorials_model.php */