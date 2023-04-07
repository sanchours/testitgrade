-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2023 г., 17:27
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_itgrade`
--

-- --------------------------------------------------------

--
-- Структура таблицы `houses`
--

CREATE TABLE `houses` (
  `House_id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Adress` varchar(100) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` decimal(65,3) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `houses`
--

INSERT INTO `houses` (`House_id`, `Name`, `Adress`, `Description`, `Price`, `Type`, `img`) VALUES
(5, 'Объект 1', 'ул. Мамадышская 45-78', '9-ый дом, 180 кв. метров, двухуровневая', '7500.000', 1, '16.jpg'),
(6, 'Объект 2', 'ул. Гагарина 56-56', 'ул. Азата Аббасова, д. 11, Казань', '3900.000', 1, '1930134.jpg'),
(7, 'Объект 3', 'ул. Ленинградская 97-01', 'частный дом из сруба, 100 кв.метров', '4500.000', 1, '1930518.jpg'),
(8, 'Объект 4', 'ул. Галимджана Баруди 59-78', 'Кирпичный дом, 80 кв. метров', '3200.000', 1, '1944656.jpg'),
(9, 'Объект 5', 'ул. 50 лет Победы 24-32', 'Панельный дом, 45 кв. метров, с двумя лоджиями', '2500.000', 1, 'dom-gorodishce-141072644-2.jpg'),
(10, 'Объект 6', 'ул. Аббасова 11-22', 'Продается 2-комн. кв., 64 м2, 9/19 этаж', '3900.000', 1, 'dom-niva-178145527-2.jpg'),
(11, 'Объект 7', 'ул. Лушникова 50-7', 'Продается 2-комн. кв., 45.8 м2, 1/5 этаж', '2600.000', 1, 'foto_largest.jpg'),
(12, 'Объект 8', 'ул. Широка 97-01', 'Продается 2-комн. кв., 63 м2, 9/10 этаж', '4350.000', 1, 'garazh-moskva-1ya-severnaya-liniya-202151582-2.jpg'),
(13, 'Объект 9', 'ул. Хо Ши Мина  56-321', 'Продается 4-комн. кв., 83.5 м2, 10/11 этаж', '3750.000', 1, 'garazh-moskva-bryanskaya-ulica-191385857-2.jpg'),
(14, 'Объект 10', 'ул. Фучика 6-97', 'Продается 2-комн. кв., 62.8 м2, 2/16 этаж', '5200.000', 1, 'getImage-50.jpeg'),
(23, 'фцафц', 'на крупской', 'в смоленске', '1212.000', 1, '1635894641_28-phonoteka-org-p-nedvizhimost-vektor-fon-krasivie-29.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `urses`
--

CREATE TABLE `urses` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `urses`
--

INSERT INTO `urses` (`id`, `login`, `password`) VALUES
(33, 'admin', 'admin'),
(38, '12', '12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`House_id`);

--
-- Индексы таблицы `urses`
--
ALTER TABLE `urses`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `houses`
--
ALTER TABLE `houses`
  MODIFY `House_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `urses`
--
ALTER TABLE `urses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
