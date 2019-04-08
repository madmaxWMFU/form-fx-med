<?php
	header('Content-Type: text/html; charset=UTF-8');
	require_once __DIR__.'/conn.php';
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
		$loginUser = $_POST['login'];
		$passUser = md5($_POST['pass']);
		$query = "SELECT * FROM auth_user WHERE login_user = '".$loginUser."'";
		$result = $mysqli->query($query);
		$row = $result->fetch_assoc();
		if($row['pass_user'] == $passUser){
			echo json_encode(array("user" => $row['login_user'], "type" => $row['type_user']));
		} else {
			printError("not correct login or password");
		}
		$mysqli->close();	
	}

	init();
?>