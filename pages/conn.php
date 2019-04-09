<?php
	Global $mysqli;
	define("user", "root");
	define("host", "localhost");
	define("pass", "");
	// define("host", "db");
	// define("pass", "test");
	$mysqli = new mysqli(host, user, pass, "medicine_db");
	if ($mysqli->connect_errno) {
	    printError("Соединение не удалось: ".$mysqli->connect_error);
	    exit();
	} else {
		mysqli_set_charset($mysqli, "utf8");
	}

	function printError($errorMsg) {
		echo json_encode(array("error" => $errorMsg)); 
	}
?>
