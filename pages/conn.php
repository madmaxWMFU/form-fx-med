<?php
	$mysqli = new mysqli("db", "root", "test", "medicine_db");
	// $mysqli = new mysqli("localhost", "root", "", "medicine_db");
	if ($mysqli->connect_errno) {
	    printError("Соединение не удалось: ".$mysqli->connect_error);
	    exit();
	}

?>