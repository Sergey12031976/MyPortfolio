-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 11 2021 г., 11:04
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecommerce`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
                            `id` int UNSIGNED NOT NULL,
                            `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                            `intro` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                            `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                            `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                            `price` int UNSIGNED NOT NULL,
                            `category` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `intro`, `text`, `img`, `price`, `category`) VALUES
                                                                                        (1, 'Смеситель для кухни 640-1109', 'Смеситель для кухни', 'Продажа, бесплатная установка, гарантия, 1 год бесплатного сервисного обслуживания.', '640-1109.jpg', 80, 'kitchen'),
                                                                                        (2, 'Смеситель для ванны tsb-118-95', 'Смеситель для ванны TSARSBERG (РФ)', 'Двухвентильный смеситель для ванной с шаровым переключением душа, с металлическим маховиком из коллекции TSARSBERG. Форма излива традиционная. Корпус смесителя изготовлен из сплава с высоким содержаним меди. Обладает долговечным покрытием. По параметрам герметичности относится ко второй группе с рабочим давлением 0,63 МПа. Цвет – серебро. В комплекте: эксцентрики, отражатели, металлическийшланг, лейка для душа, держатель для лейки настенный', 'tsb-118-95.jpg', 80, 'bath'),
                                                                                        (3, 'Смеситель для умывальника ', 'Смеситель для умывальника на шпильке, излив 15 см, картридж d40', 'Смеситель для умывальника на шпильке, излив 15 см, картридж d40', '18.png', 20, 'washbasin'),
                                                                                        (4, 'Смеситель для душевой кабины TSARSBERG (РФ)', 'Смеситель для душевой кабины 100-03 (1109) TSARSBERG (РФ)', 'Смеситель для душа с лейкой и шлангом, картридж d40', '29.png', 20, 'shower');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                         `id` int UNSIGNED NOT NULL,
                         `name` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                         `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                         `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
                                                        (32, 'Инночка', '123456@mail.ru', '$2y$10$dKJ1s8OMTmH2AQJZc2AKEOOlk/Ry7dw/VGJWu7Dn2mxBh9gcv2/oW'),
                                                        (34, 'Сергей', '123@mail.ru', '$2y$10$CWwNI/UVIuBCAlENvxz1xOVNlhGLBVTUe4Ktc0m6EPUdk6NNYRhMK');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
