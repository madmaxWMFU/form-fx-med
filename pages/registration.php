<?php
	header('Content-Type: text/html; charset=UTF-8');
	function init() {
		if(checkData()){
			registUser();
		} else {
			printError('undefined');
		}
	}

	function printError($errorMsg) {
		echo json_encode(array("error" => $errorMsg));
	}

	function checkData() {
		$status = false;
		if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']) && !empty($_POST['pass'])) {
			return !$status;
		} else {
			return $status;
		}
	}
	
	function registUser() {
		$mysqli = new mysqli("localhost", "root", "", "medicine_db");
		if ($mysqli->connect_errno) {
		    printError("Соединение не удалось: ".$mysqli->connect_error);
		    exit();
		}

		$loginUser = $_POST['login'];
		$passUser = md5($_POST['pass']);
		$typeUser = $_POST['type'];
		$query = "INSERT INTO auth_user (login_user, pass_user, type_user) VALUES ('".$loginUser."', '".$passUser."', ".$typeUser.")";
		echo $query;
		$mysqli->query($query);
		$mysqli->close();	
	}

	init();
?>