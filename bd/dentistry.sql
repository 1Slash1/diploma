-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 18 2021 г., 05:19
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dentistry`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about_us`
--

INSERT INTO `about_us` (`id`, `text`) VALUES
(1, 'Частная стоматологическая клиника в Волгограде «Жемчужина» оказывает широкий спектр услуг – от терапевтического лечения заболеваний зубов до проведения стоматологических операций и протезирования.'),
(2, 'В нашей стоматологии работают исключительно специалисты с высокой квалификацией и многолетним стажем, а ценовая политика имеет социальную направленность.'),
(3, 'Мы дорожим нашими клиентами и постоянно следим за общим состоянием цен на рынке стоматологических услуг, стараясь поддерживать их на доступном уровне.'),
(4, 'Благодаря этому, у нас вы сможете провести лечение зубов с гарантией и по действительно низким ценам.');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numbers` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `schedule`, `mail`, `numbers`) VALUES
(1, 'Волгоград, пр. Металлургов, 30а ', 'Понедельник-Пятница: с 8:00-20:00 Суббота-Воскресенье: с 9:00-18:00 ', 'perl34@mail.ru ', '(8442) 43-99-77 43-99-78 60-19-77 ');

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `doctors`
--

INSERT INTO `doctors` (`id`, `image`, `name`, `position`) VALUES
(6, 'admin/photo/1622824352photo1.png', 'Петрова Виктория Александровна', 'Учредитель клиники ООО«Жемчужина», Врач-стоматолог.'),
(7, 'admin/photo/1623030406Lemtyugov-200x300.jpg', 'Лемтюгов Сергей Витальевич ', 'Главный врач стоматолог OOO «Жемчужина», врач-стоматолог, хирург, ортопед. '),
(8, 'admin/photo/1622824564enc1wa8amqbmqzhc_150x150.jpg', 'Чумаков Николай Викторович', 'Врач-стоматолог, ортопед, хирург.'),
(9, 'admin/photo/1622824588yamkovoy-V-I-235x300.jpg', 'Ямковой Валерий Игоревич', 'Врач-стоматолог, хирург, ортопед, имплантолог.'),
(10, 'admin/photo/1622824603enc21cv24uzfpxop_150x150.jpg', 'Ямковая Анастасия Валентиновна', 'Врач-стоматолог, терапевт.'),
(11, 'admin/photo/1622824623enc10sa6qoe82vvo_150x150.jpg', 'Кузнецова Аксинья Михайловна', 'Врач-стоматолог, терапевт.'),
(12, 'admin/photo/1622824635enc1ml94aqswb4kx_150x150.jpg', 'Орлова Любовь Игоревна', 'Врач-стоматолог, детский стоматолог.'),
(13, 'admin/photo/1622824647enc1rs6ir9i8wusv_150x150.jpg', 'Симон Вероника Ашотовна', 'Врач-стоматолог, детский стоматолог, терапевт.'),
(14, 'admin/photo/1622824666enc0xupysq1vn116_150x150.jpg', 'Кондратенко Александр Анатольевич', 'Врач-стоматолог, терапевт.'),
(15, 'admin/photo/1622824686enc1zqcults3cp2w_150x150.jpg', 'Шуманова Екатерина Александровна', 'Врач-стоматолог, ортодонт.'),
(16, 'admin/photo/1622824703enc0k9n514x5oqng_150x150.jpg', 'Попова Светлана Юрьевна', 'Главная мед-сестра.'),
(17, 'admin/photo/1622824718enc0qy45ifkgr9fz_150x150.jpg', 'Борисов Андрей Николаевич', 'Зубной техник.'),
(18, 'admin/photo/1622824742enc0mfdnri827jan_150x150.jpg', 'Руденко Дмитрий Владимирович', 'Зубной техник.'),
(29, 'admin/photo/1623254974enc0lf2t3nsryo0i_150x150.jpg', 'Рогачева Елена Владимировна', 'Ассистент стоматолога.'),
(30, 'admin/photo/1623255009enc0dhnspt28irki_150x150.jpg', 'Голованова Галина Вячеславовна', 'Провизор, ассистент стоматолога.'),
(31, 'admin/photo/1623255042enc05jn3dzua1p4a_150x150.jpg', 'Абраменко Елена Михайловна', 'Ассистент стоматолога, рентген, лаборант.'),
(32, 'admin/photo/1623255068enc0gmfws1l0m0k2_150x150.jpg', 'Моисеенко Илья Александрович', 'Ассистент стоматолога, рентген, лаборант.'),
(33, 'admin/photo/1623255218enc0hobuzpjvx9xk_150x150.jpg', 'Морозова Анастасия Алексеевна', 'Ассистент стоматолога.'),
(34, 'admin/photo/1623255160enc0bgj826h7sb2n_150x150.jpg', 'Гераськина Екатерина Александровна', 'Ассистент стоматолога.'),
(35, 'admin/photo/1623255173enc0em3ik3d6wcoq_150x150.jpg', 'Кузьмичева Светлана Сергеевна', 'Администратор.');

-- --------------------------------------------------------

--
-- Структура таблицы `first_screen`
--

CREATE TABLE `first_screen` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `first_screen`
--

INSERT INTO `first_screen` (`id`, `title`, `subtitle`) VALUES
(1, 'Стоматология «Жемчужина» – одна из лучших частных стоматологических клиник в Волгограде!', 'В нашей стоматологии работают исключительно специалисты с высокой квалификацией и многолетним стажем');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `title`, `review`) VALUES
(2, 'Рома', 'Заголовок', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est minima maxime dolorem, dignissimos ipsa facere odio repellendus quos veritatis quas minus nostrum sint qui ipsam. Eos qui illum ipsam sint.'),
(3, 'Саша', 'Заголовок', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est minima maxime dolorem, dignissimos ipsa facere odio repellendus quos veritatis quas minus nostrum sint qui ipsam. Eos qui illum ipsam sint.'),
(4, 'Андрей ', 'Заголовок', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est minima maxime dolorem, dignissimos ipsa facere odio repellendus quos veritatis quas minus nostrum sint qui ipsam. Eos qui illum ipsam sint.');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `subtitle`) VALUES
(1, 'Терапевтическое лечение', 'От 1500р'),
(2, 'Ортодонтия (установка брекетов)', 'От 1500р'),
(3, 'Хирургическое вмешательство', 'От 1500р'),
(4, 'Протезирование зубов', 'От 1500р'),
(5, 'Имплантация', 'От 1500р'),
(6, 'Пародонтология', 'От 1500р'),
(7, 'Стоматологическое лечение для детей', 'От 1500р'),
(8, 'Стоматологическое лечение для беременных', 'От 1500р'),
(9, 'Эстетическая стоматология', 'От 1500р'),
(10, 'Профилактическое обследование', 'От 1500р');

-- --------------------------------------------------------

--
-- Структура таблицы `social_networks`
--

CREATE TABLE `social_networks` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `social_networks`
--

INSERT INTO `social_networks` (`id`, `link`) VALUES
(1, 'https://www.instagram.com/jemchujina34/');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `first_screen`
--
ALTER TABLE `first_screen`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `first_screen`
--
ALTER TABLE `first_screen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
