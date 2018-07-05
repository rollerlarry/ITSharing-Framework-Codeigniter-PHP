<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lock extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('lock_view');
	}

}

/* End of file Lock.php */
/* Location: ./application/controllers/Lock.php */