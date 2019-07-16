<?php
	header('Content-Type: text/html; charset=UTF-8');
	require_once('./conn.php'); 
	Global $mysqli;


	switch ($_POST['type']) {
		case 1:
			$allPacients = 'SELECT id_user, surname_user, name_user, last_name_user FROM user_info ORDER BY surname_user';
			if($result = $mysqli->query($allPacients)) {
				$row = $result->fetch_assoc();
				$usersArray = array();
				do{
					array_push($usersArray, Array('idUser' => $row['id_user'], 'name' => $row['surname_user'].' '.$row['name_user'].' '.$row['last_name_user']));
				} while($row = $result->fetch_assoc());
				echo json_encode($usersArray);
			} else {
				printError($mysqli->error); 
			}
			
			break;
		
		case 2:
			$onePacients = 'SELECT * FROM user_info WHERE id_user = '.$_POST['idUser'];
			if($result = $mysqli->query($onePacients)) {
				$row = $result->fetch_assoc();
				$userArray = array();
				do {
					array_push($userArray, array("idUser" => $row['id_user'],
												"surnameUser" => $row['surname_user'],
												"nameUser" => $row['name_user'],
												"lastNameUser" => $row['last_name_user'],
												"dateBirthday" => $row['date_birthday'],
												"gender" => $row['gender'],
												"email" => $row['email'],
												"phone" => $row['phone'],
												"address" => $row['address'],
												"region" => $row['region'],
												"heredity" => $row['heredity'],
												"smoky" => $row['smoky'],
												"work" => $row['work'],
												"alergos1" => $row['alergos1'],
												"alergoSeason1" => $row['alergoSeason1'],
												"alergoYear1" => $row['alergoYear1'],
												"alergos2" => $row['alergos2'],
												"alergoSeason2" => $row['alergoSeason2'],
												"alergoYear2" => $row['alergoYear2'],
												"alergos3" => $row['alergos3'],
												"alergoSeason3" => $row['alergoSeason3'],
												"alergoYear3" => $row['alergoYear3'],
												"alergos4" => $row['alergos4'],
												"alergos5" => $row['alergos5'],
												"alergos6" => $row['alergos6'],
												"alergos7" => $row['alergos7'],
												"alergos8" => $row['alergos8'],
												"alergos9" => $row['alergos9'],
												"alergos10" => $row['alergos10'],
												"hospital" => $row['hospital'],
												"surnameDoctor" => $row['surnameDoctor'],
												"phoneDoctor" => $row['phoneDoctor'],
												"emailDoctor" => $row['emailDoctor'],
												"dateExamination" => $row['dateExamination']));
				} while($row = $result->fetch_assoc());
				echo json_encode($userArray);
			} else {
				printError($mysqli->error); 
			}
			break;

		case 3:
			$info = $_POST['info'];
			$editPacients = "UPDATE user_info SET 
								surname_user = '".$info['surname']."',
								name_user = '".$info['name']."',
								last_name_user = '".$info['lastName']."',
								date_birthday = '".$info['dateBirthday']."',
								gender = '".$info['gender']."',
								email = '".$info['email']."',
								phone = '".$info['phone']."',
								address = '".$info['address']."',
								region = '".$info['region']."',
								heredity = '".$info['heredity']."',
								smoky = '".$info['smoky']."',
								work = '".$info['work']."',
								alergos1 = '".$info['alergo1']."',
								alergoSeason1 = '".$info['alergoSeason1']."',
								alergoYear1 = '".$info['alergoYear1']."',
								alergos2 = '".$info['alergo2']."',
								alergoSeason2 = '".$info['alergoSeason2']."',
								alergoYear2 = '".$info['alergoYear2']."',
								alergos3 = '".$info['alergo3']."',
								alergoSeason3 = '".$info['alergoSeason3']."',
								alergoYear3 = '".$info['alergoYear3']."',
								alergos4 = '".$info['alergo4']."',
								alergos5 = '".$info['alergo5']."',
								alergos6 = '".$info['alergo6']."',
								alergos7 = '".$info['alergo7']."',
								alergos8 = '".$info['alergo8']."',
								alergos9 = '".$info['alergo9']."',
								alergos10 = '".$info['alergo10']."',
								hospital = '".$info['hospital']."',
								surnameDoctor = '".$info['surnameDoctor']."',
								phoneDoctor = '".$info['phoneDoctor']."',
								emailDoctor = '".$info['emailDoctor']."',
								dateExamination = '".$info['dateExamination']."',
								checkItem = '".$info['checkItem']."'
								WHERE id_user = ".$info['idUser'];

			if($mysqli->query($editPacients)) {
				echo json_encode("data update!");
			} else {
				printError($mysqli->error); 
			}
			break;
	}

	$mysqli->close();	
?>