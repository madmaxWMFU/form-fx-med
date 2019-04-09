<?php
	header('Content-Type: text/html; charset=UTF-8');
	require_once('./conn.php'); 
	
	function init() {
		if(checkData()){
			authUser();
		} else {
			printError('undefined');
		}
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
		Global $mysqli;
		$loginUser = $_POST['login'];
		$passUser = md5($_POST['pass']);
		$query = "SELECT * FROM auth_user WHERE login_user = '".$loginUser."'";
		if ($result = $mysqli->query($query)) {
			$row = $result->fetch_assoc();
			if($row['pass_user'] == $passUser){
				echo json_encode(array("user" => $row['login_user'], "type" => $row['type_user'])); 
			} else {
				printError("not correct login or password");  
			}
			$result->close();
		} else {
			printError($mysqli->error); 
		}
		$mysqli->close();	
	}

	init();
?>
