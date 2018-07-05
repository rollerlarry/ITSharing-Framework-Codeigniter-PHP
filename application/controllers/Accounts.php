<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('accounts_model');
	}

	public function index()
	{
		
	}

	public function myProfile()
	{
		$userId =  $this->session->userdata('UserID');
		$dataMyProfile = $this->accounts_model->getInfoMyProfile($userId);
		$dataMyProfile = array('arrayDataMyProfile' => $dataMyProfile);
		$this->load->view('myprofile_admin_view',$dataMyProfile);
	}

	public function editMyProfiel($userID)
	{
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$email = $this->input->post('email'); 
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$country = $this->input->post('country');
		$postalCode = $this->input->post('postalCode');
		$about = $this->input->post('about');

		// echo '<pre>';
		// var_dump($firstName);
		// var_dump($lastName);
		// var_dump($email);
		// var_dump($address);
		// var_dump($city);
		// var_dump($country);
		// var_dump($postalCode);
		// var_dump($about);
		// echo '</pre>';

		$this->accounts_model->updateMyProfile();
		redirect(base_url().'Accounts/myProfile','refresh');
	}

	public function manageAccounts()
	{
		$dataAccounts = $this->accounts_model->getListAccounts();
		$dataAccounts = array('arrayDataAccounts' => $dataAccounts);
		$this->load->view('manage_accounts_view',$dataAccounts);


	}

	public function editAccount($userID)
	{
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$email = $this->input->post('email'); 
		$this->accounts_model->editAccount($userID,$firstName,$lastName,$email);
	}

	public function delAccount($userID)
	{
		$this->accounts_model->delAccount($userID);
		
	}

	public function detailAccount($userID)
	{
		$dataAccount = $this->accounts_model->getInfoAccount($userID);
		$dataAccount = array('arrayDataAccount' => $dataAccount);
		$this->load->view('detail_account_view',$dataAccount);
	}

	public function editDetailAccount($userID)
	{
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$email = $this->input->post('email'); 
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$country = $this->input->post('country');
		$postalCode = $this->input->post('postalCode');
		$userLevel = $this->input->post('userLevel');
		$about = $this->input->post('about');

		$userImageHidden = $this->input->post('userImageHidden');

		// echo '<pre>';
		// var_dump($userLevel);
		// echo '</pre>';

		// die();

		$target_dir = "uploads/avatar/";
		$target_file = $target_dir . basename($_FILES["userImage"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image

		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["userImage"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["userImage"]["size"] > 500000) {
		    //echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["userImage"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["userImage"]["name"]). " has been uploaded.";
		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}
		
		$imageName = basename($_FILES["userImage"]["name"]);

		if($imageName == NULL){
			$userImage = $userImageHidden;
			$this->accounts_model->updateDetailAccount($userID,$firstName,$lastName,$email,$address,$city,$country,$postalCode,$userLevel,$about,$userImage);
			redirect(base_url().'Accounts/detailAccount/'.$userID,'refresh');

		}else{ 
			$userImage = base_url().$target_file;
			$this->accounts_model->updateDetailAccount($userID,$firstName,$lastName,$email,$address,$city,$country,$postalCode,$userLevel,$about,$userImage);
			redirect(base_url().'Accounts/detailAccount/'.$userID,'refresh');
		}

	}

	public function createAccount()
	{
		$this->load->view('create_account_view');
	}

}

/* End of file Accounts.php */
/* Location: ./application/controllers/Accounts.php */