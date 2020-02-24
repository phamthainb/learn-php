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
		echo ("<br> AddProduct <br>");
		// echo (is_writable("/opt/lampp/htdocs/learn-php/uploads/") ? "YES" : "NO");
		// echo ("<BR>");
		// echo (is_writable($_FILES['product_image']['tmp_name']) ? "YES" : "NO");

		print_r($_FILES);
		// $move = "/opt/lampp/htdocs/learn-php/uploads/" . $_FILES['product_image']['name'];
		$target_dir = "/opt/lampp/htdocs/learn-php/uploads/";
		$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
		// $uploadOk = 1;
		// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		echo $_FILES["product_image"]["tmp_name"] . "=>" . $target_file;

		if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
			echo "The file " . basename($_FILES["product_image"]["name"]) . " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
		die();
	}
}

?>
