<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkLogin($userName,$passWord)
	{
		$this->db->select('*');
		$this->db->where('UserName', $userName);
		$this->db->where('PassWord', $passWord);
		$check = $this->db->get('tbusers');
		
		if ($check->num_rows() > 0) {
			return true;
		}
		return false;
	}


	public function getUserInfo($userName)
	{
		$this->db->select('*');
		$this->db->where('UserName', $userName);
		$dataUser = $this->db->get('tbusers');
		$dataUser = $dataUser->result_array();

		return $dataUser;
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */