-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2023 г., 12:45
-- Версия сервера: 5.7.39-log
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `allforHome`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SecondName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberPhone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `Name`, `SecondName`, `LastName`, `numberPhone`, `password`, `isAdmin`) VALUES
(1, 'Женек', 'Манаев', 'Отчество', '+7(234)234-23-42', '1234', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `article`) VALUES
(2, 'Ведро с шваброй', 3000, 'image2.jpg', 22),
(3, 'Набор сковородок', 2500, 'image3.jpg', 33),
(4, 'Постельное белье', 1500, 'image4.jpg', 44),
(5, 'Набор полотенец', 1333, 'image5.jpg', 55),
(6, 'Ваза Красная', 4234, 'image3.jpg', 66),
(7, 'Картина', 1550, 'image7.jpg', 77),
(9, 'Ваза Красная', 1234, 'image4.jpg', 88);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `autor`, `descript`) VALUES
(1, 'Дмитрий П.', 'Заказал недавно новый универсальный средство для уборки. Я обычно подхожу с сомнением к эко-товарам, но этот продукт меня приятно удивил. Эффективно справляется с загрязнениями и при этом имеет приятный запах. Рекомендую!'),
(2, 'Татьяна В.', 'Пользовалась старым ведром для мытья полов, но решила приобрести новое с отжимом. Не могу нарадоваться, стало очень удобно мыть полы. Ведро легкое и компактное, хорошо вписалось в мою кладовую.'),
(3, 'Максим С.', 'Купил себе недавно универсальный ремень для инструментов. Отличное качество, множество карманов. Очень упрощает процесс ремонта и строительства.'),
(4, 'Елизавета Ж.', 'Недавно приобрела новые кухонные полотенца. Цвета яркие, после стирки не потеряли своей формы и цвета. Впитывают влагу хорошо. Советую!'),
(5, 'Владимир А.', 'Заказывал себе настенный держатель для инструментов. Очень удобно, что все необходимое теперь под рукой. Больше не нужно искать нужный инструмент.'),
(6, 'Светлана Е.', 'Я приобрела себе натуральные средства для стирки. Они не вызывают аллергию у членов моей семьи, и белье после стирки стало более мягким.'),
(7, 'Игорь К.', 'Недавно купил себе щетку для уборки полов. Очень прочная ручка, качественный пластик, идеально для моих потребностей.'),
(8, 'Ирина М.', 'Пользовалась старыми формами для выпечки, но решила приобрести новые. Они качественные и ничего не пригорает. Пироги теперь получаются идеально ровными.'),
(9, 'Антон Г.', 'Брал недавно ветошь для удаления пыли на производстве. Хорошо впитывает и не оставляет царапин. Рекомендую!'),
(10, 'Александра П.', 'Купила себе пару наборов новых форм для льда — отличные, прочные формы, лёд не прилипает и легко вынимается. Обязательно закажу ещё пару для прохладных летних коктейлей!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
