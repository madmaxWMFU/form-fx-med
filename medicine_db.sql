-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 18 2019 г., 14:35
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `medicine_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_user`
--

CREATE TABLE `auth_user` (
  `id_user` int(11) NOT NULL,
  `login_user` varchar(50) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `type_user` int(11) NOT NULL,
  `note_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_user`
--

INSERT INTO `auth_user` (`id_user`, `login_user`, `pass_user`, `type_user`, `note_user`) VALUES
(1, 'admin', '4b4b7c0ef4442be9e7969bc3313c47a9', 0, ''),
(7, 'Администратор', 'e242f36f4f95f12966da8fa2efd59992', 0, ''),
(8, 'kyiv_user', '827ccb0eea8a706c4c34a16891f84e7b', 10, ''),
(9, 'symu_user', '827ccb0eea8a706c4c34a16891f84e7b', 18, '');

-- --------------------------------------------------------

--
-- Структура таблицы `user_info`
--

CREATE TABLE `user_info` (
  `id_user` int(11) NOT NULL,
  `surname_user` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `last_name_user` varchar(255) NOT NULL,
  `date_birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `region` int(10) NOT NULL,
  `heredity` smallint(6) NOT NULL,
  `smoky` smallint(6) NOT NULL,
  `work` smallint(6) NOT NULL,
  `alergos1` smallint(6) NOT NULL,
  `alergoSeason1` smallint(6) NOT NULL,
  `alergoYear1` smallint(6) NOT NULL,
  `alergos2` smallint(6) NOT NULL,
  `alergoSeason2` smallint(6) NOT NULL,
  `alergoYear2` smallint(6) NOT NULL,
  `alergos3` smallint(6) NOT NULL,
  `alergoSeason3` smallint(6) NOT NULL,
  `alergoYear3` smallint(6) NOT NULL,
  `alergos4` smallint(6) NOT NULL,
  `alergos5` smallint(6) NOT NULL,
  `alergos6` smallint(6) NOT NULL,
  `alergos7` smallint(6) NOT NULL,
  `alergos8` smallint(6) NOT NULL,
  `alergos9` smallint(6) NOT NULL,
  `alergos10` smallint(6) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `surnameDoctor` varchar(255) NOT NULL,
  `phoneDoctor` varchar(30) DEFAULT NULL,
  `emailDoctor` varchar(50) DEFAULT NULL,
  `dateExamination` date NOT NULL,
  `checkItem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_info`
--

INSERT INTO `user_info` (`id_user`, `surname_user`, `name_user`, `last_name_user`, `date_birthday`, `gender`, `email`, `phone`, `address`, `region`, `heredity`, `smoky`, `work`, `alergos1`, `alergoSeason1`, `alergoYear1`, `alergos2`, `alergoSeason2`, `alergoYear2`, `alergos3`, `alergoSeason3`, `alergoYear3`, `alergos4`, `alergos5`, `alergos6`, `alergos7`, `alergos8`, `alergos9`, `alergos10`, `hospital`, `surnameDoctor`, `phoneDoctor`, `emailDoctor`, `dateExamination`, `checkItem`) VALUES
(8, 'Чехов', 'Дмитрий', 'Петрович', '1982-06-19', 'male', 'test1@gmail.com', '067-852-96-77', 'Перова 1', 10, 0, 1, 2, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Медік-Холден', 'Петрова І.І.', '093-123-09-09', 'test@gmail.com', '2019-04-09', '1554806793453'),
(9, 'Петренко', 'Петро', 'Петрович', '1982-06-19', 'male', 'test1@gmail.com', '067-852-96-77', 'Перова 1', 18, 0, 1, 2, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Медік-Холден', 'Макаренко І.І.', '093-123-09-09', 'test@gmail.com', '2019-04-09', '1554806902533'),
(10, 'Чехов', 'Максим', 'Петрович', '1992-05-19', 'male', 'цукенгшщ', '12345678', 'ывапролдж', 10, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 'Кагарлик', 'Петрова Ф.Ф.', '23233', '313', '2019-04-12', '1555069274466'),
(11, 'Мавродій', 'Анастасія', 'Леонідівна', '1973-03-21', 'female', 'adf@adsa.vd', '12345678', 'м.Одеса ', 15, 1, 0, 1, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Фармак', 'Ковтунь М.А.', '123-123-12-12', '1@fdaf.cem', '2019-04-18', '1555571395921');

-- --------------------------------------------------------

--
-- Структура таблицы `user_results`
--

CREATE TABLE `user_results` (
  `id_results` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alergo1` float NOT NULL,
  `alergo2` float NOT NULL,
  `alergo3` float NOT NULL,
  `alergo4` float NOT NULL,
  `alergo5` float NOT NULL,
  `alergo6` float NOT NULL,
  `alergo7` float NOT NULL,
  `alergo8` float NOT NULL,
  `alergo9` float NOT NULL,
  `alergo10` float NOT NULL,
  `alergo11` float NOT NULL,
  `alergo12` float NOT NULL,
  `alergo13` float NOT NULL,
  `alergo14` float NOT NULL,
  `alergo15` float NOT NULL,
  `alergo16` float NOT NULL,
  `alergo17` float NOT NULL,
  `alergo18` float NOT NULL,
  `alergo19` float NOT NULL,
  `alergo20` float NOT NULL,
  `alergo21` float NOT NULL,
  `alergo22` float NOT NULL,
  `alergo23` float NOT NULL,
  `alergo24` float NOT NULL,
  `alergo25` float NOT NULL,
  `alergo26` float NOT NULL,
  `alergo27` float NOT NULL,
  `alergo28` float NOT NULL,
  `alergo29` float NOT NULL,
  `alergo30` float NOT NULL,
  `alergo31` float NOT NULL,
  `alergo32` float NOT NULL,
  `alergo33` float NOT NULL,
  `alergo34` float NOT NULL,
  `alergo35` float NOT NULL,
  `alergo36` float NOT NULL,
  `alergo37` float NOT NULL,
  `alergo38` float NOT NULL,
  `alergo39` float NOT NULL,
  `alergo40` float NOT NULL,
  `alergo41` float NOT NULL,
  `alergo42` float NOT NULL,
  `alergo43` float NOT NULL,
  `alergo44` float NOT NULL,
  `alergo45` float NOT NULL,
  `alergo46` float NOT NULL,
  `alergo47` float NOT NULL,
  `alergo48` float NOT NULL,
  `alergo49` float NOT NULL,
  `alergo50` float NOT NULL,
  `alergo51` float NOT NULL,
  `alergo52` float NOT NULL,
  `alergo53` float NOT NULL,
  `alergo54` float NOT NULL,
  `alergo55` float NOT NULL,
  `alergo56` float NOT NULL,
  `alergo57` float NOT NULL,
  `alergo58` float NOT NULL,
  `alergo59` float NOT NULL,
  `alergo60` float NOT NULL,
  `alergo61` float NOT NULL,
  `alergo62` float NOT NULL,
  `alergo63` float NOT NULL,
  `alergo64` float NOT NULL,
  `alergo65` float NOT NULL,
  `alergo66` float NOT NULL,
  `alergo67` float NOT NULL,
  `alergo68` float NOT NULL,
  `alergo69` float NOT NULL,
  `alergo70` float NOT NULL,
  `alergo71` float NOT NULL,
  `alergo72` float NOT NULL,
  `alergo73` float NOT NULL,
  `alergo74` float NOT NULL,
  `alergo75` float NOT NULL,
  `alergo76` float NOT NULL,
  `alergo77` float NOT NULL,
  `alergo78` float NOT NULL,
  `alergo79` float NOT NULL,
  `alergo80` float NOT NULL,
  `alergo81` float NOT NULL,
  `alergo82` float NOT NULL,
  `alergo83` float NOT NULL,
  `alergo84` float NOT NULL,
  `alergo85` float NOT NULL,
  `alergo86` float NOT NULL,
  `alergo87` float NOT NULL,
  `alergo88` float NOT NULL,
  `alergo89` float NOT NULL,
  `alergo90` float NOT NULL,
  `alergo91` float NOT NULL,
  `alergo92` float NOT NULL,
  `alergo93` float NOT NULL,
  `alergo94` float NOT NULL,
  `alergo95` float NOT NULL,
  `alergo96` float NOT NULL,
  `alergo97` float NOT NULL,
  `alergo98` float NOT NULL,
  `alergo99` float NOT NULL,
  `alergo100` float NOT NULL,
  `alergo101` float NOT NULL,
  `alergo102` float NOT NULL,
  `alergo103` float NOT NULL,
  `alergo104` float NOT NULL,
  `alergo105` float NOT NULL,
  `alergo106` float NOT NULL,
  `alergo107` float NOT NULL,
  `alergo108` float NOT NULL,
  `alergo109` float NOT NULL,
  `alergo110` float NOT NULL,
  `alergo111` float NOT NULL,
  `alergo112` float NOT NULL,
  `alergo113` float NOT NULL,
  `alergo114` float NOT NULL,
  `alergo115` float NOT NULL,
  `alergo116` float NOT NULL,
  `alergo117` float NOT NULL,
  `alergo118` float NOT NULL,
  `alergo119` float NOT NULL,
  `alergo120` float NOT NULL,
  `alergo121` float NOT NULL,
  `alergo122` float NOT NULL,
  `alergo123` float NOT NULL,
  `alergo124` float NOT NULL,
  `alergo125` float NOT NULL,
  `alergo126` float NOT NULL,
  `alergo127` float NOT NULL,
  `alergo128` float NOT NULL,
  `alergo129` float NOT NULL,
  `alergo130` float NOT NULL,
  `alergo131` float NOT NULL,
  `alergo132` float NOT NULL,
  `alergo133` float NOT NULL,
  `alergo134` float NOT NULL,
  `alergo135` float NOT NULL,
  `alergo136` float NOT NULL,
  `alergo137` float NOT NULL,
  `alergo138` float NOT NULL,
  `alergo139` float NOT NULL,
  `alergo140` float NOT NULL,
  `alergo141` float NOT NULL,
  `alergo142` float NOT NULL,
  `alergo143` float NOT NULL,
  `alergo144` float NOT NULL,
  `alergo145` float NOT NULL,
  `alergo146` float NOT NULL,
  `alergo147` float NOT NULL,
  `alergo148` float NOT NULL,
  `alergo149` float NOT NULL,
  `alergo150` float NOT NULL,
  `alergo151` float NOT NULL,
  `alergo152` float NOT NULL,
  `alergo153` float NOT NULL,
  `alergo154` float NOT NULL,
  `alergo155` float NOT NULL,
  `alergo156` float NOT NULL,
  `alergo157` float NOT NULL,
  `alergo158` float NOT NULL,
  `alergo159` float NOT NULL,
  `alergo160` float NOT NULL,
  `alergo161` float NOT NULL,
  `alergo162` float NOT NULL,
  `alergo163` float NOT NULL,
  `alergo164` float NOT NULL,
  `alergo165` float NOT NULL,
  `alergo166` float NOT NULL,
  `alergo167` float NOT NULL,
  `alergo168` float NOT NULL,
  `alergo169` float NOT NULL,
  `alergo170` float NOT NULL,
  `alergo171` float NOT NULL,
  `alergo172` float NOT NULL,
  `alergo173` float NOT NULL,
  `alergo174` float NOT NULL,
  `alergo175` float NOT NULL,
  `alergo176` float NOT NULL,
  `alergo177` float NOT NULL,
  `alergo178` float NOT NULL,
  `alergo179` float NOT NULL,
  `alergo180` float NOT NULL,
  `alergo181` float NOT NULL,
  `alergo182` float NOT NULL,
  `alergo183` float NOT NULL,
  `alergo184` float NOT NULL,
  `alergo185` float NOT NULL,
  `alergo186` float NOT NULL,
  `alergo187` float NOT NULL,
  `alergo188` float NOT NULL,
  `alergo189` float NOT NULL,
  `alergo190` float NOT NULL,
  `alergo191` float NOT NULL,
  `alergo192` float NOT NULL,
  `alergo193` float NOT NULL,
  `alergo194` float NOT NULL,
  `alergo195` float NOT NULL,
  `alergo196` float NOT NULL,
  `alergo197` float NOT NULL,
  `alergo198` float NOT NULL,
  `alergo199` float NOT NULL,
  `alergo200` float NOT NULL,
  `alergo201` float NOT NULL,
  `alergo202` float NOT NULL,
  `alergo203` float NOT NULL,
  `alergo204` float NOT NULL,
  `alergo205` float NOT NULL,
  `alergo206` float NOT NULL,
  `alergo207` float NOT NULL,
  `alergo208` float NOT NULL,
  `alergo209` float NOT NULL,
  `alergo210` float NOT NULL,
  `alergo211` float NOT NULL,
  `alergo212` float NOT NULL,
  `alergo213` float NOT NULL,
  `alergo214` float NOT NULL,
  `alergo215` float NOT NULL,
  `alergo216` float NOT NULL,
  `alergo217` float NOT NULL,
  `alergo218` float NOT NULL,
  `alergo219` float NOT NULL,
  `alergo220` float NOT NULL,
  `alergo221` float NOT NULL,
  `alergo222` float NOT NULL,
  `alergo223` float NOT NULL,
  `alergo224` float NOT NULL,
  `alergo225` float NOT NULL,
  `alergo226` float NOT NULL,
  `alergo227` float NOT NULL,
  `alergo228` float NOT NULL,
  `alergo229` float NOT NULL,
  `alergo230` float NOT NULL,
  `alergo231` float NOT NULL,
  `alergo232` float NOT NULL,
  `alergo233` float NOT NULL,
  `alergo234` float NOT NULL,
  `alergo235` float NOT NULL,
  `alergo236` float NOT NULL,
  `alergo237` float NOT NULL,
  `alergo238` float NOT NULL,
  `alergo239` float NOT NULL,
  `alergo240` float NOT NULL,
  `alergo241` float NOT NULL,
  `alergo242` float NOT NULL,
  `alergo243` float NOT NULL,
  `alergo244` float NOT NULL,
  `alergo245` float NOT NULL,
  `alergo246` float NOT NULL,
  `alergo247` float NOT NULL,
  `alergo248` float NOT NULL,
  `alergo249` float NOT NULL,
  `alergo250` float NOT NULL,
  `alergo251` float NOT NULL,
  `alergo252` float NOT NULL,
  `alergo253` float NOT NULL,
  `alergo254` float NOT NULL,
  `alergo255` float NOT NULL,
  `alergo256` float NOT NULL,
  `alergo257` float NOT NULL,
  `alergo258` float NOT NULL,
  `alergo259` float NOT NULL,
  `alergo260` float NOT NULL,
  `alergo261` float NOT NULL,
  `alergo262` float NOT NULL,
  `alergo263` float NOT NULL,
  `alergo264` float NOT NULL,
  `alergo265` float NOT NULL,
  `alergo266` float NOT NULL,
  `alergo267` float NOT NULL,
  `alergo268` float NOT NULL,
  `alergo269` float NOT NULL,
  `alergo270` float NOT NULL,
  `alergo271` float NOT NULL,
  `alergo272` float NOT NULL,
  `alergo273` float NOT NULL,
  `alergo274` float NOT NULL,
  `alergo275` float NOT NULL,
  `alergo276` float NOT NULL,
  `alergo277` float NOT NULL,
  `alergo278` float NOT NULL,
  `alergo279` float NOT NULL,
  `alergo280` float NOT NULL,
  `alergo281` float NOT NULL,
  `alergo282` float NOT NULL,
  `alergo283` float NOT NULL,
  `alergo284` float NOT NULL,
  `alergo285` float NOT NULL,
  `alergo286` float NOT NULL,
  `alergo287` float NOT NULL,
  `alergo288` float NOT NULL,
  `alergo289` float NOT NULL,
  `alergo290` float NOT NULL,
  `alergo291` float NOT NULL,
  `alergo292` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_results`
--

INSERT INTO `user_results` (`id_results`, `id_user`, `alergo1`, `alergo2`, `alergo3`, `alergo4`, `alergo5`, `alergo6`, `alergo7`, `alergo8`, `alergo9`, `alergo10`, `alergo11`, `alergo12`, `alergo13`, `alergo14`, `alergo15`, `alergo16`, `alergo17`, `alergo18`, `alergo19`, `alergo20`, `alergo21`, `alergo22`, `alergo23`, `alergo24`, `alergo25`, `alergo26`, `alergo27`, `alergo28`, `alergo29`, `alergo30`, `alergo31`, `alergo32`, `alergo33`, `alergo34`, `alergo35`, `alergo36`, `alergo37`, `alergo38`, `alergo39`, `alergo40`, `alergo41`, `alergo42`, `alergo43`, `alergo44`, `alergo45`, `alergo46`, `alergo47`, `alergo48`, `alergo49`, `alergo50`, `alergo51`, `alergo52`, `alergo53`, `alergo54`, `alergo55`, `alergo56`, `alergo57`, `alergo58`, `alergo59`, `alergo60`, `alergo61`, `alergo62`, `alergo63`, `alergo64`, `alergo65`, `alergo66`, `alergo67`, `alergo68`, `alergo69`, `alergo70`, `alergo71`, `alergo72`, `alergo73`, `alergo74`, `alergo75`, `alergo76`, `alergo77`, `alergo78`, `alergo79`, `alergo80`, `alergo81`, `alergo82`, `alergo83`, `alergo84`, `alergo85`, `alergo86`, `alergo87`, `alergo88`, `alergo89`, `alergo90`, `alergo91`, `alergo92`, `alergo93`, `alergo94`, `alergo95`, `alergo96`, `alergo97`, `alergo98`, `alergo99`, `alergo100`, `alergo101`, `alergo102`, `alergo103`, `alergo104`, `alergo105`, `alergo106`, `alergo107`, `alergo108`, `alergo109`, `alergo110`, `alergo111`, `alergo112`, `alergo113`, `alergo114`, `alergo115`, `alergo116`, `alergo117`, `alergo118`, `alergo119`, `alergo120`, `alergo121`, `alergo122`, `alergo123`, `alergo124`, `alergo125`, `alergo126`, `alergo127`, `alergo128`, `alergo129`, `alergo130`, `alergo131`, `alergo132`, `alergo133`, `alergo134`, `alergo135`, `alergo136`, `alergo137`, `alergo138`, `alergo139`, `alergo140`, `alergo141`, `alergo142`, `alergo143`, `alergo144`, `alergo145`, `alergo146`, `alergo147`, `alergo148`, `alergo149`, `alergo150`, `alergo151`, `alergo152`, `alergo153`, `alergo154`, `alergo155`, `alergo156`, `alergo157`, `alergo158`, `alergo159`, `alergo160`, `alergo161`, `alergo162`, `alergo163`, `alergo164`, `alergo165`, `alergo166`, `alergo167`, `alergo168`, `alergo169`, `alergo170`, `alergo171`, `alergo172`, `alergo173`, `alergo174`, `alergo175`, `alergo176`, `alergo177`, `alergo178`, `alergo179`, `alergo180`, `alergo181`, `alergo182`, `alergo183`, `alergo184`, `alergo185`, `alergo186`, `alergo187`, `alergo188`, `alergo189`, `alergo190`, `alergo191`, `alergo192`, `alergo193`, `alergo194`, `alergo195`, `alergo196`, `alergo197`, `alergo198`, `alergo199`, `alergo200`, `alergo201`, `alergo202`, `alergo203`, `alergo204`, `alergo205`, `alergo206`, `alergo207`, `alergo208`, `alergo209`, `alergo210`, `alergo211`, `alergo212`, `alergo213`, `alergo214`, `alergo215`, `alergo216`, `alergo217`, `alergo218`, `alergo219`, `alergo220`, `alergo221`, `alergo222`, `alergo223`, `alergo224`, `alergo225`, `alergo226`, `alergo227`, `alergo228`, `alergo229`, `alergo230`, `alergo231`, `alergo232`, `alergo233`, `alergo234`, `alergo235`, `alergo236`, `alergo237`, `alergo238`, `alergo239`, `alergo240`, `alergo241`, `alergo242`, `alergo243`, `alergo244`, `alergo245`, `alergo246`, `alergo247`, `alergo248`, `alergo249`, `alergo250`, `alergo251`, `alergo252`, `alergo253`, `alergo254`, `alergo255`, `alergo256`, `alergo257`, `alergo258`, `alergo259`, `alergo260`, `alergo261`, `alergo262`, `alergo263`, `alergo264`, `alergo265`, `alergo266`, `alergo267`, `alergo268`, `alergo269`, `alergo270`, `alergo271`, `alergo272`, `alergo273`, `alergo274`, `alergo275`, `alergo276`, `alergo277`, `alergo278`, `alergo279`, `alergo280`, `alergo281`, `alergo282`, `alergo283`, `alergo284`, `alergo285`, `alergo286`, `alergo287`, `alergo288`, `alergo289`, `alergo290`, `alergo291`, `alergo292`) VALUES
(12, 8, 0.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0.03, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.05, 0.02, 0, 0, 0.01, 0, 0.1, 0.01, 0.07, 0.1, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0.28, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0.18, 0, 0, 0, 0, 0, 0.15, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0.04, 0, 0.01, 0.09, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0.29, 0, 0, 0, 0, 14.8, 23.91, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.17, 13.75, 10.64, 11.13, 0, 0, 0, 0, 0, 0, 0, 0.13, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0, 0.66, 2.04, 6.15, 21.35, 27.13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0.07, 0, 0, 0, 0, 0.01, 0, 0.19, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.19, 0, 0, 0, 0, 0, 0, 0.12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.02, 0, 0, 0, 0, 128, 128, 0, 0, 0, 0, 0, 0.02, 0, 0, 0.04, 0, 0, 0),
(13, 9, 0.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0.03, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.05, 0.02, 0, 0, 0.01, 0, 0.1, 0.01, 0.07, 0.1, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0.28, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0.18, 0, 0, 0, 0, 0, 0.15, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0.04, 0, 0.01, 0.09, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0.29, 0, 0, 0, 0, 14.8, 23.91, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.17, 13.75, 10.64, 11.13, 0, 0, 0, 0, 0, 0, 0, 0.13, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0, 0.66, 2.04, 6.15, 21.35, 27.13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0.07, 0, 0, 0, 0, 0.01, 0, 0.19, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.19, 0, 0, 0, 0, 0, 0, 0.12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.02, 0, 0, 0, 0, 128, 128, 0, 0, 0, 0, 0, 0.02, 0, 0, 0.04, 0, 0, 0),
(14, 10, 0.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0.03, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.05, 0.02, 0, 0, 0.01, 0, 0.1, 0.01, 0.07, 0.1, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0.28, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0.18, 0, 0, 0, 0, 0, 0.15, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0.04, 0, 0.01, 0.09, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0.29, 0, 0, 0, 0, 14.8, 23.91, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.17, 13.75, 10.64, 11.13, 0, 0, 0, 0, 0, 0, 0, 0.13, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0, 0.66, 2.04, 6.15, 21.35, 27.13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0.07, 0, 0, 0, 0, 0.01, 0, 0.19, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.19, 0, 0, 0, 0, 0, 0, 0.12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.02, 0, 0, 0, 0, 128, 128, 0, 0, 0, 0, 0, 0.02, 0, 0, 0.04, 0, 0, 0),
(15, 11, 0.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0.03, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.05, 0.02, 0, 0, 0.01, 0, 0.1, 0.01, 0.07, 0.1, 0, 0, 0.07, 0, 0, 0, 0, 0, 0, 0, 0.28, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0.18, 0, 0, 0, 0, 0, 0.15, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0.04, 0, 0.01, 0.09, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0.29, 0, 0, 0, 0, 14.8, 23.91, 0, 0, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.17, 13.75, 10.64, 11.13, 0, 0, 0, 0, 0, 0, 0, 0.13, 0, 0, 0, 0, 0, 0, 0, 0.03, 0, 0, 0, 0.66, 2.04, 6.15, 21.35, 27.13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.09, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.06, 0, 0, 0, 0, 0, 0, 0, 0.04, 0, 0, 0.07, 0, 0, 0, 0, 0.01, 0, 0.19, 0.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.19, 0, 0, 0, 0, 0, 0, 0.12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.02, 0, 0, 0, 0, 128, 128, 0, 0, 0, 0, 0, 0.02, 0, 0, 0.04, 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user_results`
--
ALTER TABLE `user_results`
  ADD PRIMARY KEY (`id_results`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `user_results`
--
ALTER TABLE `user_results`
  MODIFY `id_results` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user_results`
--
ALTER TABLE `user_results`
  ADD CONSTRAINT `user_results_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_info` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
