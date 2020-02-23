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
		include '../models/adminModels.php';
		$adminModels = new AdminModels();
		return $adminModels->CheckPassAdmin($admin_name, $admin_password);
	}

	//add product
	public function AddProduct($product) {
		echo ("hiiii");
		print_r($product);
	}
}

?>
