<?php
/* Delete Movie By ID
For: The Hunton Collection API
*/

	require_once("../connection.php");
	session_start();
	if (!isset($_SESSION["username"])) {
		echo "Permission Denied!";
	} else {
		$id = mysqli_real_escape_string($conn, $_POST["id"]);		
		$query = "DELETE FROM `skills13`.`film` WHERE `film`.`id` = {$id}";
		$res = mysqli_query($conn, $query);
		if (!$res) {
			echo "Failed!";
		}
	}
?>