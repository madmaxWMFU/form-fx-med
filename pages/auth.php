<?php
	function init() {
		if(checkData()){
			authUser();
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
	
	function authUser() {
		$mysqli = new mysqli("localhost", "root", "", "medicine_db");
		if ($mysqli->connect_errno) {
		    printError("Соединение не удалось: ".$mysqli->connect_error);
		    exit();
		}

		$loginUser = $_POST['login'];
		$passUser = md5($_POST['pass']);
		$query = "SELECT type_user FROM auth_user WHERE login_user = '".$loginUser."' and pass_user = '".$passUser."'";
		$result = $mysqli->query($query);
		$row = $result->fetch_assoc();
		echo json_encode(array("user" => $loginUser, "type" => $row['type_user']));
		$mysqli->close();	
	}

	init();
?>