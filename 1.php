<?php
	$str = "CREATE TABLE `medicine_db`.`user_results` (`id_results` INT NOT NULL AUTO_INCREMENT , `id_user` INT NOT NULL , ";

	for($i=1; $i<=292;$i++) {
		$str .= "`alergo".$i."` FLOAT NOT NULL, ";
	}

	$str .= " PRIMARY KEY (`id_results`)) ENGINE = InnoDB";
	//echo($str);

	$mainArray = array();
	$pilok = array();


			$mysqli = new mysqli("db", "root", "test", "medicine_db");
		if ($mysqli->connect_errno) {
		    printError("Соединение не удалось: ".$mysqli->connect_error);
		    exit();
		}

		$query = "SELECT * FROM user_results WHERE id_results = 1";
		$result = $mysqli->query($query);
		$row = $result->fetch_assoc();
		do{
			array_push($pilok, 
				array("Пилок трави" => array("Бермудська трава" => $row['alergo104'], "Пажитниця багаторічна" => $row['alergo184'], "Гречка помічена" => $row['alergo223'], "Тимофіївка лугова" => $row['alergo232'], "Тимофіївка лугова" => $row['alergo233'], "Тимофіївка лугова" => $row['alergo234'], "Тимофіївка лугова" => $row['alergo235'], "Тимофіївка лугова" => $row['alergo236'], "Тимофіївка лугова" => $row['alergo237'], "Тимофіївка лугова" => $row['alergo238'], "Очерет" => $row['alergo240'], "Жито, пилок" => $row['alergo266'], "Сорго алепське" => $row['alergo274'], "Кукурудза пилок" => $row['alergo292']),
					"Пилок дерев" => array("Акація" => $row['alergo1'], "Вільха" => $row['alergo11'], "Вільха" => $row['alergo12'],"Вільха" => $row['alergo13'],"Береза " => $row['alergo50'],"Береза " => $row['alergo51'],"Береза " => $row['alergo52'],"Береза " => $row['alergo53'],"Ліщина " => $row['alergo90'],"Ліщина " => $row['alergo97'],"Криптомерія японська " => $row['alergo99'],"Кипарис " => $row['alergo102'],"Кипарис " => $row['alergo103'],"Бук " => $row['alergo126'],"Ясен " => $row['alergo134'],"Ясен " => $row['alergo135'],"Волоський горіх, пилок " => $row['alergo176'],"Кедр " => $row['alergo177'],"Бирючина " => $row['alergo181'],"Шовковиця " => $row['alergo201'],"Пилок оливи " => $row['alergo205'],"Пилок оливи " => $row['alergo206'],"Пилок оливи " => $row['alergo208'],"Фінікова пальма " => $row['alergo239'],"Платан " => $row['alergo244'],"Платан " => $row['alergo245'],"Тополя " => $row['alergo250'],"Дуб " => $row['alergo257'],"Бузок " => $row['alergo277'],"В'яз " => $row['alergo285']),
					"Пилок бур'янів" => array("Амарант (Щириця) " => $row['alergo16'],"Амброзія" => $row['alergo17'],"Амброзія" => $row['alergo18'],"Амброзія" => $row['alergo19'],"Полин " => $row['alergo40'],"Полин " => $row['alergo41'],"Полин " => $row['alergo42'],"Лобода біла" => $row['alergo82'],"Лобода біла" => $row['alergo83'],"Переліска однорічна " => $row['alergo200'],"Настінниця " => $row['alergo221'],"Настінниця " => $row['alergo222'],"Подорожник " => $row['alergo246'],"Подорожник " => $row['alergo247'],"Щавель " => $row['alergo261'],"Курай поташевий " => $row['alergo263'],"Кропива " => $row['alergo286'])
				)
			);
		}while ($row = $result->fetch_assoc()) ;
	
	print_r($pilok);




theonlinedrugstore.com
   vitaminu
   baby and child
   first aid
   sales
https://www.pharmacychecker.com/online-pharmacy-ratings/
?>


