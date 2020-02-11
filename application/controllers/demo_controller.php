<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["ds"] = "xxxxx";
		$this->load->view('demo', $data);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */