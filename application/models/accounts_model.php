<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class accounts_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getInfoMyProfile($userId)
	{
		$this->db->select('*');
		$this->db->where('UserID', $userId);
		$dataMyProfile = $this->db->get('tbusers');
		return $dataMyProfile = $dataMyProfile->result_array();

	}

	public function getListAccounts()
	{
		$this->db->select('*');
		$dataAccounts = $this->db->get('tbusers');
		$dataAccounts = $dataAccounts->result_array();

		return $dataAccounts;
	}

	public function editAccount($userID,$firstName,$lastName,$email)
	{
		$dataAccount = array(
			'FirstName' => $firstName,
			'LastName' => $lastName,
			'Email' => $email
		);
		$this->db->where('UserID', $userID);
		return $this->db->update('tbusers', $dataAccount);
	}

	public function delAccount($userID)
	{
		$this->db->where('UserID', $userID);
		return $this->db->delete('tbusers');
	}

	public function getInfoAccount($userID)
	{
		$this->db->select('*');
		$this->db->where('UserID', $userID);
		$dataAccount = $this->db->get('tbusers');

		return $dataAccount = $dataAccount->result_array();
	}

	public function updateDetailAccount($userID,$firstName,$lastName,$email,$address,$city,$country,$postalCode,$userLevel,$about,$userImage)
	{
		$dataAccount = array(
			'FirstName' => $firstName,
			'LastName' => $lastName,
			'Email' => $email,
			'Address' => $address,
			'City' => $city,
			'Country' => $country,
			'PostalCode' => $postalCode,
			'UserLevel' => $userLevel,
			'About' => $about,
			'UserImage' => $userImage
		);
		$this->db->where('UserID', $userID);
		return $this->db->update('tbusers', $dataAccount);
	}

	public function updateMyProfile($userID,$firstName,$lastName,$email,$address,$city,$country,$postalCode,$about)
	{
		$dataMyProfile = array(
			'FirstName' => $firstName,
			'LastName' => $lastName,
			'Email' => $email,
			'Address' => $address,
			'City' => $city,
			'Country' => $country,
			'PostalCode' => $postalCode,
			'About' => $about
		);
		$this->db->where('UserID', $userID);
		return $this->db->update('tbusers', $dataMyProfile);
	}

	



}

/* End of file accounts_model.php */
/* Location: ./application/models/accounts_model.php */