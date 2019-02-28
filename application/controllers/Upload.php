<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->view('footer');
	}

	public function index()
	{
		$this->load->view('file_uploading');
	}

	public function file_uploading()
	{		

		$config = $this->config->load('upload');

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('u_file')) {
			
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('file_uploading', $error);
		}
		else{

			$data = array('upload_data' => $this->upload->data());

			$this->load->view('file_uploaded', $data);
		}
	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */
?>