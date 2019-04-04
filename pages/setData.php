<?php
	header('Content-Type: text/html; charset=UTF-8');
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', true);
	require_once __DIR__.'/src/SimpleXLSX.php';

	function init() {
		if(checkData()){
			saveFile();
			setDataUser();
		} else {
			printError('not data _FILES or _POST');
		}
	}

	function printError($errorMsg) {
		echo json_encode(array("error" => $errorMsg));
	}

	function checkData() {
		$status = false;
		if(isset($_POST) && isset($_FILES['file']) && !empty($_POST) && !empty($_FILES['file'])) {
			return !$status;
		} else {
			return $status;
		}
	}
	
	function setDataUser() {
		$mysqli = new mysqli("db", "root", "test", "medicine_db");
		if ($mysqli->connect_errno) {
		    printError("Соединение не удалось: ".$mysqli->connect_error);
		    exit();
		}	

		$arrUser = $_POST;
		$userInformation = "INSERT INTO user_info (surname_user, name_user, last_name_user, date_birthday, gender, email, phone, address, region, heredity, smoky, work, alergo1, alergoSeason1, alergoYear1, alergo2, alergoSeason2, alergoYear2, alergo3, alergoSeason3, alergoYear3, alergo4, alergo5, alergo6, alergo7, alergo8, alergo9, alergo10, hospital, surnameDoctor, phoneDoctor, emailDoctor, dateExamination, checkItem) VALUES ('".$arrUser['surname']."', '".$arrUser['name']."', '".$arrUser['lastName']."', '".$arrUser['dateBirthday']."', '".$arrUser['gender']."', '".$arrUser['email']."', '".$arrUser['phone']."', '".$arrUser['address']."', '".$arrUser['region']."', ".$arrUser['heredity'].", ".$arrUser['smoky'].", ".$arrUser['work'].", ".$arrUser['alergo1'].", ".$arrUser['alergoSeason1'].", ".$arrUser['alergoYear1'].", ".$arrUser['alergo2'].", ".$arrUser['alergoSeason2'].", ".$arrUser['alergoYear2'].", ".$arrUser['alergo3'].", ".$arrUser['alergoSeason3'].", ".$arrUser['alergoYear3'].", ".$arrUser['alergo4'].", ".$arrUser['alergo5'].", ".$arrUser['alergo6'].", ".$arrUser['alergo7'].", ".$arrUser['alergo8'].", ".$arrUser['alergo9'].", ".$arrUser['alergo10'].", '".$arrUser['hospital']."', '".$arrUser['surnameDoctor']."', '".$arrUser['phoneDoctor']."', '".$arrUser['emailDoctor']."', '".$arrUser['dateExamination']."', '".$arrUser['checkItem']."')"; 	
		echo $userInformation;	
		$mysqli->query($userInformation);	
		$lastId = $mysqli->insert_id;

		if($xlsx = SimpleXLSX::parse('examples/'.basename($_FILES['file']['name']))) {
			$item =  $xlsx->rows();
			$query = "INSERT INTO user_results (id_user, alergo1, alergo2, alergo3, alergo4, alergo5, alergo6, alergo7, alergo8, alergo9, alergo10, alergo11, alergo12, alergo13, alergo14, alergo15, alergo16, alergo17, alergo18, alergo19, alergo20, alergo21, alergo22, alergo23, alergo24, alergo25, alergo26, alergo27, alergo28, alergo29, alergo30, alergo31, alergo32, alergo33, alergo34, alergo35, alergo36, alergo37, alergo38, alergo39, alergo40, alergo41, alergo42, alergo43, alergo44, alergo45, alergo46, alergo47, alergo48, alergo49, alergo50, alergo51, alergo52, alergo53, alergo54, alergo55, alergo56, alergo57, alergo58, alergo59, alergo60, alergo61, alergo62, alergo63, alergo64, alergo65, alergo66, alergo67, alergo68, alergo69, alergo70, alergo71, alergo72, alergo73, alergo74, alergo75, alergo76, alergo77, alergo78, alergo79, alergo80, alergo81, alergo82, alergo83, alergo84, alergo85, alergo86, alergo87, alergo88, alergo89, alergo90, alergo91, alergo92, alergo93, alergo94, alergo95, alergo96, alergo97, alergo98, alergo99, alergo100, alergo101, alergo102, alergo103, alergo104, alergo105, alergo106, alergo107, alergo108, alergo109, alergo110, alergo111, alergo112, alergo113, alergo114, alergo115, alergo116, alergo117, alergo118, alergo119, alergo120, alergo121, alergo122, alergo123, alergo124, alergo125, alergo126, alergo127, alergo128, alergo129, alergo130, alergo131, alergo132, alergo133, alergo134, alergo135, alergo136, alergo137, alergo138, alergo139, alergo140, alergo141, alergo142, alergo143, alergo144, alergo145, alergo146, alergo147, alergo148, alergo149, alergo150, alergo151, alergo152, alergo153, alergo154, alergo155, alergo156, alergo157, alergo158, alergo159, alergo160, alergo161, alergo162, alergo163, alergo164, alergo165, alergo166, alergo167, alergo168, alergo169, alergo170, alergo171, alergo172, alergo173, alergo174, alergo175, alergo176, alergo177, alergo178, alergo179, alergo180, alergo181, alergo182, alergo183, alergo184, alergo185, alergo186, alergo187, alergo188, alergo189, alergo190, alergo191, alergo192, alergo193, alergo194, alergo195, alergo196, alergo197, alergo198, alergo199, alergo200, alergo201, alergo202, alergo203, alergo204, alergo205, alergo206, alergo207, alergo208, alergo209, alergo210, alergo211, alergo212, alergo213, alergo214, alergo215, alergo216, alergo217, alergo218, alergo219, alergo220, alergo221, alergo222, alergo223, alergo224, alergo225, alergo226, alergo227, alergo228, alergo229, alergo230, alergo231, alergo232, alergo233, alergo234, alergo235, alergo236, alergo237, alergo238, alergo239, alergo240, alergo241, alergo242, alergo243, alergo244, alergo245, alergo246, alergo247, alergo248, alergo249, alergo250, alergo251, alergo252, alergo253, alergo254, alergo255, alergo256, alergo257, alergo258, alergo259, alergo260, alergo261, alergo262, alergo263, alergo264, alergo265, alergo266, alergo267, alergo268, alergo269, alergo270, alergo271, alergo272, alergo273, alergo274, alergo275, alergo276, alergo277, alergo278, alergo279, alergo280, alergo281, alergo282, alergo283, alergo284, alergo285, alergo286, alergo287, alergo288, alergo289, alergo290, alergo291, alergo292) VALUES (".$lastId.",";

			for($i=6; $i<=297; $i++) {
				$query .= "'".str_replace(",", ".", $item[$i][1])."'";
				if($i != 297){
					$query .= ", ";
				}
			}
			$query .= ")";
			$mysqli->query($query);
		} else {
			printError(SimpleXLSX::parseError());
		}
		$mysqli->close();	
	}

	function saveFile() {
	    $error = false;
	    $files = array();
	    $uploaddir = './examples/';  

	    foreach( $_FILES as $file ){
	        if(!move_uploaded_file( $file['tmp_name'], $uploaddir . basename($file['name']))){
	            $error = true;
	        }
	    }
	 
	 	if($error){
	 		printError('file not save on server');
	 	}
	}
	init();
?>