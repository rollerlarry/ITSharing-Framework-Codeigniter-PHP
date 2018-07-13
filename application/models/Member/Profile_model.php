<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getProfile($userID)
	{
		$this->db->select('*');
		$this->db->where('UserID', $userID);
		$dataProfile = $this->db->get('tbusers');
		return $dataProfile = $dataProfile->result_array();
	}

	public function editProfile($userID,$firstName,$lastName,$about)
	{
		$dataEditProfile = array(
			'FirstName' => $firstName,
			'LastName' => $lastName,
			'About' => $about
		);
		$this->db->where('UserID', $userID);
		return $this->db->update('tbusers', $dataEditProfile);
	}

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */