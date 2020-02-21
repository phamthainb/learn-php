<?php
require '../controllers/adminControllers.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$adminControllers = new AdminControllers();
	$admin_name = $_POST['admin_name'];
	$admin_password = $_POST['admin_password'];
	$adminControllers->checkLogin($admin_name, $admin_password);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin login</title>
	<style>
		.form-login{
			max-width: 500px;
			display: block;
			margin: 0 auto;
			padding-top: 100px;
			text-transform: capitalize;
		}
	</style>

	</head>
<body>
		<form action="login.php" method="POST" class="form-login">
			<fieldset>
				<legend>login admin:</legend>
				 admin name: <br>
				<input type="text" name="admin_name"> <hr>
				password <br>
				<input type="password" name="admin_password"> <hr>
				<input type="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>