<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about_controller extends CI_Controller {

	public function index() {
		$this->load->view('modules/header');
		$this->load->view('about-page');
		$this->load->view('modules/footer');
	}
}

/* End of file about_controller.php */
/* Location: ./application/controllers/about_controller.php */