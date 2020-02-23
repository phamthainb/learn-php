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
	public function AddProduct($product, $file) {
		echo ("AddProduct <br>");
		$target_dir = "../../uploads/";
		$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["product_image"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
// Check file size
		if ($_FILES["product_image"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
		} else {
			echo ("<br>" . $_SERVER['PHP_SELF']);
			if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
				echo "The file " . basename($_FILES["product_image"]["name"]) . " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}

		die();
	}
}

?>
