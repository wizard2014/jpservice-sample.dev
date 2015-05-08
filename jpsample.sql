-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 08 2015 г., 15:24
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `jpsample`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`, `status`, `rating`) VALUES
(1, 'Samsung Galaxy Ace 4 Lite G313', 'A brand-new, unused, unopened, undamaged item in its original packaging (where packaging is applicable). Packaging should be the same as what is found in a retail store, unless the item is handmade or was packaged by the manufacturer in non-retail packagi', 100, 'img_1.JPG', 1, 0),
(2, 'Apple iPhone 4s 16GB Black & White', 'Just when you thought a smartphone couldn’t get any better, it just did — the iPhone 4S is sure to change the way you communicate. The Siri technology lets you talk to this Apple smartphone as you would talk to a person, turning the iPhone 4S into a perso', 200, 'img_2.JPG', 1, 0),
(3, 'Nokia Lumia 920', 'The Nokia Lumia 920 is the flagship Windows Phone 8 smartphone, including the latest advances in Nokia PureView imaging innovation. Using advanced floating lens technology, the camera in the Nokia Lumia 920 is able to take in five times more light than co', 130, 'img_3.JPG', 1, 0),
(4, 'Sony XPERIA Z3 D6653 QuadCore', 'Xperia Z3 is the smartphone that does more and goes further – whether further is a run in the rain or a dive into the pool on a sunny summer holiday. With the highest waterproof rating*, you can find your way in a downpour, take pictures underwater or jus', 470, 'img_4.JPG', 1, 0),
(5, 'LG G2 D802 16GB', 'This LG G2 802 runs on Android operating system and offers useful features. The black smartphone is powered by a reliable processor, ensuring stable performance. This LG phone has a 5.2 in.', 150, 'img_5.JPG', 1, 0),
(6, 'LG Google Nexus 5 D820 4G LTE', 'A significant power and an advanced level of performance are hidden into the beautiful body of the Nexus 5. Having fun with favorite music, video, and applications is always available with an ease and at lightning speed, as this black Nexus cell phone.', 300, 'img_6.JPG', 1, 0),
(7, 'Sony XPERIA U ST25i Model 8GB Black', 'With a resolution of 480x854 pixels, the Sony U smartphone displays detailed and sharp images. This Sony Xperia runs on the Android v2.3 OS that supports a wide range of applications. Thanks to the 3.5-inch multi-touch screen of this smartphone.', 80, 'img_7.JPG', 1, 0),
(8, 'HTC One M7 32GB 4G LTE', 'The HTC One Unlocked is the smartphone you''ve been waiting for. This sleek device has an all-aluminum body offering a slim and easy grip. HTC BlinkFeed on your home screen keeps you up to date with what''s important to you.', 225, 'img_8.JPG', 1, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
