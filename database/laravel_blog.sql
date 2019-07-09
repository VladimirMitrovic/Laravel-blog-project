-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 02:28 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_04_213944_create_users_table', 1),
(2, '2019_07_04_215620_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `description`, `featured_image`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Web Development Trends in 2019', '<p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>Web development trends change to a greater or lesser extent every single year. For decision-makers, it’s vital to be familiar with them for at least two reasons: to sustain ever-rising competition and to sharpen the knowledge.<p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'><img data-filename=\"web-development-trends-2019.jpg\" style=\"width: 591px;\" src=\"http://localhost/Laravel-blog-project/public/images/15626309230TO.png\"><br></p><p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>To save your time and provide a concentrated piece of information about web development trends in 2019, we’ve analyzed market demands in different fields of the IT industry and made up this list based on them.</p><p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>If you just want to quickly look through the main points, here’s the list of web development trends for 2019 that we’ve considered:</p><ul style=\'margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>\r\n<li>Progressive Web Apps</li>\r\n<li>Accelerated Mobile Pages</li>\r\n<li>Responsive websites</li>\r\n<li>Voice search optimization</li>\r\n<li>API-first development</li>\r\n<li>Push notifications</li>\r\n<li>AI-powered chatbots</li>\r\n<li>Motion UI</li>\r\n</ul><p></p><p></p><p></p><p></p><p></p><p></p></p>\n', 'Web development trends change to a greater or lesser extent every single year. For decision-makers', '1562515256_web-development-trends-2019.jpg', '2019-06-28 15:54:15', '2019-07-08 22:08:43', 1),
(2, 'API-First Development', '<p>Current trends in website development suggest that web solutions have to be well-prepared for connectivity with other applications. It&rsquo;s no surprise considering the rise of mobiles, wearables, and other devices that should integrate with one another.\r\n    That&rsquo;s where the tendency for API-first development approach comes from.</p>\r\n<p>What&rsquo;s wrong with traditional approach? When a company&rsquo;s main focus is to build a web or mobile solution they usually don&rsquo;t pay much attention to API development. At best, it comes as a side project that might not be properly designed\r\n    and tested.</p>\r\n<p>Another problem of the traditional approach is a time-consuming API design process which increases development expenses and service market entry time.</p>\r\n<p>The traditional API development cycle looks as follows:</p>\r\n<ol>\r\n    <li>R&amp;D team creates a design.</li>\r\n    <li>Back-end developers work on a prototype (while the rest of the team like QA engineers and front-end developers are waiting).</li>\r\n    <li>As soon as the prototype is ready QA and front-end developers get access to it.</li>\r\n    <li>In case of a bug, new feature, or any improvement this cycle will be repeated all over again.</li>\r\n</ol>', 'Current trends in website development suggest that web solutions have to be well-prepared for', 'rest-api.png', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 2),
(3, 'Web Development Trends in 2019', '<p>Web development trends change to a greater or lesser extent every single year. For decision-makers, it’s vital to be familiar with them for at least two reasons: to sustain ever-rising competition and to sharpen the knowledge.</p>\r\n\r\n<p>To save your time and provide a concentrated piece of information about web development trends in 2019, we’ve analyzed market demands in different fields of the IT industry and made up this list based on them.</p>\r\n\r\n<p>If you just want to quickly look through the main points, here’s the list of web development trends for 2019 that we’ve considered:</p>\r\n<ul>\r\n<li>Progressive Web Apps</li>\r\n<li>Accelerated Mobile Pages</li>\r\n<li>Responsive websites</li>\r\n<li>Voice search optimization</li>\r\n<li>API-first development</li>\r\n<li>Push notifications</li>\r\n<li>AI-powered chatbots</li>\r\n<li>Motion UI</li>', 'Web development trends change to a greater or lesser extent every single year. For decision-makers', 'web-development-trends-2019.jpg', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 2),
(56, 'API-First Development', '<p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>Current trends in website development suggest that web solutions have to be well-prepared for connectivity with other applications. It’s no surprise considering the rise of mobiles, wearables, and other devices that should integrate with one another. That’s where the tendency for API-first development approach comes from.<p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'><br></p><p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>What’s wrong with traditional approach? When a company’s main focus is to build a web or mobile solution they usually don’t pay much attention to API development. At best, it comes as a side project that might not be properly designed and tested.</p><p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'><br></p><p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>Another problem of the traditional approach is a time-consuming API design process which increases development expenses and service market entry time.</p><p style=\'margin-top: 30px; margin-bottom: 30px; line-height: 1.5; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>The traditional API development cycle looks as follows:</p><ol style=\'margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>\r\n<li>R&amp;D team creates a design.</li>\r\n<li>Back-end developers work on a prototype (while the rest of the team like QA engineers and front-end developers are waiting).</li>\r\n<li>As soon as the prototype is ready QA and front-end developers get access to it.</li>\r\n<li>In case of a bug, new feature, or any improvement this cycle will be repeated all over again.</li>\r\n</ol><p><br></p><ol style=\'margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Lora, \"Times New Roman\", serif; font-size: 20px;\'>\r\n</ol><ol>\r\n</ol><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p></p>\n', 'Current trends in website development suggest that web solutions have to be well-prepared for', 'rest-api.png', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 1),
(79, 'Web Development Trends in 2019', '<p>Web development trends change to a greater or lesser extent every single year. For decision-makers, it’s vital to be familiar with them for at least two reasons: to sustain ever-rising competition and to sharpen the knowledge.<p><br></p><p>To save your time and provide a concentrated piece of information about web development trends in 2019, we’ve analyzed market demands in different fields of the IT industry and made up this list based on them.</p><p><br></p><p>If you just want to quickly look through the main points, here’s the list of web development trends for 2019 that we’ve considered:</p><ul>\r\n<li>Progressive Web Apps</li>\r\n<li>Accelerated Mobile Pages</li>\r\n<li>Responsive websites</li>\r\n<li>Voice search optimization</li>\r\n<li>API-first development</li>\r\n<li>Push notifications</li>\r\n<li>AI-powered chatbots</li>\r\n<li>Motion UI</li>\r\n</ul><p></p></p>\n', 'Web development trends change to a greater or lesser extent every single year. For decision-makers', 'web-development-trends-2019.jpg', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 1),
(80, 'API-First Development', '<p>Current trends in website development suggest that web solutions have to be well-prepared for connectivity with other applications. It&rsquo;s no surprise considering the rise of mobiles, wearables, and other devices that should integrate with one another.\r\n    That&rsquo;s where the tendency for API-first development approach comes from.</p>\r\n<p>What&rsquo;s wrong with traditional approach? When a company&rsquo;s main focus is to build a web or mobile solution they usually don&rsquo;t pay much attention to API development. At best, it comes as a side project that might not be properly designed\r\n    and tested.</p>\r\n<p>Another problem of the traditional approach is a time-consuming API design process which increases development expenses and service market entry time.</p>\r\n<p>The traditional API development cycle looks as follows:</p>\r\n<ol>\r\n    <li>R&amp;D team creates a design.</li>\r\n    <li>Back-end developers work on a prototype (while the rest of the team like QA engineers and front-end developers are waiting).</li>\r\n    <li>As soon as the prototype is ready QA and front-end developers get access to it.</li>\r\n    <li>In case of a bug, new feature, or any improvement this cycle will be repeated all over again.</li>\r\n</ol>', 'Current trends in website development suggest that web solutions have to be well-prepared for', 'rest-api.png', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 2),
(81, 'Web Development Trends in 2019', '<p>Web development trends change to a greater or lesser extent every single year. For decision-makers, it’s vital to be familiar with them for at least two reasons: to sustain ever-rising competition and to sharpen the knowledge.</p>\r\n\r\n<p>To save your time and provide a concentrated piece of information about web development trends in 2019, we’ve analyzed market demands in different fields of the IT industry and made up this list based on them.</p>\r\n\r\n<p>If you just want to quickly look through the main points, here’s the list of web development trends for 2019 that we’ve considered:</p>\r\n<ul>\r\n<li>Progressive Web Apps</li>\r\n<li>Accelerated Mobile Pages</li>\r\n<li>Responsive websites</li>\r\n<li>Voice search optimization</li>\r\n<li>API-first development</li>\r\n<li>Push notifications</li>\r\n<li>AI-powered chatbots</li>\r\n<li>Motion UI</li>', 'Web development trends change to a greater or lesser extent every single year. For decision-makers', 'web-development-trends-2019.jpg', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 2),
(82, 'API-First Development', '<p>Current trends in website development suggest that web solutions have to be well-prepared for connectivity with other applications. It&rsquo;s no surprise considering the rise of mobiles, wearables, and other devices that should integrate with one another.\r\n    That&rsquo;s where the tendency for API-first development approach comes from.</p>\r\n<p>What&rsquo;s wrong with traditional approach? When a company&rsquo;s main focus is to build a web or mobile solution they usually don&rsquo;t pay much attention to API development. At best, it comes as a side project that might not be properly designed\r\n    and tested.</p>\r\n<p>Another problem of the traditional approach is a time-consuming API design process which increases development expenses and service market entry time.</p>\r\n<p>The traditional API development cycle looks as follows:</p>\r\n<ol>\r\n    <li>R&amp;D team creates a design.</li>\r\n    <li>Back-end developers work on a prototype (while the rest of the team like QA engineers and front-end developers are waiting).</li>\r\n    <li>As soon as the prototype is ready QA and front-end developers get access to it.</li>\r\n    <li>In case of a bug, new feature, or any improvement this cycle will be repeated all over again.</li>\r\n</ol>', 'Current trends in website development suggest that web solutions have to be well-prepared for', 'rest-api.png', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 1),
(83, 'Web Development Trends in 2019', '<p>Web development trends change to a greater or lesser extent every single year. For decision-makers, it’s vital to be familiar with them for at least two reasons: to sustain ever-rising competition and to sharpen the knowledge.</p>\r\n\r\n<p>To save your time and provide a concentrated piece of information about web development trends in 2019, we’ve analyzed market demands in different fields of the IT industry and made up this list based on them.</p>\r\n\r\n<p>If you just want to quickly look through the main points, here’s the list of web development trends for 2019 that we’ve considered:</p>\r\n<ul>\r\n<li>Progressive Web Apps</li>\r\n<li>Accelerated Mobile Pages</li>\r\n<li>Responsive websites</li>\r\n<li>Voice search optimization</li>\r\n<li>API-first development</li>\r\n<li>Push notifications</li>\r\n<li>AI-powered chatbots</li>\r\n<li>Motion UI</li>', 'Web development trends change to a greater or lesser extent every single year. For decision-makers', 'web-development-trends-2019.jpg', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 1),
(84, 'API-First Development', '<p>Current trends in website development suggest that web solutions have to be well-prepared for connectivity with other applications. It&rsquo;s no surprise considering the rise of mobiles, wearables, and other devices that should integrate with one another.\r\n    That&rsquo;s where the tendency for API-first development approach comes from.</p>\r\n<p>What&rsquo;s wrong with traditional approach? When a company&rsquo;s main focus is to build a web or mobile solution they usually don&rsquo;t pay much attention to API development. At best, it comes as a side project that might not be properly designed\r\n    and tested.</p>\r\n<p>Another problem of the traditional approach is a time-consuming API design process which increases development expenses and service market entry time.</p>\r\n<p>The traditional API development cycle looks as follows:</p>\r\n<ol>\r\n    <li>R&amp;D team creates a design.</li>\r\n    <li>Back-end developers work on a prototype (while the rest of the team like QA engineers and front-end developers are waiting).</li>\r\n    <li>As soon as the prototype is ready QA and front-end developers get access to it.</li>\r\n    <li>In case of a bug, new feature, or any improvement this cycle will be repeated all over again.</li>\r\n</ol>', 'Current trends in website development suggest that web solutions have to be well-prepared for', 'rest-api.png', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 2),
(85, 'Web Development Trends in 2019', '<p>Web development trends change to a greater or lesser extent every single year. For decision-makers, it’s vital to be familiar with them for at least two reasons: to sustain ever-rising competition and to sharpen the knowledge.</p>\r\n\r\n<p>To save your time and provide a concentrated piece of information about web development trends in 2019, we’ve analyzed market demands in different fields of the IT industry and made up this list based on them.</p>\r\n\r\n<p>If you just want to quickly look through the main points, here’s the list of web development trends for 2019 that we’ve considered:</p>\r\n<ul>\r\n<li>Progressive Web Apps</li>\r\n<li>Accelerated Mobile Pages</li>\r\n<li>Responsive websites</li>\r\n<li>Voice search optimization</li>\r\n<li>API-first development</li>\r\n<li>Push notifications</li>\r\n<li>AI-powered chatbots</li>\r\n<li>Motion UI</li>', 'Web development trends change to a greater or lesser extent every single year. For decision-makers', 'web-development-trends-2019.jpg', '2019-06-28 15:54:15', '2019-06-28 15:54:15', 2),
(86, 'API-First Development', '<p>Current trends in website development suggest that web solutions have to be well-prepared for connectivity with other applications. It’s no surprise considering the rise of mobiles, wearables, and other devices that should integrate with one another.\r\n    That’s where the tendency for API-first development approach comes from.<p><br></p><p>What’s wrong with traditional approach? When a company’s main focus is to build a web or mobile solution they usually don’t pay much attention to API development. At best, it comes as a side project that might not be properly designed\r\n    and tested.</p><p>Another problem of the traditional approach is a time-consuming API design process which increases development expenses and service market entry time.</p><p>The traditional API development cycle looks as follows:</p><ol>\r\n    <li>R&amp;D team creates a design.</li>\r\n    <li>Back-end developers work on a prototype (while the rest of the team like QA engineers and front-end developers are waiting).</li>\r\n    <li>As soon as the prototype is ready QA and front-end developers get access to it.</li>\r\n    <li>In case of a bug, new feature, or any improvement this cycle will be repeated all over again.</li>\r\n</ol><p></p></p>\n', 'Current trends in website development suggest that web solutions have to be well-prepared for', 'rest-api.png', '2019-06-28 15:54:15', '2019-07-08 18:17:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', '$2y$10$DT6FkHGzwWRQsA2Eq6.jtelc4aOY9GUbxWdCFzA2qFn6pR5928YiG', '2019-07-04 22:00:00', '2019-07-04 22:00:00'),
(2, 'Jane Roe', 'janeroe@gmail.com', '$2y$10$DT6FkHGzwWRQsA2Eq6.jtelc4aOY9GUbxWdCFzA2qFn6pR5928YiG', '2019-07-04 22:00:00', '2019-07-04 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
