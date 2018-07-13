<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('member/settings_view');
	}

}

/* End of file Settings.php */
/* Location: ./application/controllers/Settings.php */