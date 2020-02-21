<?php
/**
 * load pages
display view the pages
 */
class LoadPages {
	/**
	 * LoadPages
	 */
	public function __construct() {

	}
	public function DisplayPage($param_URL) {
		require './views/pages/index.php';
	}
}
?>