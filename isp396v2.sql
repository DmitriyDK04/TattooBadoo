-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2022 г., 08:45
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `isp396v2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `lik` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_users`, `text`, `date`, `lik`, `dislike`) VALUES
(4, 16, 'Привет мир', '2022-05-14 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(1, '2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `inst` varchar(250) NOT NULL,
  `face` varchar(250) NOT NULL,
  `twit` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `masters`
--

INSERT INTO `masters` (`id`, `name`, `surname`, `description`, `img`, `inst`, `face`, `twit`) VALUES
(1, 'Виталий', 'Гусев', 'Реализм: Black and grey, Цвет, Портретная татуировка.', 'member-1.jpg', 'https://qna.habr.com/q/631347', 'http://tattoobadoodiplom1/o_nas.php', 'http://tattoobadoodiplom1/o_nas.php'),
(2, 'Юлия', 'Костюченко', 'Black and grey, Миниатюры, Графика.', 'member-2.jpg', '', '', ''),
(3, 'Олег', 'Басов', 'Old school, New school, Японская, Органика, Орнаментальная, Графика.', 'member-3.jpg', '', '', ''),
(4, 'Евгения', 'Аносенко', 'Old school, New school, Орнаментальная, Графика.', 'member-4.jpg', '', '', ''),
(5, 'Анастасия', 'Иващенко', 'Графика, Портретная татуировка, Акварель.', 'member-5.jpg', '', '', ''),
(6, 'Владислава', 'Егорова', 'Акварель, Контурные работы, Портретная татуировка.', 'member-6.jpg', '', '', ''),
(7, 'Владислава', 'Егорова', 'Акварель, Контурные работы, Портретная татуировка.', 'member-7.jpg', '', '', ''),
(8, 'Станислав', 'Котельников', 'Графика, Контурные работы, Геометрия, Орнаменты.', 'member-8.jpg', '', '', ''),
(9, 'Евгений', 'Григорьенко', 'Old school, New school, Графика, Геометрия.', 'member-9.jpg', '', '', ''),
(10, 'Элеонора', 'Абадир', 'Геометрия, Black and grey, Миниатюры, Графика.', 'member-10.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `avatarka` varchar(250) DEFAULT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `avatarka`, `birthday`) VALUES
(1, 'norik2', '12345', 'oleg@mail.ru', NULL, '2021-09-01'),
(2, 'norik02', '12345', 'oleg@mail.ru', 'defualtavatar.png', '2021-09-15'),
(3, 'norik02', '12345', 'oleg@mail.ru', 'defualtavatar.png', '2021-09-15'),
(4, 'norik02', '12345', 'oleg@mail.ru', 'defualtavatar.png', '2021-09-17'),
(5, 'ortiz3', '123', 'mam1a@mail.ru', 'defualtavatar.png', '2021-09-30'),
(6, '123', '123', '123@mail.ru', 'defualtavatar.png', '2021-09-30'),
(7, '1234', '1234', '1234@mail.ru', 'defualtavatar.png', '2021-10-22'),
(8, 'qwe', 'qwe', 'qwe@mail.com', 'defualtavatar.png', '2021-11-01'),
(9, 'igorpodor', 'igorpodor', 'igorpodor@mail.ru', 'defualtavatar.png', '2021-12-16'),
(11, '0987', '0987', '0987@mail.ru', 'defualtavatar.png', '2022-02-08'),
(12, 'fghj', 'fghj', 'fghj@mail.ru', 'defualtavatar.png', '2022-02-08'),
(13, 'zxcv', ' OtPS6tRrci', 'zxcv@gmail.ru', 'defualtavatar.png', '2022-02-08'),
(15, 'zxc', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'zxc@gmail.ru', 'defualtavatar.png', '2022-04-19'),
(16, 'dmitriikuzmov', '8a4612dd23a070e87ef851e82a18f720', 'dmitriy.ks.041001@gmail.com', 'defualtavatar.png', '2022-05-14');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `date` date NOT NULL,
  `id_users` int(11) NOT NULL,
  `url` varchar(250) NOT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `like` int(11) DEFAULT '0',
  `dislike` int(11) DEFAULT '0',
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `name`, `description`, `date`, `id_users`, `url`, `flag`, `like`, `dislike`, `views`) VALUES
(1, 'Пришельцы захватили Казахстан', 'Наивный парень солдат отдаёет коды доступа и по его вине захватывают любимый Казахстан', '2021-09-01', 1, '.', 0, 0, 0, NULL),
(2, 'Революция в Казахстане', 'Тот самый парень недоволен правлением и решает взять все в свои руки', '2021-09-02', 1, '.', 0, 0, 0, NULL),
(3, 'norik', 'ewfede', '2021-10-11', 1, '6164129f3fa9a.mp4', NULL, 0, 0, NULL),
(4, 'norik', 'ewfede', '2021-10-11', 1, '616412d4689bf.mp4', NULL, 0, 0, NULL),
(5, 'dewfdewf', 'ewdewfd', '2021-10-11', 1, '616413d4a4283.mp4', NULL, 0, 0, NULL),
(6, 'ewdewd', 'ewdewd', '2021-10-11', 1, '6164153469bb4.mp4', NULL, 0, 0, NULL),
(7, 'ttttttttt', 'tttttttttt', '2021-10-11', 1, '616419c081743.mp4', NULL, 0, 0, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
