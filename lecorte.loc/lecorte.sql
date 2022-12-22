-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 21 2022 г., 14:16
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lecorte`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `comment_text` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `username`, `comment_text`, `product_id`) VALUES
(18, 'gyj', 'gy', 1),
(20, 'Текст', 'ргл', 1),
(21, 'Хочу пиво', 'Пиво луче', 4),
(22, 'ванек', 'люблю кальмары они вкусные', 4),
(23, 'Жменя', 'У меня дома трактор стоит, в гараже, я его люблю, а это вино - нет', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `degustation`
--

CREATE TABLE `degustation` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact_number` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `degustation`
--

INSERT INTO `degustation` (`id`, `name`, `contact_number`, `address`) VALUES
(25, 'Эван', '89073098324', 'пр. 1905 года, 22'),
(26, 'Крис', '989324678978', 'проезд Будапештсткая, 09'),
(27, 'Test', 'Papa', 'пл. Балканская, 05'),
(28, 'Vika', '89237544255', 'пл. Балканская, 05'),
(29, 'grishanov.405', 'hkj', 'пл. Балканская, 05');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `price`, `image_link`) VALUES
(1, 'Vasse Felix - Filius', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 12700, 'css/images/catalog/filius.png'),
(2, 'Renfolds', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 9700, 'css/images/catalog/penfolds.png'),
(3, 'Tignanello', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 5900, 'css/images/catalog/tignanello.png'),
(4, 'Brancott Estate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 7800, 'css/images/catalog/brancott.png'),
(5, 'Premius', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 16700, 'css/images/catalog/premius.png'),
(6, 'Wither Hills', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 12700, 'css/images/catalog/wither.png'),
(7, 'Belle Mos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 21800, 'css/images/catalog/belle.png'),
(8, 'Capture', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 18200, 'css/images/catalog/capture.png'),
(9, 'Hans Greyl', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates aperiam omnis dolore praesentium, obcaecati similique veniam ducimus, sapiente exercitationem doloremque?', 6700, 'css/images/catalog/hans.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `degustation`
--
ALTER TABLE `degustation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `degustation`
--
ALTER TABLE `degustation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
