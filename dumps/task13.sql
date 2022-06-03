-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 03 2022 г., 10:31
-- Версия сервера: 5.7.33-log
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `level1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task13`
--

CREATE TABLE `task13` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `task13`
--

INSERT INTO `task13` (`id`, `email`, `password_hash`) VALUES
(1, 'aka.fakep@gmail.com', '$2y$10$g9zWDTlQ2oj7CVLxo91bCO6adC/RVmMMb7/9QbkWbn6plLN3ZN2c.'),
(2, 'qwe', '$2y$10$l3YkjqEQAB/tuMxaOtPNF.MeRa0JCrgz1K7T8WMSgMqWhXLy9jnK6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task13`
--
ALTER TABLE `task13`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task13`
--
ALTER TABLE `task13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
