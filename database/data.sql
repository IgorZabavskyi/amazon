-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 30 2017 г., 07:04
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `amazon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `amz_migration`
--

CREATE TABLE `amz_migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `amz_migration`
--

INSERT INTO `amz_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1506459337),
('m130524_201442_init', 1506459349),
('m170926_205905_create_amz_product_table', 1506459739);

-- --------------------------------------------------------

--
-- Структура таблицы `amz_product`
--

CREATE TABLE `amz_product` (
  `id` int(11) NOT NULL,
  `asin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ean` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `amz_product`
--

INSERT INTO `amz_product` (`id`, `asin`, `title`, `price`, `picture`, `ean`, `brand`) VALUES
(2, 'B00H1OUSD2', 'Espressomaschine Rancilio Silvia', '618.75', 'https://images-eu.ssl-images-amazon.com/images/I/410LtaraEtL._SL75_.jpg', '0799475078767', 'Rancilio'),
(3, 'B01M4RUY20', 'Tsmine Bluetooth Ultra Slim / Kleine Maus Wiederaufladbare Wireless Optical Mouse, 5 Tasten für Notebook, PC, Laptop (NICHT für iPhone oder iPad) - Rose Gold', '15.29', 'https://images-eu.ssl-images-amazon.com/images/I/41uqL9yngNL._SL75_.jpg', NULL, 'Tsmine'),
(4, 'B01K2LQAZ0', 'Eton Bereich am/fm mit RDS und Kurzwelle, schwarz (ngwfb)', '0.00', 'https://images-eu.ssl-images-amazon.com/images/I/51-KGIl8ICL._SL75_.jpg', '0750254810190', 'Eton'),
(5, 'B0014T7W8Y', 'Eton Grundig Satellite 750 Black - Funkempfänger (AM, FM, LW, SW, 1711 - 30000 kHz, 118 - 137 MHz, 372 x 146 x 184 mm)', '0.00', 'https://images-eu.ssl-images-amazon.com/images/I/415EabevbsL._SL75_.jpg', '0750254803475', 'Eton'),
(6, 'B00DUGZFWY', 'AmazonBasics Tasche für Laptop / Tablet mit Bildschirmdiagonale 15,6 Zoll / 39,6 cm', '15.90', 'https://images-eu.ssl-images-amazon.com/images/I/51Rqwz-l7JL._SL75_.jpg', '0841710104912', 'AmazonBasics'),
(7, 'B00DUGZFWY', 'AmazonBasics Tasche für Laptop / Tablet mit Bildschirmdiagonale 15,6 Zoll / 39,6 cm', '15.90', 'https://images-eu.ssl-images-amazon.com/images/I/51Rqwz-l7JL._SL75_.jpg', '0841710104912', 'AmazonBasics'),
(8, 'B01M4RUY20', 'Tsmine Bluetooth Ultra Slim / Kleine Maus Wiederaufladbare Wireless Optical Mouse, 5 Tasten für Notebook, PC, Laptop (NICHT für iPhone oder iPad) - Rose Gold', '15.29', 'https://images-eu.ssl-images-amazon.com/images/I/41uqL9yngNL._SL75_.jpg', NULL, 'Tsmine'),
(9, 'B01M4RUY20', 'Tsmine Bluetooth Ultra Slim / Kleine Maus Wiederaufladbare Wireless Optical Mouse, 5 Tasten für Notebook, PC, Laptop (NICHT für iPhone oder iPad) - Rose Gold', '15.29', 'https://images-eu.ssl-images-amazon.com/images/I/41uqL9yngNL._SL75_.jpg', NULL, 'Tsmine'),
(10, 'B01M4RUY20', 'Tsmine Bluetooth Ultra Slim / Kleine Maus Wiederaufladbare Wireless Optical Mouse, 5 Tasten für Notebook, PC, Laptop (NICHT für iPhone oder iPad) - Rose Gold', '15.29', 'https://images-eu.ssl-images-amazon.com/images/I/41uqL9yngNL._SL75_.jpg', NULL, 'Tsmine'),
(11, 'B01M4RUY20', 'Tsmine Bluetooth Ultra Slim / Kleine Maus Wiederaufladbare Wireless Optical Mouse, 5 Tasten für Notebook, PC, Laptop (NICHT für iPhone oder iPad) - Rose Gold', '15.29', 'https://images-eu.ssl-images-amazon.com/images/I/41uqL9yngNL._SL75_.jpg', NULL, 'Tsmine'),
(12, 'B01M4RUY20', 'Tsmine Bluetooth Ultra Slim / Kleine Maus Wiederaufladbare Wireless Optical Mouse, 5 Tasten für Notebook, PC, Laptop (NICHT für iPhone oder iPad) - Rose Gold', '15.29', 'https://images-eu.ssl-images-amazon.com/images/I/41uqL9yngNL._SL75_.jpg', NULL, 'Tsmine'),
(13, 'B01K2LQAZ0', 'Eton Bereich am/fm mit RDS und Kurzwelle, schwarz (ngwfb)', '0.00', 'https://images-eu.ssl-images-amazon.com/images/I/51-KGIl8ICL._SL75_.jpg', '0750254810190', 'Eton'),
(14, 'B01K2LQAZ0', 'Eton Bereich am/fm mit RDS und Kurzwelle, schwarz (ngwfb)', '0.00', 'https://images-eu.ssl-images-amazon.com/images/I/51-KGIl8ICL._SL75_.jpg', '0750254810190', 'Eton'),
(15, 'B00DUGZFWY', 'AmazonBasics Tasche für Laptop / Tablet mit Bildschirmdiagonale 15,6 Zoll / 39,6 cm', '15.90', 'https://images-eu.ssl-images-amazon.com/images/I/51Rqwz-l7JL._SL75_.jpg', '0841710104912', 'AmazonBasics'),
(16, 'B00DUGZFWY', 'AmazonBasics Tasche für Laptop / Tablet mit Bildschirmdiagonale 15,6 Zoll / 39,6 cm', '15.90', 'https://images-eu.ssl-images-amazon.com/images/I/51Rqwz-l7JL._SL75_.jpg', '0841710104912', 'AmazonBasics'),
(17, 'B00DUGZFWY', 'AmazonBasics Tasche für Laptop / Tablet mit Bildschirmdiagonale 15,6 Zoll / 39,6 cm', '15.90', 'https://images-eu.ssl-images-amazon.com/images/I/51Rqwz-l7JL._SL75_.jpg', '0841710104912', 'AmazonBasics'),
(18, 'B00DUGZFWY', 'AmazonBasics Tasche für Laptop / Tablet mit Bildschirmdiagonale 15,6 Zoll / 39,6 cm', '15.90', 'https://images-eu.ssl-images-amazon.com/images/I/51Rqwz-l7JL._SL75_.jpg', '0841710104912', 'AmazonBasics'),
(19, 'B01IPJX2NY', 'Samsung Schnelle Aufladung Dual-Port KFZ Ladegerät – Retail Verpackung', '0.00', 'https://images-eu.ssl-images-amazon.com/images/I/41Y8KgPqLwL._SL75_.jpg', '0887276175973', 'Samsung'),
(20, 'B00DUGZFWY', 'AmazonBasics Tasche für Laptop / Tablet mit Bildschirmdiagonale 15,6 Zoll / 39,6 cm', '15.90', 'https://images-eu.ssl-images-amazon.com/images/I/51Rqwz-l7JL._SL75_.jpg', '0841710104912', 'AmazonBasics'),
(21, 'B01CT6Q628', 'Samsung Galaxy J3 DUOS Smartphone (12,63 cm (5 Zoll) HD Super-AMOLED-Touchscreen, 8 GB, Android 5.1 Lollipop) schwarz', '0.00', 'https://images-eu.ssl-images-amazon.com/images/I/41sEOD9HqsL._SL75_.jpg', '8806088313986', 'Samsung'),
(22, 'B01HH5MOPY', 'Samsung Galaxy J5 DUOS Smartphone (13,2 cm (5,2 Zoll) Touch-Display, 16 GB Speicher, Android 6.0) schwarz', '0.00', 'https://images-eu.ssl-images-amazon.com/images/I/317Qgc2hB7L._SL75_.jpg', '8806088425740', 'Samsung'),
(23, 'B00P73B1E4', 'Samsung MZ-75E500B/EU 850 EVO interne SSD 500GB (6,4 cm (2,5 Zoll), SATA III) schwarz', '157.47', 'https://images-eu.ssl-images-amazon.com/images/I/41LDHJHtOnL._SL75_.jpg', '5054629666692', 'Samsung');

-- --------------------------------------------------------

--
-- Структура таблицы `amz_user`
--

CREATE TABLE `amz_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `amz_user`
--

INSERT INTO `amz_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'amazon', 'SNa6bsJ4J3bPiGOj_cuVlZHvihJEXGyG', '$2y$13$Hn3e2xb1lsKXMiz2WlZmBOCtQ3gtDLISQBDBvpyAi1KN1TFvoRWJa', NULL, 'finboss@gmail.com', 10, 1506459820, 1506459820);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `amz_migration`
--
ALTER TABLE `amz_migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `amz_product`
--
ALTER TABLE `amz_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `amz_user`
--
ALTER TABLE `amz_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `amz_product`
--
ALTER TABLE `amz_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `amz_user`
--
ALTER TABLE `amz_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
