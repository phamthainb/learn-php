<?php
/**
 * load LoadPagesControllers
display view the pages
 */
class LoadPagesControllers {
	/**
	 * LoadPagesControllers
	 */
	public function __construct() {

	}

	public function DisplayPage($loadPages) {

		require_once "./views/pages/$loadPages-page.php";

	}
}
?>