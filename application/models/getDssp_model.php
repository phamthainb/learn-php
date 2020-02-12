<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class getDssp_model extends CI_Model {

	public $variable;

	public function __construct() {
		parent::__construct();

	}
	public function index() {
		$this->db->select('*');
		$kt = $this->db->get("dssp");

		$kt = $kt->result_array();
		// var_dump($kt);
		return $kt;
	}

}

/* End of file getDssp_model.php */
/* Location: ./application/models/getDssp_model.php */
