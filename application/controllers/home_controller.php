<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function index() {

		$this->load->model('getDssp_model');
		$data['data'] = $this->getDssp_model->index();
		$this->load->view('modules/header');
		$this->load->view('home-page', $data);
		$this->load->view('modules/footer');

		// foreach ($data as $key) {
		// 	foreach ($key as $elm => $value) {
		// 		echo $elm . ": " . $value;
		// 		echo "<br />";
		// 	}
		// 	echo "<hr />";
		// }

	}
}
