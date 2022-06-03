-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2022 г., 22:05
-- Версия сервера: 5.7.33
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `level_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `profession`, `role`, `twitter`, `mail`, `active`) VALUES
(1, 'Sunny A.', 'img/demo/authors/sunny.png', 'UI/UX Expert', 'Lead Author', '@myplaneticket', 'myorange', 0),
(2, 'Jos K.', 'img/demo/authors/josh.png', 'ASP.NET Developer', 'Partner &amp; Contributor', '@atlantez', 'Walapa', 1),
(3, 'Jovanni L.', 'img/demo/authors/jovanni.png', 'PHP Developer', 'Partner &amp; Contributor', '@lodev09', 'lodev09', 0),
(4, 'Roberto R.', 'img/demo/authors/roberto.png', 'Rails Developer', 'Partner &amp; Contributor', '@sildur', 'sildur', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
