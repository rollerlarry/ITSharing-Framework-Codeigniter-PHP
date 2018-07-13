<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member/Register_model');
		$this->load->model('Member/Login_model');
	}

	public function index()
	{
		$this->load->view('register_view');
	}

	public function registerAccount()
	{
		$userName = $this->input->post('userName');
		$passWord = $this->input->post('passWord');
		$confirmPassWord = $this->input->post('confirmPassword');
		$email = $this->input->post('email');
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');

		if ($passWord == $confirmPassWord) {
			if($this->Register_model->checkRegister($userName)){
				$this->Register_model->registerAccount($userName,$passWord,$email,$firstName,$lastName);

				$dataUser = $this->Login_model->getUserInfo($userName);
				$firstName = $dataUser[0]['FirstName'];
				$lastName = $dataUser[0]['LastName'];

				// $sessionData = array(
				// 	'FirstName' => $firstName,
				// 	'LastName' => $lastName
				// );
				// $this->session->set_userdata($sessionData);

				redirect(base_url().'Home','refresh');

			}else{
				$this->session->set_flashdata('account_exist', 'Invalid account');
				redirect(base_url().'Home','refresh');
			}
		}else{
			$this->session->set_flashdata('error_confirmpassword', 'Invalid account');
			redirect(base_url().'Home','refresh');
		}
		
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */