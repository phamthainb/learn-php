<?php

/**
 * adminControllers.php
class logic for function login admin user, edit admin user,...
 */
class AdminControllers {

	/**
	 * AdminControllers
	 */
	public function __construct() {}

	public function checkLogin($admin_name, $admin_password) {
		echo "checkLogin <br> $admin_name <br> $admin_password";
	}
}

?>
