<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member/Login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function loginAccount()
	{
		$userName = $this->input->post('userName');
		$passWord = $this->input->post('passWord');

		if($this->Login_model->checkLogin($userName,$passWord)){
			$dataUser = $this->Login_model->getUserInfo($userName);

			$userId = $dataUser[0]['UserID'];
			$firstName = $dataUser[0]['FirstName'];
			$lastName = $dataUser[0]['LastName'];
			$userLevel = $dataUser[0]['UserLevel'];
			$accountStatus = $dataUser[0]['Status'];
			$userImage = $dataUser[0]['UserImage'];

			$sessionDataOne = array(
				'UserImage' => $userImage,
				'UserID' => $userId,
				'FirstName' => $firstName,
				'LastName' => $lastName,
				'UserLevel' => $userLevel
			);
			$sessionDataTwo = array(
				'UserImage' => $userImage,
				'UserID' => $userId,
				'FirstName' => $firstName,
				'LastName' => $lastName
			);

			

			if ($accountStatus == 1) {
				if($userLevel == 1){
					$this->session->set_userdata($sessionDataOne);
					redirect(base_url().'Dashboard','refresh');
				}else{
					$this->session->set_userdata($sessionDataTwo);
					redirect(base_url(),'refresh');
				}
			}else{
				$this->session->set_flashdata('account_lock', 'Invalid account');
				redirect(base_url(),'refresh');
			}
		}else{
			$this->session->set_flashdata('login_error', 'Invalid username');
			redirect(base_url(),'refresh');
		}
	}
	public function logoutAccount()
	{
		$sessionData = array(
			'UserImage',
			'UserID', 
			'FirstName', 
			'LastName',
			'UserLevel' 
		);
		$this->session->unset_userdata($sessionData);
		redirect(base_url(),'refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */