-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 19 2018 г., 19:16
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `spb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `description`, `name`) VALUES
(1, 'Александровская колонна', 'AlexColumn.jpg'),
(2, 'Банковский мост', 'bankBridge.jpg'),
(3, 'Исаакиевский собор', 'isacSabor.jpg'),
(4, 'Здание Главного штаба', 'PalaceSquare.jpg'),
(5, 'Дом Зингера', 'singerHouse.jpg'),
(6, 'Площадь Восстания', 'AreaRevolt.jpg'),
(7, 'Казанский Собор', 'KazanCathedral.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `train_schedule`
--

CREATE TABLE `train_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departure` varchar(100) DEFAULT NULL,
  `dep_time` datetime DEFAULT NULL,
  `arival` text,
  `ariv_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `train_schedule`
--

INSERT INTO `train_schedule` (`id`, `departure`, `dep_time`, `arival`, `ariv_time`) VALUES
(1, 'Санкт-Петербург', '2018-08-23 10:25:00', 'Москва', '2018-08-24 18:30:00'),
(2, 'Москва', '0018-08-23 18:30:00', 'Санкт-Петербург', '2018-08-24 10:30:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users_admin`
--

CREATE TABLE `users_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_admin`
--

INSERT INTO `users_admin` (`id`, `login`, `password`) VALUES
(1, 'User1', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `train_schedule`
--
ALTER TABLE `train_schedule`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users_admin`
--
ALTER TABLE `users_admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `train_schedule`
--
ALTER TABLE `train_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
