-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 28 2019 г., 15:45
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
  `addressType` int(10) NOT NULL,
  `heredity` smallint(6) NOT NULL,
  `smoky` smallint(6) NOT NULL,
  `work` smallint(6) NOT NULL,
  `alergo1` smallint(6) NOT NULL,
  `alergoSeason1` smallint(6) NOT NULL,
  `alergoYear1` smallint(6) NOT NULL,
  `alergo2` smallint(6) NOT NULL,
  `alergoSeason2` smallint(6) NOT NULL,
  `alergoYear2` smallint(6) NOT NULL,
  `alergo3` smallint(6) NOT NULL,
  `alergoSeason3` smallint(6) NOT NULL,
  `alergoYear3` smallint(6) NOT NULL,
  `alergo4` smallint(6) NOT NULL,
  `alergo5` smallint(6) NOT NULL,
  `alergo6` smallint(6) NOT NULL,
  `alergo7` smallint(6) NOT NULL,
  `alergo8` smallint(6) NOT NULL,
  `alergo9` smallint(6) NOT NULL,
  `alergo10` smallint(6) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `surnameDoctor` varchar(255) NOT NULL,
  `phoneDoctor` varchar(30) DEFAULT NULL,
  `emailDoctor` varchar(50) DEFAULT NULL,
  `dateExamination` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_info`
--

INSERT INTO `user_info` (`id_user`, `surname_user`, `name_user`, `last_name_user`, `date_birthday`, `gender`, `email`, `phone`, `address`, `addressType`, `heredity`, `smoky`, `work`, `alergo1`, `alergoSeason1`, `alergoYear1`, `alergo2`, `alergoSeason2`, `alergoYear2`, `alergo3`, `alergoSeason3`, `alergoYear3`, `alergo4`, `alergo5`, `alergo6`, `alergo7`, `alergo8`, `alergo9`, `alergo10`, `hospital`, `surnameDoctor`, `phoneDoctor`, `emailDoctor`, `dateExamination`) VALUES
(1, 'Ясеновий', 'Максим', 'Сергійович', '1992-05-19', 'male', 'yasmaks@bigmir.net', '067-123-45-67', 'м.Київ', 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Мед Гос', 'Комаров В.В.', '063-123-45-67', 'test@bigmir.net', '2019-03-28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
