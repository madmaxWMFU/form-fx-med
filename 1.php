<?php
	$str = "CREATE TABLE `medicine_db`.`user_results` (`id_results` INT NOT NULL AUTO_INCREMENT , `id_user` INT NOT NULL , ";

	for($i=1; $i<=292;$i++) {
		$str .= "`alergo".$i."` FLOAT NOT NULL, ";
	}

	$str .= " PRIMARY KEY (`id_results`)) ENGINE = InnoDB";
	//echo($str);

	$mainArray = array();
	$pilok = array();



	
	print_r($mainArray);




// theonlinedrugstore.com
//    vitaminu
//    baby and child
//    first aid
//    sales
// https://www.pharmacychecker.com/online-pharmacy-ratings/
?>


