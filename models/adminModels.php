<?php
/**
 * adminModels
provider functions bettwen database vs admin views, edit, add,...
 */
class AdminModels {
	/**
	 * AdminModels
	 */
	public function __construct() {

	}
	public function CheckPassAdmin($admin_user_user, $admin_password_user) {
		// echo "<br>adminModels -> $admin_user_user, $admin_password_user";
		//##conect to database => check name, user => return//

		// #connect database and check if connect to database error
		$serve_name = "localhost";
		$user_name = "root";
		$password = "";
		$database_name = "database_modist";

		$connect = mysqli_connect($serve_name, $user_name, $password, $database_name);

		if (mysqli_connect_errno()) {
			echo "<code style='color : red'>connect to database ERROR</code>";
			return false;
		}
		// else {
		// 	echo "<br> <code style='color : red'>connect to database success</code>";
		// }
		//#exe the query to data table for GET data
		$sql = "SELECT * FROM `table_admin` WHERE `admin_user` LIKE '$admin_user_user' LIMIT 1";
		$result = $connect->query($sql);
		if ($result->num_rows > 0) {
			$data = array();
			foreach ($result as $rows) {
				foreach ($rows as $key => $value) {
					$data["$key"] = $value;
					// echo "$key => $value <br>";
				}
			}

			// #compare data vs input from user
			if ($admin_user_user === $data["admin_user"] && md5($admin_password_user) === $data["admin_pass"]) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}
?>
