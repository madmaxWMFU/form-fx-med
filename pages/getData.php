<?php
	header('Content-Type: text/html; charset=UTF-8');
	$mysqli = new mysqli("localhost", "root", "", "medicine_db");
	if ($mysqli->connect_errno) {
	    printError("Соединение не удалось: ".$mysqli->connect_error);
	    exit();
	}

	switch ($_POST['msg']) {
		case 'getUserResult':
			// $query = "SELECT * FROM user_results WHERE id_user = ".$_POST['idUser'];
			$query = "SELECT * FROM user_results WHERE id_results = 1";
			$result = $mysqli->query($query);
			$row = $result->fetch_assoc();
			$mainArray = array();
			do{
				array_push($mainArray, 
					array("Пилок" =>
						array("Пилок трави" => 
								array("Бермудська трава" => array($row['alergo104'], "Cyn d"),
									"Пажитниця багаторічна" => array($row['alergo184'], "Lol p 1"),
									"Гречка помічена" => array($row['alergo223'], "Pas n"),
									"Тимофіївка лугова" => array($row['alergo232'], "Phl p"),
									"Тимофіївка лугова" => array($row['alergo233'], "Phl p 1"),
									"Тимофіївка лугова" => array($row['alergo234'], "Phl p 12"),
									"Тимофіївка лугова" => array($row['alergo235'], "Phl p 2"),
									"Тимофіївка лугова" => array($row['alergo236'], "Phl p 5.0101"),
									"Тимофіївка лугова" => array($row['alergo237'], "Phl p 6"),
									"Тимофіївка лугова" => array($row['alergo238'], "Phl p 7"),
									"Очерет" => array($row['alergo240'], "Phr c"),
									"Жито, пилок" => array($row['alergo266'], "Sec c_pollen"),
									"Сорго алепське" => array($row['alergo274'], "Sor h"),
									"Кукурудза пилок" => array($row['alergo292'], "Zea m pollen")
								),
							"Пилок дерев" => 
								array("Акація" => array($row['alergo1'], "Aca m"),
									"Вільха" => array($row['alergo11'], "Aln g"),
									"Вільха" => array($row['alergo12'], "Aln g 1"),
									"Вільха" => array($row['alergo13'], "Aln g 4"),
									"Береза " => array($row['alergo50'], "Bet v"),
									"Береза " => array($row['alergo51'], "Bet v 1"),
									"Береза " => array($row['alergo52'], "Bet v 2"),
									"Береза " => array($row['alergo53'], "Bet v 6"),
									"Ліщина " => array($row['alergo90'], "Cor a 1.0103"),
									"Ліщина " => array($row['alergo97'], "Cor a_pollen"),
									"Криптомерія японська " => array($row['alergo99'], "Cry j"),
									"Кипарис " => array($row['alergo102'], "Cup a 1"),
									"Кипарис " => array($row['alergo103'], "Cup s"),
									"Бук " => array($row['alergo126'], "Fag s"),
									"Ясен " => array($row['alergo134'], "Fra e"),
									"Ясен " => array($row['alergo135'], "Fra e 1"),
									"Волоський горіх, пилок " => array($row['alergo176'], "Jug r_pollen"),
									"Кедр " => array($row['alergo177'], "Jun a"),
									"Бирючина " => array($row['alergo181'], "Lig v"),
									"Шовковиця " => array($row['alergo201'], "Mor r"),
									"Пилок оливи " => array($row['alergo205'], "Ole e 1"),
									"Пилок оливи " => array($row['alergo206'], "Ole e 2"),
									"Пилок оливи " => array($row['alergo208'], "Ole_pollen"),
									"Фінікова пальма " => array($row['alergo239'], "Pho d 2"),
									"Платан " => array($row['alergo244'], "Pla a"),
									"Платан " => array($row['alergo245'], "Pla a 1"),
									"Тополя " => array($row['alergo250'], "Pop n"),
									"Дуб " => array($row['alergo257'], "Que r"),
									"Бузок " => array($row['alergo277'], "Syr v"),
									"В'яз " => array( $row['alergo285'], "Ulm c")
								),
							"Пилок бур'янів" => 
								array("Амарант (Щириця) " => array($row['alergo16'], "Ama r"),
									"Амброзія" => array($row['alergo17'], "Amb a"),
									"Амброзія" => array($row['alergo18'], "Amb a 1"),
									"Амброзія" => array($row['alergo19'], "Amb a 4"),
									"Полин " => array($row['alergo40'], "Art v"),
									"Полин " => array($row['alergo41'], "Art v 1"),
									"Полин " => array($row['alergo42'], "Art v 3"),
									"Лобода біла" => array($row['alergo82'], "Che a"),
									"Лобода біла" => array($row['alergo83'], "Che a 1"),
									"Переліска однорічна " => array($row['alergo200'], "Mer a"),
									"Настінниця " => array($row['alergo221'], "Par j"),
									"Настінниця " => array($row['alergo222'], "Par j 2"),
									"Подорожник " => array($row['alergo246'], "Pla l"),
									"Подорожник " => array($row['alergo247'], "Pla l 1"),
									"Щавель " => array($row['alergo261'], "Rum a"),
									"Курай поташевий " => array($row['alergo263'], "Sal k"),
									"Кропива " => array($row['alergo286'], "Urt d")
								)
						)
					)
				);
				array_push($mainArray, 
					array("Кліщ" => 
						array("Європейський кліщ домашнього пилу" => 
								array("Американський кліщ домашнього пилу" => array($row['alergo108'], "Der f"),
									"Американський кліщ домашнього пилу" => array($row['alergo109'], "Der f 1"),
									"Американський кліщ домашнього пилу" => array($row['alergo110'], "Der f 2"),
									"Європейський кліщ домашнього пилу " => array($row['alergo111'], "Der p"),
									"Європейський кліщ домашнього пилу " => array($row['alergo112'], "Der p 1"),
									"Європейський кліщ домашнього пилу " => array($row['alergo113'], "Der p 10"),
									"Європейський кліщ домашнього пилу " => array($row['alergo114'], "Der p 11"),
									"Європейський кліщ домашнього пилу " => array($row['alergo115'], "Der p 2"),
									"Європейський кліщ домашнього пилу " => array($row['alergo116'], "Der p 23"),
									"Європейський кліщ домашнього пилу " => array($row['alergo117'], "Der p 5"),
									"Європейський кліщ домашнього пилу " => array($row['alergo118'], "Der p 7")
								),
							"Борошняний кліщ" => 
								array("Acarus siro" => array($row['alergo2'], "Aca s"),
									"Blomia tropicalis " => array($row['alergo59'], "Blo t"),
									"Glycyphagus domesticus " => array($row['alergo149'], "Gly d"),
									"Glycyphagus domesticus " => array($row['alergo150'], "Gly d 2"),
									"Lepidoglyphus destructor " => array($row['alergo180'], "Lep d"),
									"Tyrophagus putrescentiae " => array($row['alergo284'], "Tyr p")
								)
						)
					)
				);
				array_push($mainArray, 
					array("Пліснява та дріжжі" => 
						array("Дріжджі" => 
								array("Candida Albicans " => array($row['alergo70'], "Can a"),
									"Malassezia sympodialis " => array($row['alergo193'], ""),
									"Malassezia sympodialis " => array($row['alergo194'], ""),
									"Malassezia sympodialis " => array($row['alergo195'], ""),
									"Malassezia sympodialis " => array($row['alergo196'], "Mala s 6"),
									"Malassezia sympodialis " => array($row['alergo197'], "Mala s 9"),
									"Пекарські дріжджі " => array($row['alergo262'], "Sac c")
								),
							"Пліснява" => 
								array("Alternaria alternata " => array($row['alergo14'], "Alt a"),
									"Alternaria alternata " => array($row['alergo15'], "Alt a 1"),
									"Aspergillus fumigatus " => array($row['alergo43'], "Asp f"),
									"Aspergillus fumigatus " => array($row['alergo44'], "Asp f 3"),
									"Aspergillus fumigatus " => array($row['alergo45'], "Asp f 4"),
									"Aspergillus fumigatus " => array($row['alergo46'], "Asp f 6"),
									"Cladosporium herbarum " => array($row['alergo88'], "Cla h"),
									"Cladosporium herbarum " => array($row['alergo89'], "Cla h 8"),
									"Penicilium chrysogenum " => array($row['alergo225'], "Pen ch")
								)
						)
					)
				);
				array_push($mainArray, 
					array("Овочі" => 
						array("Бобові культури" => 
								array("Арахіс" => array($row['alergo33'], "Ara h"),
									"Арахіс" => array($row['alergo34'], "Ara h 1"),
									"Арахіс" => array($row['alergo35'], "Ara h 2"),
									"Арахіс" => array($row['alergo36'], "Ara h 3"),
									"Арахіс" => array($row['alergo37'], "Ara h 6"),
									"Арахіс" => array($row['alergo38'], "Ara h 8"),
									"Арахіс" => array($row['alergo39'], "Ara h 9"),
									"Нут звичайний" => array($row['alergo86'], "Cic a"),
									"Соя" => array($row['alergo151'], "Gly m"),
									"Соя" => array($row['alergo152'], "Gly m 4"),
									"Соя" => array($row['alergo153'], "Gly m 5"),
									"Соя" => array($row['alergo154'], "Gly m 6"),
									"Соя" => array($row['alergo155'], "Gly m 8"),
									"Сочевиця" => array($row['alergo179'], "Len c"),
									"Зелена квасоля" => array($row['alergo231'], "Pha v"),
									"Горох " => array($row['alergo242'], "Pis s")
								),
							"Злаки" =>
								 array("Гречка" => array($row['alergo124'], "Fag e"),
									"Ячмінь" => array($row['alergo125'], "Hor v"),
									"Насіння люпину" => array($row['alergo166'], "Lup a"),
									"Рис " => array($row['alergo210'], "Ory s"),
									"Пшоно " => array($row['alergo218'], "Pan m"),
									"Жито " => array($row['alergo265'], "Sec c_flour"),
									"Пшениця " => array($row['alergo281'], "Tri a"),
									"Пшениця " => array($row['alergo282'], "Tri a Gliadin"),
									"Пшениця спельта " => array($row['alergo283'], "Tri s"),
									"Кукурудза" => array($row['alergo291'], "Zea m")
								),
							"Спеції" => 
								array("Паприка " => array($row['alergo75'], "Cap a"),
									"Кмин звичайний " => array($row['alergo78'], "Car c"),
									"Орегано " => array($row['alergo209'], "Ori v"),
									"Петрушка " => array($row['alergo230'], "Pet c"),
									"Аніс " => array($row['alergo241'], "Аніс "),
									"Гірчиця " => array($row['alergo269'], "Sin"),
									"Гірчиця " => array($row['alergo270'], "Sin a 1")
								),
							"Фрукти" => 
								array("Ківі" => array($row['alergo3'], "Act d"),
									"Ківі" => array($row['alergo4'], "Act d 1"),
									"Ківі" => array($row['alergo5'], "Act d 10"),
									"Ківі" => array($row['alergo6'], "Act d 2"),
									"Ківі" => array($row['alergo7'], "Act d 5"),
									"Папайя " => array($row['alergo80'], "Car p"),
									"Апельсин " => array($row['alergo87'], "Cit s"),
									"Диня " => array($row['alergo100'], "Cuc m"),
									"Інжир " => array($row['alergo132'], "Fic c"),
									"Полуниця " => array($row['alergo133'], "Fra a"),
									"Лічі " => array($row['alergo182'], "Lit c"),
									"Яблуко" => array($row['alergo189'], "Mal d"),
									"Яблуко" => array($row['alergo190'], "Mal d 1"),
									"Яблуко" => array($row['alergo191'], "Mal d 2"),
									"Яблуко" => array($row['alergo192'], "Mal d 3"),
									"Манго " => array($row['alergo198'], "Man i"),
									"Банан " => array($row['alergo202'], "Mus a"),
									"Вишня " => array($row['alergo251'], "Pru av"),
									"Слива " => array($row['alergo252'], "Pru do"),
									"Персик" => array($row['alergo254'], "Pru p"),
									"Персик" => array($row['alergo255'], "Pru p 3"),
									"Груша " => array($row['alergo256'], "Pyr c"),
									"Малина " => array($row['alergo259'], "Rub i"),
									"Чорниця " => array($row['alergo287'], "Vac m"),
									"Виноград " => array($row['alergo290'], "Vit v 1")
								),
							"Овочі та гриби" => 
								array("Білий гриб" => array($row['alergo8'], "Aga b"),
									"Цибуля " => array($row['alergo9'], "All c"),
									"Часник " => array($row['alergo10'], "All s"),
									"Селера" => array($row['alergo25'], "Api g"),
									"Селера" => array($row['alergo26'], "Api g 1"),
									"Селера" => array($row['alergo27'], "Api g 2"),
									"Селера" => array($row['alergo28'], "Api g 6"),
									"Капуста " => array($row['alergo68'], "Bra o"),
									"Морква " => array($row['alergo106'], "Dau c"),
									"Морква " => array($row['alergo107'], "Dau c 1"),
									"Салат-латук " => array($row['alergo178'], "Lac s"),
									"Олива " => array($row['alergo207'], "Ole_fruit"),
									"Авокадо " => array($row['alergo229'], "Pers a"),
									"Картопля " => array($row['alergo271'], "Sol t"),
									"Помідор " => array($row['alergo272'], "Sola l"),
									"Помідор " => array($row['alergo273'], "Sola l 6")
								),
							"Горіхи" => 
								array("Кешью " => array($row['alergo21'], "Ana o"),
									"Кешью " => array($row['alergo22'], "Ana o 3"),
									"Бразильський горіх " => array($row['alergo48'], "Ber e"),
									"Бразильський горіх " => array($row['alergo49'], "Ber e 1"),
									"Пекан, горіх " => array($row['alergo79'], "Car i"),
									"Фундук " => array($row['alergo91'], "Cor a 1.0401"),
									"Фундук " => array($row['alergo92'], "Cor a 11"),
									"Фундук " => array($row['alergo93'], "Cor a 14"),
									"Фундук " => array($row['alergo94'], "Cor a 8"),
									"Фундук " => array($row['alergo95'], "Cor a 9"),
									"Фундук " => array($row['alergo96'], "Cor a_hazel"),
									"Горіх волоський " => array($row['alergo173'], "Jug r 1"),
									"Горіх волоський " => array($row['alergo174'], "Jug r 2"),
									"Горіх волоський " => array($row['alergo175'], "Jug r_nut"),
									"Макадамия, горіх " => array($row['alergo187'], "Mac i 2S Albumin"),
									"Макадамия, горіх " => array($row['alergo188'], "Mac inte"),
									"Фісташкі " => array($row['alergo243'], "Pis v"),
									"Мигдаль " => array($row['alergo253'], "Pru du")
								),
							"Насіння" => 
								array("Насіння гарбуза " => array($row['alergo101'], "Cuc p"),
									"Соняшник, насіння" => array($row['alergo156'], "Hel a"),
									"Мак" => array($row['alergo219'], "Pap s"),
									"Мак" => array($row['alergo220'], "Pap s 2S Albumin"),
									"Кунжут" => array($row['alergo267'], "Ses i"),
									"Кунжут" => array($row['alergo268'], "Ses i 1")
								)
						)
					)
				);	
				array_push($mainArray, 
					array("Продукти тваринного походження" => 
						array("Молоко" => 
								array("Коров'яче молоко " => array($row['alergo61'], "Bos d 4"),
									"Коров'яче молоко " => array($row['alergo62'], "Bos d 5"),
									"Коров'яче молоко " => array($row['alergo64'], "Bos d 8"),
									"Коров'яче молоко " => array($row['alergo67'], "Bos d_milk"),
									"Молоко верблюда" => array($row['alergo69'], "Cam d"),
									"Коза, молоко " => array($row['alergo77'], "Cap h_milk"),
									"Кобила, молоко " => array($row['alergo123'], "Equ c_milk"),
									"Вівця, молоко " => array($row['alergo216'], "Ovi a_milk")
								),
							"Яйце" => 
								array("Яєчний білок " => array($row['alergo138'], "Gal d 1"),
									"Яєчний білок " => array($row['alergo139'], "Gal d 2"),
									"Яєчний білок " => array($row['alergo140'], "Gal d 3"),
									"Яєчний білок " => array($row['alergo141'], "Gal d 4"),
									"Яєчний жовток " => array($row['alergo142'], "Gal d 5"),
									"Яєчний білок " => array($row['alergo144'], "Gal d_white"),
									"Яєчний жовток " => array($row['alergo145'], "Gal d_yolk")
								),
							"Морепродукти" => 
								array("Anisakis simplex " => array($row['alergo23'], "Ani s 1"),
									"Anisakis simplex " => array($row['alergo24'], "Ani s 3"),
									"Краб " => array($row['alergo105'], "Chi spp."),
									"Короп " => array($row['alergo105'], "Cyp c 1"),
									"Атлантична тріска " => array($row['alergo136'], "Gad m"),
									"Атлантична тріска " => array($row['alergo137'], "Gad m 1"),
									"Омар " => array($row['alergo164'], "Hom g"),
									"Креветка " => array($row['alergo183'], "Lit s"),
									"Кальмар " => array($row['alergo185'], "Lol spp."),
									"Мідія їстівна " => array($row['alergo204'], "Myt e"),
									"Устриця " => array($row['alergo213'], "Ost e"),
									"Креветка" => array($row['alergo217'], "Pan b"),
									"Морський гребінець " => array($row['alergo224'], "Pec spp."),
									"Чорна тигрова креветка Pen m 1" => array($row['alergo226'], "Pen m 1"),
									"Молюск " => array($row['alergo260'], "Rud spp."),
									"Лосось " => array($row['alergo264'], "Sal s"),
									"Тунець " => array($row['alergo278'], "Thu a")
								),
							"М'ясо" => 
								array("Яловичина" => array($row['alergo63'], "Bos d 6"),
									"Яловичина" => array($row['alergo66'], "Bos d_meat"),
									"Кінь, м'ясо " => array($row['alergo122'], "Equ c_meat"),
									"Курка " => array($row['alergo143'], "Gal d_meat"),
									"М'ясо індички " => array($row['alergo199'], "Mel g"),
									"М'ясо кролика " => array($row['alergo212'], "Ory_meat"),
									"Баранина " => array($row['alergo215'], "Ovi a_meat"),
									"Свиня, м`ясо " => array($row['alergo276'], "Sus d_meat")
								)
						)
					)
				);
				array_push($mainArray, 
					array("Яд комах" => 
						array("Бджола, отрута" => 
								array(
									"Бджола медоносна" => array($row['alergo29'], "Api m"),
									"Бджола медоносна" => array($row['alergo30'], "Api m 1"),
									"Бджола медоносна" => array($row['alergo31'], "Api m 10"),
									"Бджола медоносна" => array($row['alergo32'], "Api m 2")
								),
							"Оса, отрута" => 
								array("Оса саксонська" => array($row['alergo119'], "Dol spp"),
									"Паперова оса" => array($row['alergo248'], "Pol d"),
									"Паперова оса" => array($row['alergo249'], "Pol d 5"),
									"Оса" => array($row['alergo288'], "Ves v"),
									"Оса" => array($row['alergo289'], "Ves v 5")
								),
							"Тарган" => 
								array("Німецький тарган" => array($row['alergo54'], "Bla g"),
									"Німецький тарган" => array($row['alergo55'], "Bla g 1"),
									"Німецький тарган" => array($row['alergo56'], "Bla g 2"),
									"Німецький тарган" => array($row['alergo57'], "Bla g 4"),
									"Німецький тарган" => array($row['alergo58'], "Bla g 5"),
									"Американський тарган" => array($row['alergo227'], "Per a"),
									"Американський тарган" => array($row['alergo228'], "Per a 7")
								)
						)
					)
				);
				array_push($mainArray, 
					array("Тваринного пожодження" => 
						array("Домашні тварини" => 
								array("Собака" => array($row['alergo71'], "Can f"),
									"Собака" => array($row['alergo72'], "Can f 1"),
									"Собака" => array($row['alergo73'], "Can f 2"),
									"Собака" => array($row['alergo74'], "Can f 3"),
									"Морська свинка" => array($row['alergo81'], "Cav p"),
									"Хом'як" => array($row['alergo98'], "Cri c"),
									"Кіт" => array($row['alergo127'], "Fel d"),
									"Кіт" => array($row['alergo128'], "Fel d 1"),
									"Кіт" => array($row['alergo129'], "Fel d 2"),
									"Кіт" => array($row['alergo130'], "Fel d 4"),
									"Мишь" => array($row['alergo203'], "Mus m 1"),
									"Епідерміс кролика" => array($row['alergo211'], "Ory_epithelia"),
									"Щур епітелій" => array($row['alergo258'], "Rat n")
								),
							"Домашня худоба" => 
								array("Корова,епітелій" => array($row['alergo60'], "Bos d 2"),
									"Корова,епітелій" => array($row['alergo65'], "Bos d_epithelia"),
									"Коза, епітелій" => array($row['alergo76'], "Cap h_epithelia"),
									"Кінь" => array($row['alergo120'], "Equ c 1"),
									"Кінь" => array($row['alergo121'], "Equ c_epithelia"),
									"Вівця, епітелій" => array($row['alergo214'], "Ovi a_epithelia"),
									"Свиня, епітелій" => array($row['alergo275'], "Sus d_epithelia")
								)
						) 
					)
				);
				array_push($mainArray, 
					array("Інший" => 
						array("Латекс" => 
								array("Латекс " => array($row['alergo157'], "Hev b"),
									"Латекс " => array($row['alergo158'], "Hev b 1"),
									"Латекс " => array($row['alergo159'], "Hev b 11"),
									"Латекс " => array($row['alergo160'], "Hev b 3"),
									"Латекс " => array($row['alergo161'], "Hev b 5"),
									"Латекс " => array($row['alergo162'], "Hev b 6.02"),
									"Латекс " => array($row['alergo163'], "Hev b 8"),
								),
							"Фікус та Хміль" => 
								array("Фікус" => array($row['alergo131'], "Fic b"),
									"Хміль" => array($row['alergo167'], "Hum l")
								),
							"CCD" =>
								array("Ананас" => array($row['alergo20'], "Ana c 2"),
									"Hom s Lactoferrin" => array($row['alergo165'], "Hom s LF")
								)
						)
					)
				);			
			}while ($row = $result->fetch_assoc()) ;
			echo json_encode($mainArray);
			break;
		case 'getUsers':
			$query = "SELECT id_user, surname_user, name_user, last_name_user, dateExamination FROM user_info WHERE region = 1";
			break;
		default:
			# code...
			break;
	}

	$mysqli->close();
?>