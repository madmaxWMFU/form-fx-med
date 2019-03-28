<?php
	$infoUser = $_POST;
	$mysqli = new mysqli("localhost", "root", "", "medicine_db");
	if ($mysqli->connect_errno) {
	    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
	    exit();
	}

	$query = "INSERT INTO user_info (surname_user, name_user, last_name_user, date_birthday, gender, email, phone, address, addressType, heredity, smoky, work, alergo1, alergoSeason1, alergoYear1, alergo2, alergoSeason2, alergoYear2, alergo3, alergoSeason3, alergoYear3, alergo4, alergo5, alergo6, alergo7, alergo8, alergo9, alergo10, hospital, surnameDoctor, phoneDoctor, emailDoctor, dateExamination) VALUES ('".$infoUser['surname']."', '".$infoUser['name']."', '".$infoUser['lastName']."', '".$infoUser['dateBirthday']."', '".$infoUser['gender']."', '".$infoUser['email']."', '".$infoUser['phone']."', '".$infoUser['address']."', '".$infoUser['addressType']."', ".$infoUser['heredity'].", ".$infoUser['smoky'].", ".$infoUser['work'].", ".$infoUser['alergo1'].", ".$infoUser['alergoSeason1'].", ".$infoUser['alergoYear1'].", ".$infoUser['alergo2'].", ".$infoUser['alergoSeason2'].", ".$infoUser['alergoYear2'].", ".$infoUser['alergo3'].", ".$infoUser['alergoSeason3'].", ".$infoUser['alergoYear3'].", ".$infoUser['alergo4'].", ".$infoUser['alergo5'].", ".$infoUser['alergo6'].", ".$infoUser['alergo7'].", ".$infoUser['alergo8'].", ".$infoUser['alergo9'].", ".$infoUser['alergo10'].", '".$infoUser['hospital']."', '".$infoUser['surnameDoctor']."', '".$infoUser['phoneDoctor']."', '".$infoUser['emailDoctor']."', '".$infoUser['dateExamination']."')"; 


	echo $query;

	// $query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 50,5";

	// if ($result = $mysqli->query($query)) {
	//     while ($row = $result->fetch_assoc()) {
	//         printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
	//     }
	//     $result->free();
	// }
	// $mysqli->close();	
?>