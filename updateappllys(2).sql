-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 10:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `updateappllys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin_photos` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin_photos`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shahin Reza', 'admin@gmail.com', '2022-06-07 01:00:33', '$2y$10$JDrlzQW9LcPkV.tbW9QBmeBdY1RtPAkmFcqhUWU/loQgymCOrz45O', '2022071916371190ac3dcb8444123fe4a38caf56ccb3.jpg', 0, '2022-06-07 01:00:34', '2022-07-19 10:37:41'),
(2, 'Admin', 'ward.cecil@example.net', '2022-06-07 01:00:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, '2022-06-07 01:00:34', '2022-06-07 01:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_photo` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_photo`, `blog_description`, `status`, `created_at`, `updated_at`, `views`) VALUES
(9, 'Marketing policy meeting over', 'upload/blog/1747310021443071.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, '2022-10-21 09:04:50', '2022-12-05 02:07:30', 3),
(10, 'What is Web design ?', 'upload/blog/1747309970546735.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, '2022-10-21 09:04:01', '2022-12-06 07:23:05', 5),
(11, 'Software Development Process', 'upload/blog/1747228046917458.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, '2022-10-20 11:21:53', '2022-12-05 02:05:34', 5),
(13, 'About Technoval Studio', 'upload/blog/1747310162240000.jpg', '<p>The studio of any artist, especially from the 15th to the 19th centuries, characterized all the assistants, thus the designation of paintings as &quot;from the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Workshop\" title=\"Workshop\">workshop</a>&nbsp;of...&quot; or &quot;studio of...&quot; An art studio is sometimes called an&nbsp;<strong>atelier</strong>, especially in earlier eras. In contemporary, English language use, &quot;atelier&quot; can also refer to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Atelier_Method\" title=\"Atelier Method\">Atelier Method</a>, a training method for artists that usually takes place in a professional artist&#39;s studio.</p>\r\n\r\n<p>The above-mentioned &quot;method&quot; calls upon that zeal for study to play a significant role in the production which occurs in a studio space. A studio is more or less artful to the degree that the artist who occupies it is committed to the continuing education in his or her formal discipline. Academic curricula categorize studio classes in order to prepare students for the rigors of building sets of skills which require a continuity of practice in order to achieve growth and mastery of their artistic expression. A versatile and creative mind will embrace the opportunity of such practice to innovate and experiment, which develops uniquely individual qualities of each artist&#39;s expression. Thus the method raises and maintains an art studio space above the level of a mere production facility or workshop.</p>\r\n\r\n<p>Safety is or may be a concern in studios, with some painting materials required to be handled, stored, or used properly to prevent poisoning, chemical burns, or fire.<sup><a href=\"https://en.wikipedia.org/wiki/Studio#cite_note-1\">[1]</a></sup></p>', 1, '2022-10-21 09:07:04', '2022-10-23 00:26:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(16, 'SERVICES', 'services', NULL, '2022-12-27 00:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `childcategory_name` varchar(255) NOT NULL,
  `childcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `category_id`, `subcategory_id`, `childcategory_name`, `childcategory_slug`, `created_at`, `updated_at`) VALUES
(21, 12, 30, 'Search Engine Optimization (SEO)', 'search-engine-optimization-(seo)', NULL, NULL),
(22, 12, 30, 'Social Media Marketing', 'social-media-marketing', NULL, NULL),
(23, 12, 30, 'Pay Per Click (PPC)', 'pay-per-click-(ppc)', NULL, NULL),
(24, 12, 30, 'Email Marketing', 'email-marketing', NULL, NULL),
(25, 12, 30, 'Media buying', 'media-buying', NULL, NULL),
(26, 12, 30, 'Affiliate Marketing', 'affiliate-marketing', NULL, NULL),
(27, 12, 29, 'Desktop Application', 'desktop-application', NULL, NULL),
(28, 12, 29, 'Android & iOS App Development', 'android-&-ios-app-development', NULL, NULL),
(29, 12, 29, 'Enterprise  Software Solution', 'enterprise--software-solution', NULL, NULL),
(30, 12, 29, 'Custom Software Solution', 'custom-software-solution', NULL, NULL),
(31, 12, 28, 'E-commerce Solution', 'e-commerce-solution', NULL, NULL),
(32, 12, 28, 'Company profile Website', 'company-profile-website', NULL, NULL),
(33, 12, 28, 'School, College, University Website', 'school,-college,-university-website', NULL, NULL),
(34, 12, 28, 'Booking Website', 'booking-website', NULL, NULL),
(35, 12, 27, 'Static post design ,Banner design', 'static-post-design-,banner-design', NULL, NULL),
(36, 12, 27, 'Content writing/copywriting', 'content-writing/copywriting', NULL, NULL),
(37, 12, 27, 'Interview video/Documentary  Video', 'interview-video/documentary--video', NULL, NULL),
(38, 12, 27, 'Corporate AV', 'corporate-av', NULL, NULL),
(39, 12, 27, 'Professional video shoot and studio rent', 'professional-video-shoot-and-studio-rent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_title` varchar(255) NOT NULL,
  `client_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_title`, `client_logo`, `created_at`, `updated_at`) VALUES
(26, 'Desh Hospital', 'upload/client/1753368014656216.jpg', '2022-12-27 05:54:03', NULL),
(27, 'Holystar Group', 'upload/client/1753368061091144.png', '2022-12-27 05:54:47', NULL),
(28, 'Bdkoo', 'upload/client/1753368085663209.jpg', '2022-12-27 05:55:10', NULL),
(29, 'Haima Bala Girl\'s High School', 'upload/client/1753368120872324.png', '2022-12-27 05:55:44', NULL),
(30, 'Nalka Model High School', 'upload/client/1753368147052456.png', '2022-12-27 05:56:09', NULL),
(31, 'Salanga Degree College', 'upload/client/1753368171139849.png', '2022-12-27 05:56:32', NULL),
(32, 'Gov\'t Akbar Ali College', 'upload/client/1753368196177263.png', '2022-12-27 05:56:56', NULL),
(33, 'District Administration Rangpur', 'upload/client/1753368231213026.png', '2022-12-27 05:57:29', NULL),
(34, 'District Administration Sirajganj', 'upload/client/1753368253632232.png', '2022-12-27 05:57:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email_address`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '356436', 'domain verify', 'rffj', NULL, NULL),
(2, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'dfcjfgj', NULL, NULL),
(3, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '01834186970', 'Software', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(4, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '458', 'er', 'ey', NULL, NULL),
(5, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '466', 'domain verify', 'ey', NULL, NULL),
(6, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '466', 'domain verify', 'ey', NULL, NULL),
(7, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'gy', 'fhtfgj', NULL, NULL),
(8, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'gy', 'fhtfgj', NULL, NULL),
(9, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '01778882006', 'a', 'sf', NULL, NULL),
(10, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '01778882006', 'a', 'sf', NULL, NULL),
(11, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'fgt', NULL, NULL),
(12, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'fgt', NULL, NULL),
(13, 'Abir Ahmed', 'shahinsumon2021@gmail.com', '4587569690090', 'domain verify', 'zdgdxg', NULL, NULL),
(14, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '47458897', 'domain verify', 'xdfjg', NULL, NULL),
(15, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '2366', 'Software', 'dfhfj', NULL, NULL),
(16, 'test', 'test1@gmail.com', '4586969', 'domain verify', 'dfhdfj', NULL, NULL),
(17, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '366', '37y45', 'dsgdd', NULL, NULL),
(18, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '366', '37y45', 'dsgdd', NULL, NULL),
(19, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '4758', 'dshfd', 'dfhfdj', NULL, NULL),
(20, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '4367', 'dhh', 'sdxjfj', NULL, NULL),
(21, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '4367', 'dhh', 'sdxjfj', NULL, NULL),
(22, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '548569', 'ertr', 'dfjfgj', NULL, NULL),
(23, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '2353', 'saf', 'df', NULL, NULL),
(24, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '2353', 'saf', 'df', NULL, NULL),
(25, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '3543', 'domain verify', 'rgdf', NULL, NULL),
(26, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '3543', 'domain verify', 'rgdf', NULL, NULL),
(27, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(28, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(29, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(30, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(31, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(32, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(33, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(34, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(35, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(36, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(37, 'test2', 'matinagrofarm@gmail.com', '346457', 'gy', 'dfhfj', NULL, NULL),
(38, 'test2', 'matinagrofarm@gmail.com', '346457', 'gy', 'dfhfj', NULL, NULL),
(39, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '+8801834186970', 'Software', 'front', NULL, NULL),
(40, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '755', 'domain verify', 'ghj', NULL, NULL),
(41, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '+8801834186970', 'er', 'gfhvnvg  jiil', NULL, NULL),
(42, 'Mahbub', 'mahbub@gmail.com', '08789672', 'digital', 'need', NULL, NULL),
(43, 'Shahin Ahmed', 'admin@gmail.com', '+8801834186970', 'domain verify', 'fgdse', NULL, NULL),
(44, 'Hasan Ali', 'hasanjlij@gmail.com', '5343465', 'Software', 'kjgj', NULL, NULL),
(45, 'Shahin Ahmed', 'admin@gmail.com', '54644654', 'domain verify', 'jg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coustomers`
--

CREATE TABLE `coustomers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_logins`
--

CREATE TABLE `customer_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_logins`
--

INSERT INTO `customer_logins` (`id`, `name`, `mobile`, `email`, `location`, `institute_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Zorita Santos', 1, 'betikomeki@mailinator.com', 'Quas et non voluptat', 'fizy@mailinator.com', '$2y$10$BUA.C67GPVnHH.W8mACjWuPZLuMieqwW/Fx/MIU5254YxetHTL6NG', '2023-05-20 08:48:57', NULL),
(2, 'tori', 1, 'juwini@mailinator.com', 'Aut expedita consequ', 'zymywoso', '$2y$10$4Z3jNb8FoLY8j2TGINfcM.tTEjRGmJoSB0tCZvg.hjBFiSW6X.XxO', '2023-05-21 01:22:56', NULL),
(3, 'Murphy Little', 1, 'zekukahy@mailinator.com', 'Sed laborum Sequi e', 'lypumaheke@mailinator.com', '$2y$10$yooQXiluWIzyF6IbZJTmD.EK8e6xGjV9gvcm04.JMj29pKiTr5y9e', '2023-05-21 01:24:11', NULL),
(4, 'Hermione Hopkins', 1, 'duqe@mailinator.com', 'Eum voluptatem sapie', 'mailinatorcom', '$2y$10$SYgIDFc3JjhN.mdqoF6x..akA9Lhu9o1lSrwCMotzhpfFoQL3rkwK', '2023-05-24 08:56:34', NULL),
(5, 'Lillian Bridges', 1, 'gujexub@mailinator.com', 'Cupiditate qui sed d', 'adfg dfga asdfg', '$2y$10$pTDMatgrvDodDTcryOqgmeUZZR25ak28ob5p68OktLSAdq3qHYcGq', '2023-05-26 12:00:24', NULL),
(6, 'Kylie Ross', 1, 'jutudaraja@mailinator.com', 'Molestiae non quod a', 'gydiluvu@mailinator.com', '$2y$10$HKPsRKig2QSSz./yhOSVie7cVgLWkHG.ZEhhAxwFhCkyrs0B9GnoS', '2023-05-27 11:07:00', NULL),
(7, 'Montana Hinton', 1, 'mumyke@mailinator.com', 'Nulla ut iusto digni', 'kenu@mailinator.com', '$2y$10$.wnq7DVIPsQuNqWupboxtuasECx4U3iAJrwEl27/QxPcLs5ij9TBi', '2023-05-27 13:41:52', NULL),
(8, 'Chandler Rosales', 1, 'firibytod@mailinator.com', 'Aut quos veniam qua', 'nycitaqiz@mailinator.com', '$2y$10$0q/0CDdZt4smgnUMN.dOPuvp4XeCsEIFJCyu7N7Sqk9SQ9QIyfZoS', '2023-05-27 14:09:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favicons`
--

CREATE TABLE `favicons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fav` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favicons`
--

INSERT INTO `favicons` (`id`, `fav`, `created_at`, `updated_at`) VALUES
(1, 'upload/favicon/1753343404407452.png', NULL, '2022-12-26 23:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery`, `status`, `created_at`, `updated_at`) VALUES
(16, 'upload/portfolio/1745938174496453.jpg', 1, '2022-09-14 04:20:46', '2022-10-06 05:39:55'),
(19, 'upload/portfolio/1745938162212016.jpg', 1, '2022-09-14 04:22:23', '2022-10-06 05:39:43'),
(20, 'upload/portfolio/1745938148291506.jpg', 1, '2022-09-14 04:22:39', '2022-10-06 05:39:30'),
(28, 'upload/services/gallery/1745938184009403.jpg', 1, '2022-10-06 05:40:04', NULL),
(29, 'upload/services/gallery/1745938191337797.jpg', 1, '2022-10-06 05:40:11', NULL),
(30, 'upload/services/gallery/1745938202436207.jpg', 1, '2022-10-06 05:40:22', NULL),
(31, 'upload/services/gallery/1745938214345912.jpg', 1, '2022-10-06 05:40:33', NULL),
(32, 'upload/services/gallery/1745938222509093.jpg', 1, '2022-10-06 05:40:41', NULL),
(33, 'upload/services/gallery/1745938230340379.jpg', 1, '2022-10-06 05:40:48', NULL),
(34, 'upload/services/gallery/1745938237613220.jpg', 1, '2022-10-06 05:40:55', NULL),
(35, 'upload/services/gallery/1745938246466759.jpg', 1, '2022-10-06 05:41:04', NULL),
(36, 'upload/services/gallery/1745938482385071.jpg', 1, '2022-10-06 05:44:50', NULL),
(37, 'upload/services/gallery/1745938502424101.jpg', 1, '2022-10-06 05:45:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ind_title` varchar(255) NOT NULL,
  `ind_photo` varchar(255) NOT NULL,
  `ind_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `ind_title`, `ind_photo`, `ind_description`, `created_at`, `updated_at`) VALUES
(2, 'Travels', 'upload/industries/1747196012221211.png', 'This is travels .', '2022-10-20 02:52:42', '2022-10-20 02:52:42'),
(3, 'Technologies', 'upload/industries/1747195463874482.png', 'This is technologies', '2022-10-20 02:43:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_05_193812_create_admins_table', 2),
(6, '2022_08_08_050401_create_categories_table', 3),
(7, '2022_08_09_064341_create_sub_categories_table', 4),
(8, '2022_08_09_092147_create_subcategories_table', 5),
(9, '2022_08_10_052744_create_contents_table', 6),
(10, '2022_09_06_061522_create_services_table', 7),
(11, '2022_09_13_130326_create_galleries_table', 8),
(12, '2022_09_14_075608_create_portfolios_table', 9),
(13, '2022_09_14_081818_create_clients_table', 10),
(14, '2022_09_19_162005_create_childcategories_table', 11),
(15, '2022_10_02_073816_create_contacts_table', 12),
(16, '2022_10_04_052157_create_contactuses_table', 13),
(17, '2022_10_04_065644_create_policies_table', 13),
(18, '2022_10_05_171040_create_blogs_table', 13),
(19, '2022_10_06_040643_create_privacies_table', 14),
(20, '2022_10_06_050440_create_terms_table', 15),
(21, '2022_10_20_071552_create_industries_table', 16),
(22, '2022_10_20_072714_create_industries_table', 17),
(23, '2022_10_20_073626_create_industries_table', 18),
(24, '2022_10_23_054943_add_votes_to_services', 19),
(25, '2022_10_23_062145_add_votes_to_blogs', 20),
(26, '2022_12_05_095813_create_settings_table', 21),
(27, '2022_12_06_061220_create_favicons_table', 22),
(28, '2022_12_27_043045_create_seos_table', 23),
(29, '2023_03_27_132806_create_customer_logins_table', 24),
(30, '2023_05_20_143457_create_coustomers_table', 25),
(31, '2023_05_20_170855_create_orders_table', 25),
(32, '2023_05_20_172608_create_products_table', 26),
(33, '2023_05_27_191425_create_trantion_numbers_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `customer_id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Hermione Hopkins', 'duqe@mailinator.com', '1', 'hellow', NULL, NULL),
(2, 1, 4, 'Hermione Hopkins', 'duqe@mailinator.com', '1', 'hello', NULL, NULL),
(3, 1, 4, 'Hermione Hopkins', 'duqe@mailinator.com', '1', 'hello', NULL, NULL),
(4, 1, 4, 'Hermione Hopkins', 'duqe@mailinator.com', '1', 'hello', NULL, NULL),
(5, 1, 4, 'Hermione Hopkins', 'duqe@mailinator.com', '1', 'xgcfh', NULL, NULL),
(6, 1, 5, 'Lillian Bridges', 'gujexub@mailinator.com', '1', 'xdf sdfg', NULL, NULL),
(7, 1, 6, 'Kylie Ross', 'jutudaraja@mailinator.com', '1', 'asdf', NULL, NULL),
(8, 1, 7, 'Montana Hinton', 'mumyke@mailinator.com', '1', 'ssss adf', NULL, NULL),
(9, 1, 7, 'Montana Hinton', 'mumyke@mailinator.com', '1', 'ert', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_title` varchar(255) NOT NULL,
  `port_subtitle` varchar(255) NOT NULL,
  `port_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `port_title`, `port_subtitle`, `port_image`, `status`, `created_at`, `updated_at`) VALUES
(17, 'E-commerce', 'PHP, Laravel,VueJS', 'upload/portfolio/1747738368843292.png', 1, '2022-10-26 12:33:15', '2022-10-26 12:33:15'),
(18, 'School Automation', 'PHP, Laravel,VueJS', 'upload/portfolio/1747735410892966.png', 1, '2022-10-26 11:46:13', '2022-10-26 11:46:13'),
(19, 'Shop Management', 'PHP, Laravel,', 'upload/portfolio/1747735428109920.png', 1, '2022-10-26 11:46:29', '2022-10-26 11:46:29'),
(20, 'Hospital Management', 'PHP, Laravel,', 'upload/portfolio/1745941041581215.jpg', 1, '2022-10-06 06:25:29', NULL),
(21, 'Accounting Software', 'PHP, Laravel,', 'upload/portfolio/1747737782148932.png', 1, '2022-10-26 12:23:55', NULL),
(22, 'Point of Sales', 'PHP, Laravel,', 'upload/portfolio/1747737857152109.png', 1, '2022-10-26 12:25:06', NULL),
(23, 'HR-admin Management', 'PHP, Laravel,', 'upload/portfolio/1747738293555850.png', 1, '2022-10-26 12:32:02', NULL),
(24, 'Dealership Management', 'PHP, Laravel, VueJS', 'upload/portfolio/1747738437475080.png', 1, '2022-10-26 12:34:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p>hi</p>', '2022-10-05 22:55:30', '2022-10-05 22:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `purchase` int(11) DEFAULT NULL,
  `demo_link` varchar(255) DEFAULT NULL,
  `create_date` date NOT NULL,
  `Update_date` date DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `long_desp` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `purchase`, `demo_link`, `create_date`, `Update_date`, `technology`, `tag`, `title`, `thumbnail`, `short`, `long_desp`, `created_at`, `updated_at`) VALUES
(1, 'Nero Bennett', 'upload/product/image/1766436841980500.png', 84, 89, 'Necessitatibus eum q', '2021-05-28', '1979-09-27', 'Lorem,Ipsum,Amet,Eum aut voluptatibus', 'Lorem,Ipsum,Amet,Dolor non qui blandi', 'Qui unde eu voluptat', 'upload/product/thumbnail/1766436842131697.png', 'Suscipit molestiae m', '<p>swdfasd</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_author` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `google_analytics` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'software company', 'appllys', 'software, mobile app, web app, laravel, php, vue, flutter,', 'Top software development farm. We develop innovative and creative products and services that provide total mobile & web app solutions.', 'gfjyhk', NULL, '2022-12-26 23:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `content_slide_title` varchar(255) NOT NULL,
  `breadcrumb` varchar(255) NOT NULL,
  `content_title` varchar(255) NOT NULL,
  `content_descrip` text NOT NULL,
  `long_descrip` text NOT NULL,
  `thamble` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `content_slide_title`, `breadcrumb`, `content_title`, `content_descrip`, `long_descrip`, `thamble`, `status`, `created_at`, `updated_at`, `views`) VALUES
(37, 12, 'Skin Care services', 'upload/services/1750733142516252.png', 'Skin Care services', 'Skin Care services', '<p>Skin Care services</p>', 'upload/services/1751356658978072.PNG', 1, '2022-11-28 03:53:53', '2022-12-05 21:54:32', 4),
(38, 16, 'Hair Care', 'upload/services/1750744295381929.png', 'Hair Care', 'Hair Care', '<p>Hair Care</p>', 'upload/services/1751356650160529.PNG', 1, '2022-11-28 06:51:09', '2022-12-14 04:51:34', 4),
(39, 12, 'Skin Treatment', 'upload/services/1750745198014562.png', 'Skin Treatment', 'Skin Treatment', '<p>Skin Treatment</p>', 'upload/services/1751356617276531.PNG', 1, '2022-11-28 07:05:30', '2022-12-05 01:21:02', 5),
(40, 16, 'Belly Fat Reduce', 'upload/services/1751355617297108.jpg', 'Belly Fat Reduce', 'fghg', '<p>gfjhg</p>', 'upload/services/1751356591585456.PNG', 1, '2022-12-05 00:47:51', '2022-12-05 21:46:46', 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `instragram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone_one`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedin`, `youtube`, `instragram`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1753183228831966.png', '+8801982181819', 'contact@appllys.com', 'software company', '158 Green Road 1205.', 'https://www.facebook.com/appllystechnologies', 'https://www.facebook.com/appllystechnologies', 'https://www.linkedin.com/company/80090275', 'https://www.youtube.com/@appllystechnologies775', 'https://github.com/shahin2041', NULL, '2022-12-25 10:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(27, 12, 'Creative Development', 'creative-development', '2022-10-02 00:57:10', NULL),
(28, 12, 'Web Design and Development', 'web-design-and-development', '2022-10-02 00:57:29', NULL),
(29, 12, 'Software Development', 'software-development', '2022-10-02 00:57:46', NULL),
(30, 12, 'Digital Marketing', 'digital-marketing', '2022-10-02 00:58:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_title` varchar(255) NOT NULL,
  `t_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_title`, `t_description`, `created_at`, `updated_at`) VALUES
(1, 'terms title', '<p>ddfgjf</p>', '2022-10-05 23:27:16', '2022-10-05 23:27:16'),
(2, 'Test 2', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-10-05 23:29:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trantion_numbers`
--

CREATE TABLE `trantion_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trantion_number` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trantion_numbers`
--

INSERT INTO `trantion_numbers` (`id`, `trantion_number`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'upload/trantion/1767077941000352.PNG', 7, NULL, NULL),
(2, 'upload/trantion/1767078251854744.PNG', 7, NULL, NULL),
(3, 'upload/trantion/1767078279859345.PNG', 7, NULL, NULL),
(4, 'upload/trantion/1767078330950957.PNG', 7, NULL, NULL),
(5, 'upload/trantion/1767078422718747.PNG', 7, NULL, NULL),
(6, 'upload/trantion/1767078459839982.PNG', 7, NULL, NULL),
(7, 'upload/trantion/1767078511023179.PNG', 7, NULL, NULL),
(8, 'upload/trantion/1767078567053766.PNG', 7, NULL, NULL),
(9, 'upload/trantion/1767078649967501.PNG', 7, NULL, NULL),
(10, 'upload/trantion/1767078726016757.PNG', 7, NULL, NULL),
(11, 'upload/trantion/1767078789003726.PNG', 7, NULL, NULL),
(12, 'upload/trantion/1767079080694896.png', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shahin reza', 'user@gmail.com', NULL, '$2y$10$Gd7l5q5MNH.98RYsxV5XX.YKCnETn4AeD3//nrnbXvMw6t9U6vKZe', NULL, '2022-06-05 13:32:41', '2022-06-05 13:32:41'),
(2, 'Sopoline Bradley', 'micaholyfo@mailinator.com', NULL, '$2y$10$wHoqONpM54ihGIMnrswvWuoubs2BCxKFLmIQxhc/MjhZ5zy7ivAJy', NULL, '2023-05-19 12:42:13', '2023-05-19 12:42:13'),
(3, 'Thor Lucas', 'piwigum@mailinator.com', NULL, '$2y$10$i0SSubdlxu4rvtsAB8XFbeawNrltf7hwzFkIit2.09Zb3kBn7DJ7i', NULL, '2023-05-19 12:46:50', '2023-05-19 12:46:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coustomers`
--
ALTER TABLE `coustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_logins`
--
ALTER TABLE `customer_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favicons`
--
ALTER TABLE `favicons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trantion_numbers`
--
ALTER TABLE `trantion_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coustomers`
--
ALTER TABLE `coustomers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_logins`
--
ALTER TABLE `customer_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favicons`
--
ALTER TABLE `favicons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trantion_numbers`
--
ALTER TABLE `trantion_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
