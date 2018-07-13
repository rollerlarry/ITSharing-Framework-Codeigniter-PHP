<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkRegister($userName)
	{
		$this->db->select('*');
		$this->db->where('UserName', $userName);
		$check = $this->db->get('tbusers');

		if ($check->num_rows() > 0) {
			return false;
		}
		return true;
	}

	public function registerAccount($userName,$passWord,$email,$firstName,$lastName)
	{
		$userData = array(
			'UserName' => $userName,
			'Password' => $passWord,
			'FirstName' => $firstName,
			'LastName' => $lastName,
			'Email' => $email,
			'UserLevel' => 0,
			'Status' => 1,
			'UserImage' => base_url().'uploads/avatar/default-avatar.png'
		);
		return $this->db->insert('tbusers', $userData);
	}

}

/* End of file register_model.php */
/* Location: ./application/models/register_model.php */