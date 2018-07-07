<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorials extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tutorials_model');
		$this->load->model('Accounts_model');
	}

	public function index()
	{
		
	}

	public function manageTutorials()
	{
		$dataTutorials = $this->Tutorials_model->getListTutorials();
		$countTutorials = $this->Tutorials_model->countListTutorials();
		$dataTutorials = array('arrayDataTutorials' => $dataTutorials, 'countListTutorials' => $countTutorials);
		$this->load->view('manage_tutorials_view',$dataTutorials);
	}

	public function myTutorialsUpload()
	{
		$userID = $this->session->userdata('UserID');

		$dataTutorials = $this->Tutorials_model->getListTutorialsForUserUpload($userID);
		$countTutorialsForUserUpload = $this->Tutorials_model->countListTutorialsForUserUpload($userID);

		$dataTutorials = array('arrayDataTutorials' => $dataTutorials, 'countTutorialsForUserUpload' => $countTutorialsForUserUpload);
		$this->load->view('my_tutorials_view',$dataTutorials);
	}

	public function addTutorial()
	{
		$dataCategorie = $this->Tutorials_model->getListCategories();
		$dataCategorie = array('arrayDataCategories' => $dataCategorie);
		$this->load->view('add_tutorial_view',$dataCategorie);
	}

	public function addNewTutorial()
	{
		$userID = $this->session->userdata('UserID');
		$tutorialTitle = $this->input->post('tutorial-title');
		$tutorialDescription = $this->input->post('tutorial-description');
		$tutorialUrl = $this->input->post('tutorial-url');
		$tutorialUrl2 = $this->input->post('tutorial-url2');
		$tutorialUrl3 = $this->input->post('tutorial-url3');
		$tutorialCategorie = $this->input->post('tutorial-categorie');

		

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["tutorial-image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["tutorial-image"]["tmp_name"]);
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
		if ($_FILES["tutorial-image"]["size"] > 500000) {
		    //echo "Sorry, your file is too large.";
		    $this->session->set_flashdata('file_to_large', 'Invalid tutorial');
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $this->session->set_flashdata('not_type', 'Invalid tutorial');
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["tutorial-image"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["tutorial-image"]["name"]). " has been uploaded.";
		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}
		$tutorialImage = base_url().$target_file;

		if(basename($_FILES["tutorial-image"]["name"]) == NULL){
			$this->session->set_flashdata('tutorial_image_null', 'Invalid tutorial');
			redirect(base_url().'Tutorials/addTutorial','refresh');
		}else{
			if ($tutorialCategorie == NULL) {
				$this->session->set_flashdata('categorie_null', 'Invalid tutorial');
				redirect(base_url().'Tutorials/addTutorial','refresh');
			}else{
				$this->Tutorials_model->insertTutorial($userID,$tutorialTitle,$tutorialDescription,$tutorialImage,$tutorialCategorie,$tutorialUrl,$tutorialUrl2,$tutorialUrl3);
			redirect(base_url().'Tutorials/manageTutorials','refresh');
			}
		}
	}

	public function detailTutorial($tutorialID)
	{
		$dataTutorial = $this->Tutorials_model->getInfoDetailTutorial($tutorialID);

		$userID = $this->Tutorials_model->getUserIDUploadTutorial($tutorialID);
		$userID = $userID[0]['UserID'];

		$dataListTutorials = $this->Tutorials_model->getListTutorialsForUser($userID,$tutorialID);

		$dataTutorial = array('arrayDataTutorial' => $dataTutorial,'arrayDataTutorialForUser' => $dataListTutorials);

		$this->load->view('detail_tutorial_view',$dataTutorial);
	}

	public function privateTutorial($tutorialID)
	{
		$this->Tutorials_model->privateTutorial($tutorialID);
		redirect(base_url().'Tutorials/manageTutorials','refresh');
	}

	public function publicTutorial($tutorialID)
	{
		$this->Tutorials_model->publicTutorial($tutorialID);
		redirect(base_url().'Tutorials/manageTutorials','refresh');
	}

	public function delTutorial($tutorialID)
	{
		$this->Tutorials_model->delTutorial($tutorialID);
	}

	public function fastEditTutorial($tutorialID)
	{
		$tutorialTitle = $this->input->post('tutorialTitle');
		$tutorialDescription = $this->input->post('tutorialDescription');

		$this->Tutorials_model->updateFastEdit($tutorialID,$tutorialTitle,$tutorialDescription);
	}
















	//Categories

	public function manageCategories()
	{
		$dataCategorie = $this->Tutorials_model->getListCategories();
		$dataCategorie = array('arrayDataCategories' => $dataCategorie);

		$this->load->view('manage_categories_tutorials_view',$dataCategorie);
	}

	public function addCategorie()
	{
		$categorieName = $this->input->post('categorieName');
		$this->Tutorials_model->insertCategorie($categorieName);

		echo json_encode($this->db->insert_id());

		
	}

	public function editCategorie($CategorieID)
	{
		$categorieNameEdit = $this->input->post('categorieNameEdit');
		$this->Tutorials_model->editCategorie($CategorieID,$categorieNameEdit);
	}

	public function delCategorie($CategorieID)
	{
		$this->Tutorials_model->delCategorie($CategorieID);
	}


}

/* End of file Tutorials.php */
/* Location: ./application/controllers/Tutorials.php */