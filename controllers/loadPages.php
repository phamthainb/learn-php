<?php

/**
 * load pages
 */
class LoadPages {
	/**
	 * summary
	 */
	public function __construct() {

	}
	public function DisplayPage() {
		require './views/layout/header.php';
		require './views/pages/index.php';
		require './views/layout/footer.php';
	}
}
?>