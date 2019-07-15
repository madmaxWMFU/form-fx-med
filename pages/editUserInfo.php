<?php
	header('Content-Type: text/html; charset=UTF-8');
	require_once('./conn.php'); 
	Global $mysqli;


	switch ($_POST['type']) {
		case 1:
			$allPacients = 'SELECT id_user, surname_user, name_user, last_name_user FROM user_info';
			if($result = $mysqli->query($allPacients)) {
				$row = $result->fetch_assoc();
				$usersArray = array();
				do{
					array_push($usersArray, Array('idUser' => $row['id_user'], 'name' => $row['surname_user'].' '.$row['name_user'].' '.$row['last_name_user']));
				}while ($row = $result->fetch_assoc());
				echo json_encode($usersArray);
			} else {
				printError($mysqli->error); 
			}
			
			break;
		
		case 2:
			$onePacients = 'SELECT * FROM user_info WHERE id_user = '.$_POST['idUser'];
			if($mysqli->query($onePacients)) {
				echo json_encode(array("msg" => ""));
			} else {
				printError($mysqli->error); 
			}
			break;

		case 3:
			$editPacients = 'UPDATE user_info SET WHERE id_user = '.$_POST['idUser'];
			if($mysqli->query($editPacients)) {
				echo json_encode(array("msg" => "Запис оновлено!"));
			} else {
				printError($mysqli->error); 
			}
			break;
	}



	$mysqli->close();	
?>