<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop_controller extends CI_Controller {

	public function index() {

	}
	public function router($route) {
		$this->load->view('modules/header');
		$this->load->view('shop-page/' . $route);
		$this->load->view('modules/footer');
	}
}

/* End of file about_controller.php */
/* Location: ./application/controllers/about_controller.php */
