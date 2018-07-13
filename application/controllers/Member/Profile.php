<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member/Profile_model');
	}

	public function index()
	{
		$userID = $this->session->userdata('UserID');
		$dataProfile = $this->Profile_model->getProfile($userID);
		$dataProfile = array('arrayDataProfile' => $dataProfile);

		$this->load->view('member/profile_view',$dataProfile);
	}

	public function editProfile($userID)
	{
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$about = $this->input->post('about');
		$this->Profile_model->editProfile($userID,$firstName,$lastName,$about);
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */