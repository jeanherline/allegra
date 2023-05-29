-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 04:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allegra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`id`, `username`, `password`) VALUES
(1, 'evilynsiao', '$2y$10$OxQvEiu7Vzg8rUQJvpXEauzYWmlQrNlEuN7wdFMrO./O9bbkezxkG');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` enum('Active','Archived') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'All', 'Active', '2023-04-29 07:46:09', '2023-05-01 04:25:04'),
(4, 'Promos', 'Active', '2023-04-29 12:12:46', '2023-05-19 13:37:23'),
(5, 'Espresso', 'Active', '2023-04-29 12:12:46', '2023-05-01 04:24:50'),
(7, 'Frappe', 'Active', '2023-04-29 12:13:04', '2023-05-01 04:40:34'),
(8, 'Coolers', 'Active', '2023-04-29 12:13:13', '2023-04-30 19:28:48'),
(9, 'Pasta & Snacks', 'Active', '2023-04-29 12:13:13', '2023-05-24 12:16:00'),
(11, 'Pastries', 'Active', '2023-04-29 12:45:28', '2023-05-01 04:35:01'),
(12, 'Waffles', 'Active', '2023-04-29 12:59:53', '2023-05-01 04:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_year` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `logo_orig` varchar(255) NOT NULL,
  `logo_white` varchar(255) NOT NULL,
  `logo_icon` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `store_hours` varchar(255) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `seat_capacity` int(11) NOT NULL,
  `color_theme` varchar(255) NOT NULL,
  `fixed_header` varchar(255) NOT NULL,
  `google_map` varchar(512) NOT NULL,
  `address_link` varchar(255) NOT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_year`, `company_name`, `logo_orig`, `logo_white`, `logo_icon`, `address`, `phone`, `email`, `store_hours`, `opening_time`, `closing_time`, `seat_capacity`, `color_theme`, `fixed_header`, `google_map`, `address_link`, `facebook_link`, `instagram_link`, `twitter_link`, `created_at`, `updated_at`) VALUES
(1, 2022, 'Cafe Allegra', 'logo-brown.png', 'logo.png', 'logo-icon.png', '781 B.S Aquino Ave. Brgy. Bagong Nayon, Baliuag, Bulacan (In front of New Frontier Subdivision)', '0969 622 9438', 'cafeallegrabaliuag@gmail.com', 'Mon-Fri: 10AM-8PM | Sat-Sun: 11AM-8PM', '10:00:00', '20:00:00', 11, '#1d120c', 'fixed_header.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d963.6464479118739!2d120.89822424377084!3d14.960152777501325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339701f2dfa15023%3A0x2ae26381c4a9af6b!2sCafe%20Allegra!5e0!3m2!1sen!2sph!4v1681242204750!5m2!1sen!2sph', 'https://goo.gl/maps/8iHvRc41YPABhyw37', 'https://www.facebook.com/cafeallegrabaliuag', 'https://www.instagram.com/cafeallegra.ph/', '', '2023-04-29 08:20:43', '2023-05-26 14:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `first_name`, `last_name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Jeanherline', 'Santiago', 'jeanherlinesantiago0329@gmail.com', 'N/A', 'Can we invite you as one of our event concessionaire? ', '2023-04-28 15:45:38'),
(2, 'Irish', 'Cruz', 'wetak98532@mevori.com', '09357836271', 'I really like the atmosphere, good coffee, and nice interior. Can I set up my nephew\'s birthday party here soon?', '2023-05-23 13:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_partners`
--

CREATE TABLE `delivery_partners` (
  `partner_id` int(11) NOT NULL,
  `partner_photo` varchar(255) NOT NULL,
  `partner_name` varchar(50) NOT NULL,
  `partner_link` varchar(255) NOT NULL,
  `status` enum('Active','Archived') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_partners`
--

INSERT INTO `delivery_partners` (`partner_id`, `partner_photo`, `partner_name`, `partner_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'grabfood_1685080643.png', 'GrabFood', 'https://food.grab.com/ph/en/restaurant/cafe-allegra-baliuag-delivery/2-C3VFCPTUAGJTSA', 'Active', '2023-04-29 08:29:52', '2023-05-26 05:57:23'),
(2, 'ordermo.png', 'Ordermo', 'https://app.ordermo.ph/Cafe-Allegra', 'Active', '2023-04-29 08:29:52', '2023-05-26 05:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `edit_contact`
--

CREATE TABLE `edit_contact` (
  `edit_contact_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edit_contact`
--

INSERT INTO `edit_contact` (`edit_contact_id`, `heading`, `subheading`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'Let us know how we can serve you.', '2023-04-29 10:03:41', '2023-05-26 05:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `edit_dining`
--

CREATE TABLE `edit_dining` (
  `edit_dining_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo_1` varchar(255) NOT NULL,
  `photo_2` varchar(255) NOT NULL,
  `photo_3` varchar(255) NOT NULL,
  `form_photo_1` varchar(255) NOT NULL,
  `form_photo_2` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edit_dining`
--

INSERT INTO `edit_dining` (`edit_dining_id`, `heading`, `subheading`, `description`, `photo_1`, `photo_2`, `photo_3`, `form_photo_1`, `form_photo_2`, `created_at`, `updated_at`) VALUES
(1, 'Private Dining', 'Have An Upcoming Special Event?', '3 hours for only 3,000 PHP (Consumables)', 'private-1_1682872766.jpg', 'private-2.jpg', 'private-3.jpg', 'service-1.jpg', 'service-2.jpg', '2023-04-29 09:33:41', '2023-05-26 13:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `edit_feedback`
--

CREATE TABLE `edit_feedback` (
  `edit_feedback_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edit_feedback`
--

INSERT INTO `edit_feedback` (`edit_feedback_id`, `heading`, `subheading`, `background_image`, `created_at`, `updated_at`) VALUES
(1, 'Feedback & Suggestion', 'We Value Your Feedback and Suggestions', 'feedback.jpg', '2023-04-29 10:08:27', '2023-05-26 05:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `edit_menu`
--

CREATE TABLE `edit_menu` (
  `edit_menu_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `banner` varchar(512) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edit_menu`
--

INSERT INTO `edit_menu` (`edit_menu_id`, `heading`, `subheading`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Our Menu', 'Experience something new!', 'Store Hours - Mon-Fri: 10AM-8PM | Sat-Sun: 11AM-8PM', '2023-04-29 09:41:14', '2023-05-26 05:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `edit_table`
--

CREATE TABLE `edit_table` (
  `edit_table_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edit_table`
--

INSERT INTO `edit_table` (`edit_table_id`, `heading`, `subheading`, `created_at`, `updated_at`) VALUES
(1, 'Table Reservation', 'Reserve your spot today!', '2023-04-29 09:44:36', '2023-05-26 05:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `first_name`, `last_name`, `email`, `message`, `created_at`) VALUES
(1, 'Suzette Bishop Love', 'Angeles', 'suzettebishoploveangeles@gmail.com', 'Hello, ang sarap po ng food :)', '2023-04-27 15:41:26'),
(2, 'Jeanherline', 'Santiago', 'jeanherlinesantiago0329@gmail.com', 'The waffle tastes so good!', '2023-04-27 15:48:41'),
(3, 'Jyner', 'Lin', 'jynerline@gmail.com', 'Good Service!', '2023-04-27 16:10:07'),
(4, 'Esrom', 'Baluyot', 'ehzxd24@gmail.com', 'Will try ordering on GrabFood next time. Super satisfied with the service. Thank you, Cafe Allegra!', '2023-04-27 16:47:42'),
(5, 'Sam', 'Espino', 'jr.samespino@gmail.com', 'Hello, thank you Cafe Allegra!', '2023-04-28 05:31:34'),
(6, 'Jess', 'Magsayo', 'wetak98532@mevori.com', 'This is a good place to study or chill with friends. The drinks and foods were all tasty and worthwhile.', '2023-05-23 13:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'g-img-1_1683430733.png', 'Private Dining', 'Make your special occasion even more special with a private dining experience at Cafe Allegra!', 'https://www.facebook.com/cafeallegrabaliuag/posts/pfbid0KbN3ztPQbAs3A5L8y9y84F3t9gfGoPU2SJ8F89cwcpvLuC86SEdZK1UYtViUwErfl', '2023-04-29 10:10:55', '2023-05-24 12:14:58'),
(2, 'g-img-2.png', 'Open and Ready to Help You!', 'Calling all entrepreneurs and freelancers! Need a place to work and get creative? We have the perfect spot for you!', 'https://www.facebook.com/photo.php?fbid=165000912981015&set=pb.100084133214934.-2207520000.&type=3', '2023-04-29 10:13:59', '2023-04-29 10:13:59'),
(3, 'g-img-3.jpg', 'Our homemade lasagna', 'Start your week off right with a delicious and satisfying combo of our homemade lasagna and a Spanish latte.', 'https://www.facebook.com/cafeallegrabaliuag/posts/pfbid02f5MqquNQqYVnNbqvHYKAJkm42megf3FZcKTSQGEbwv2H3Cnk7VY4C2SR2nQEvKmUl', '2023-04-29 10:13:59', '2023-04-30 16:43:34'),
(4, 'g-img-4.png', 'Happy Easter everyone! 🐰🌷', 'We hope you\'re all having a lovely day with your loved ones.', 'https://www.facebook.com/cafeallegrabaliuag/posts/pfbid0j7cjRrB9d6jAYqFDr5WLMXX5ZdHeDYRQ2JypR5A7QwaXPe44rFhSDNPMYEGP3DXbl', '2023-04-29 10:13:59', '2023-04-29 10:16:13'),
(5, 'g-img-5.jpg', 'Cozy Ambiance', 'There\'s nothing like enjoying a delicious pasta dish and a freshly brewed cup of coffee at Cafe Allegra. 🥰', 'https://www.facebook.com/cafeallegrabaliuag/posts/pfbid0ZtGYvNTvkddPN5gLx6pQmFLX3Cq6Q6PspNLEC4wgYrwLzYeN7ZukjpUq26sjNPVBl', '2023-04-29 10:13:59', '2023-04-29 10:13:59'),
(6, 'g-img-6.png', 'Visit us today', 'Chic and cozy.<br>A perfect spot to relax!😀💕', 'https://www.facebook.com/cafeallegrabaliuag/posts/pfbid0s1rygF3V4XpTUekLtBmFwL6QK6vq1iiew39boH6pTqGjBn6k5tB99vU7CKS6vvsdl', '2023-04-29 10:13:59', '2023-04-29 10:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `herobanner`
--

CREATE TABLE `herobanner` (
  `herobanner_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `background_image` varchar(512) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `herobanner`
--

INSERT INTO `herobanner` (`herobanner_id`, `heading`, `subheading`, `background_image`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'your cozy cafe', 'where every sip and bite is a delight!', 'home-bg_1685074270_1685109268.jpg', 'Explore our menu options now!', 'menu.php', '2023-04-28 17:10:54', '2023-05-26 13:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_photo` varchar(512) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `availability` varchar(30) NOT NULL DEFAULT 'Available Today',
  `status` enum('Active','Archived') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_photo`, `menu_name`, `description`, `price`, `category`, `availability`, `status`, `created_at`, `updated_at`) VALUES
(1, 'spanish-latte.png', 'Spanish Latte', 'Espresso, steamed milk, and condensed milk.', 'Hot 12oz - ₱65<br>Iced 16oz - ₱75<br>Iced 22oz - ₱85', 5, 'Available Today', 'Active', '2023-04-29 12:21:17', '2023-04-29 16:02:04'),
(2, 'caramel-macchiato.png', 'Caramel Macchiato', 'Velvety espresso, milk, and caramel drizzle.', 'Hot 12oz - ₱115<br>Iced 16oz - ₱125<br>Iced 22oz - ₱145', 5, 'Available Today', 'Active', '2023-04-29 12:21:17', '2023-05-23 14:08:13'),
(3, 'matcha-espresso.png', 'Matcha Espresso', 'Energizing matcha meets bold espresso.', 'Hot 12oz - ₱125<br>Iced 16oz - ₱145<br>Iced 22oz - ₱165', 5, 'Available Today', 'Active', '2023-04-29 12:23:00', '2023-04-29 16:31:26'),
(4, 'matcha-latte.png', 'Matcha Latte', 'Creamy, smooth blend of premium matcha green tea and silky steamed milk.', 'Hot 12oz - ₱125<br>Iced 16oz - ₱145<br>Iced 22oz - ₱165', 5, 'Available Today', 'Active', '2023-04-29 12:23:00', '2023-04-29 16:31:26'),
(5, 'cookies&cream.png', 'Cookies & Cream', 'Frosty blend of cookies, cream, and ice for a delightful, sweet escape.', 'Iced 22oz - ₱165', 7, 'Available Today', 'Active', '2023-04-29 12:26:55', '2023-04-29 16:31:26'),
(6, 'java-chip.png', 'Java Chip', 'Fusion of rich coffee, chocolate chips, and icy indulgence.', 'Iced 22oz - ₱165', 7, 'Available Today', 'Active', '2023-04-29 12:26:55', '2023-04-29 16:31:26'),
(7, 'matcha.png', 'Matcha', 'Refreshing blend of matcha green tea and creamy delight', 'Iced 22oz - ₱175', 7, 'Available Today', 'Active', '2023-04-29 12:28:19', '2023-04-29 16:31:26'),
(8, 'salted-caramel.png', 'Salted Caramel', 'Blend of sweet caramel, a hint of salt, and creamy refreshment.', 'Iced 22oz - ₱165', 7, 'Available Today', 'Active', '2023-04-29 12:28:19', '2023-04-29 16:31:26'),
(9, 'strawberries&cream.png', 'Strawberries & Cream', 'Luscious, icy blend of sweet strawberries and velvety cream.', 'Iced 22oz - ₱165', 7, 'Available Today', 'Active', '2023-04-29 12:29:50', '2023-05-07 03:28:56'),
(10, 'white-chocolate-mocha.png', 'White Chocolate Mocha', 'Frosty medley of smooth white chocolate, bold coffee, and creamy delight.', 'Iced 22oz - ₱165', 7, 'Available Today', 'Active', '2023-04-29 12:29:50', '2023-04-29 16:31:26'),
(11, 'cucumber-lemonade.png', 'Cucumber Lemonade', 'Revitalizing blend of crisp cucumber, tangy lemon, and a hint of sweetness.', 'Iced 22oz - ₱75', 8, 'Available Today', 'Active', '2023-04-29 12:33:30', '2023-04-29 16:31:26'),
(12, 'iced-tea-lemon.png', 'Iced Tea Lemon', 'Fusion of brisk iced tea, zesty lemon, and a touch of sweetness.', 'Iced 22oz - ₱85', 8, 'Available Today', 'Active', '2023-04-29 12:33:30', '2023-04-29 16:31:26'),
(13, 'strawberry-soda.png', 'Strawberry Soda', 'Bubbly concoction of ripe strawberries, sparkling soda, and a hint of sweetness', 'Iced 22oz - ₱85', 8, 'Available Today', 'Active', '2023-04-29 12:34:56', '2023-04-29 16:31:26'),
(14, 'thai-lemon-tea.png', 'Thai Lemon Tea', 'Vibrant fusion of aromatic Thai tea, tangy lemon, and a splash of sweetness.', 'Iced 22oz - ₱85', 8, 'Available Today', 'Active', '2023-04-29 12:34:56', '2023-04-29 16:31:26'),
(15, 'baked-macaroni.png', 'Baked Macaroni', 'Tender pasta, rich, creamy cheese sauce, and a golden, crispy crust.', '₱169', 9, 'Available Today', 'Active', '2023-04-29 12:36:38', '2023-05-19 16:30:54'),
(16, 'beef-lasagna.png', 'Beef Lasagna', 'Layers of savory beef, tender pasta, and creamy cheese, baked to perfection.', '₱169', 9, 'Available Today', 'Active', '2023-04-29 12:36:38', '2023-04-29 16:31:26'),
(17, 'chicken-pesto.png', 'Chicken Pesto', 'Succulent chicken, aromatic basil pesto, and al dente pasta for a flavorful, herb-infused treat.', '₱169', 9, 'Available Today', 'Active', '2023-04-29 12:37:40', '2023-04-29 16:31:26'),
(18, 'classic-carbonara.png', 'Classic Carbonara', 'Creamy, savory blend of al dente pasta, smoky bacon, and rich Parmesan.', '₱169', 9, 'Available Today', 'Active', '2023-04-29 12:37:40', '2023-04-29 16:31:26'),
(19, 'beef-nachos.png', 'Beef Nachos', 'Satisfying medley of crispy tortilla chips, seasoned beef, melted cheese, and zesty toppings.', '₱145', 9, 'Available Today', 'Active', '2023-04-29 12:39:37', '2023-04-29 16:31:26'),
(20, 'beef-tacos.png', 'Beef Tacos', 'Zesty combination of seasoned beef, fresh veggies, and tangy sauce, nestled in a soft or crunchy tortilla.', '₱145', 9, 'Available Today', 'Active', '2023-04-29 12:39:37', '2023-04-29 16:31:26'),
(21, 'cheezy-nachos.png', 'Cheezy Nachos', 'Mouthwatering stack of crunchy tortilla chips, smothered in melted cheese and zesty toppings.', '₱125', 9, 'Available Today', 'Active', '2023-04-29 12:40:53', '2023-05-01 06:06:51'),
(22, 'french-fries.png', 'French Fries', 'Crispy, golden goodness of perfectly seasoned, deep-fried potato sticks.', '₱125', 9, 'Available Today', 'Active', '2023-04-29 12:40:53', '2023-04-29 16:34:46'),
(23, 'nacho-fries.png', 'Nacho Fries', 'Crispy french fries, smothered in melted cheese, and topped with nacho flavors.', '₱145', 9, 'Available Today', 'Active', '2023-04-29 12:41:39', '2023-04-29 16:34:46'),
(24, 'matha-regular.png', 'Matcha Regular (Non-Espresso)', 'Earthy, smooth flavor of classic matcha green tea.', 'Hot 12oz - ₱125<br>Iced 16oz - ₱145<br>Iced 22oz - ₱165', 5, 'Available Today', 'Active', '2023-04-29 13:04:54', '2023-04-29 16:34:46'),
(25, 'strawberry&milk.png', 'Strawberry & Milk (Non-Espresso)', 'Refreshing and sweet blend of ripe, juicy strawberries and creamy, smooth milk.', 'Iced 16oz - ₱125<br>Iced 22oz - ₱145', 5, 'Available Today', 'Active', '2023-04-29 13:04:54', '2023-04-29 16:35:08'),
(26, 'thai-milktea.png', 'Thai Milktea (Non-Espresso)', 'Fragrant, sweet blend of aromatic Thai tea and creamy milk.', 'Hot 12oz - ₱110<br>Iced 16oz - ₱125<br>Iced 22oz - ₱145', 5, 'Available Today', 'Active', '2023-04-29 13:05:32', '2023-04-29 16:34:46'),
(27, 'blueberry-cheesecake.png', 'Blueberry Cheesecake', 'Creamy richness of cheesecake paired with sweet, tangy blueberries.', '₱165', 11, 'Available Today', 'Active', '2023-04-29 13:09:07', '2023-04-29 16:34:46'),
(28, 'chocolate-almond.png', 'Chocolate Almond', 'Combination of rich chocolate and crunchy almonds for a delightful, nutty treat.', '₱50', 11, 'Available Today', 'Active', '2023-04-29 13:09:07', '2023-04-29 16:34:46'),
(29, 'chocolate-walnut.png', 'Chocolate Walnut', 'Fusion of smooth chocolate and earthy walnuts for a scrumptious, nutty dessert.', '₱50', 11, 'Available Today', 'Active', '2023-04-29 13:10:40', '2023-04-29 16:34:46'),
(30, 'double-chocolate-muffin.png', 'Double Chocolate Muffin', 'Indulgent harmony of rich chocolate and moist muffin.', '₱50', 11, 'Available Today', 'Active', '2023-04-29 13:10:40', '2023-04-29 16:34:46'),
(31, 'strawberry-cheesecake.png', 'Strawberry Cheesecake', 'Blissful union of creamy cheesecake and sweet, tangy strawberries.', '₱165', 11, 'Available Today', 'Active', '2023-04-29 13:13:54', '2023-04-29 16:34:46'),
(32, 'banana&choco-hazelnut.png', 'Banana & Choco Hazelnut', 'Sweet bananas and rich chocolate-hazelnut spread.', '₱75', 12, 'Available Today', 'Active', '2023-04-29 13:19:24', '2023-04-29 16:34:46'),
(33, 'butter&maple-syrup.png', 'Butter & Maple Syrup', 'Classic combination of rich, creamy butter and sweet, luscious maple syrup.', '₱70', 12, 'Available Today', 'Active', '2023-04-29 13:19:24', '2023-05-07 07:46:30'),
(34, 'choco-hazelnut.png', 'Choco Hazelnut', 'Creamy, nutty fusion of rich chocolate and decadent hazelnut.', '₱70', 12, 'Available Today', 'Active', '2023-04-29 13:21:04', '2023-04-29 16:34:46'),
(35, 'banana&peanut-butter.png', 'Banana & Peanut Butter', 'Delicious combination of sweet, ripe bananas and rich, creamy peanut butter.', '₱75', 12, 'Available Today', 'Active', '2023-04-29 13:21:04', '2023-04-29 16:34:46'),
(36, 'strawberry&cream.png', 'Strawberry & Cream', 'Sweet, juicy flavor of ripe strawberries, paired with luscious, velvety cream.', '₱75', 12, 'Available Today', 'Active', '2023-04-29 13:21:48', '2023-04-29 16:34:46'),
(37, 'barkada-bundle.png', 'Barkada Bundle', 'A group-sized feast of delicious snacks and drinks, perfect for sharing with friends, or even family.', '₱700, save ₱150', 4, 'Available Today', 'Active', '2023-04-29 13:23:15', '2023-05-26 04:31:13'),
(38, 'family-bundle.png', 'Family Bundle', 'A satisfying, family-sized meal of classic dishes, designed to satisfy everyone\'s cravings.', '₱1145, save ₱180', 4, 'Available Today', 'Active', '2023-04-29 13:23:15', '2023-05-24 12:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_visits`
--

CREATE TABLE `monthly_visits` (
  `id` int(11) UNSIGNED NOT NULL,
  `month_year` varchar(7) NOT NULL,
  `visit_count` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monthly_visits`
--

INSERT INTO `monthly_visits` (`id`, `month_year`, `visit_count`) VALUES
(1, '2023-05', 1),
(2, '2023-05', 1),
(3, '2023-05', 1),
(4, '2023-05', 1),
(5, '2023-05', 1),
(6, '2023-05', 1),
(7, '2023-05', 1),
(8, '2023-05', 1),
(9, '2023-05', 1),
(10, '2023-05', 1),
(11, '2023-05', 1),
(12, '2023-05', 1),
(13, '2023-05', 1),
(14, '2023-05', 1),
(15, '2023-05', 1),
(16, '2023-05', 1),
(17, '2023-05', 1),
(18, '2023-05', 1),
(19, '2023-05', 1),
(20, '2023-05', 1),
(21, '2023-05', 1),
(22, '2023-05', 1),
(23, '2023-05', 1),
(24, '2023-05', 1),
(25, '2023-05', 1),
(26, '2023-05', 1),
(27, '2023-05', 1),
(28, '2023-05', 1),
(29, '2023-05', 1),
(30, '2023-05', 1),
(31, '2023-05', 1),
(32, '2023-05', 1),
(33, '2023-05', 1),
(34, '2023-05', 1),
(35, '2023-05', 1),
(36, '2023-05', 1),
(37, '2023-05', 1),
(38, '2023-05', 1),
(39, '2023-05', 1),
(40, '2023-05', 1),
(41, '2023-05', 1),
(42, '2023-05', 1),
(43, '2023-05', 1),
(44, '2023-05', 1),
(45, '2023-05', 1),
(46, '2023-05', 1),
(47, '2023-05', 1),
(48, '2023-05', 1),
(49, '2023-05', 1),
(50, '2023-05', 1),
(51, '2023-05', 1),
(52, '2023-05', 1),
(53, '2023-05', 1),
(54, '2023-05', 1),
(55, '2023-05', 1),
(56, '2023-05', 1),
(57, '2023-05', 1),
(58, '2023-05', 1),
(59, '2023-05', 1),
(60, '2023-05', 1),
(61, '2023-05', 1),
(62, '2023-05', 1),
(63, '2023-05', 1),
(64, '2023-05', 1),
(65, '2023-05', 1),
(66, '2023-05', 1),
(67, '2023-05', 1),
(68, '2023-05', 1),
(69, '2023-05', 1),
(70, '2023-05', 1),
(71, '2023-05', 1),
(72, '2023-05', 1),
(73, '2023-05', 1),
(74, '2023-05', 1),
(75, '2023-05', 1),
(76, '2023-05', 1),
(77, '2023-05', 1),
(78, '2023-05', 1),
(79, '2023-05', 1),
(80, '2023-05', 1),
(81, '2023-05', 1),
(82, '2023-05', 1),
(83, '2023-05', 1),
(84, '2023-05', 1),
(85, '2023-05', 1),
(86, '2023-05', 1),
(87, '2023-05', 1),
(88, '2023-05', 1),
(89, '2023-05', 1),
(90, '2023-05', 1),
(91, '2023-05', 1),
(92, '2023-05', 1),
(93, '2023-05', 1),
(94, '2023-05', 1),
(95, '2023-05', 1),
(96, '2023-05', 1),
(97, '2023-05', 1),
(98, '2023-05', 1),
(99, '2023-05', 1),
(100, '2023-05', 1),
(101, '2023-05', 1),
(102, '2023-05', 1),
(103, '2023-05', 1),
(104, '2023-05', 1),
(105, '2023-05', 1),
(106, '2023-05', 1),
(107, '2023-05', 1),
(108, '2023-05', 1),
(109, '2023-05', 1),
(110, '2023-05', 1),
(111, '2023-05', 1),
(112, '2023-05', 1),
(113, '2023-05', 1),
(114, '2023-05', 1),
(115, '2023-05', 1),
(116, '2023-05', 1),
(117, '2023-05', 1),
(118, '2023-05', 1),
(119, '2023-05', 1),
(120, '2023-05', 1),
(121, '2023-05', 1),
(122, '2023-05', 1),
(123, '2023-05', 1),
(124, '2023-05', 1),
(125, '2023-05', 1),
(126, '2023-05', 1),
(127, '2023-05', 1),
(128, '2023-05', 1),
(129, '2023-05', 1),
(130, '2023-05', 1),
(131, '2023-05', 1),
(132, '2023-05', 1),
(133, '2023-05', 1),
(134, '2023-05', 1),
(135, '2023-05', 1),
(136, '2023-05', 1),
(137, '2023-05', 1),
(138, '2023-05', 1),
(139, '2023-05', 1),
(140, '2023-05', 1),
(141, '2023-05', 1),
(142, '2023-05', 1),
(143, '2023-05', 1),
(144, '2023-05', 1),
(145, '2023-05', 1),
(146, '2023-05', 1),
(147, '2023-05', 1),
(148, '2023-05', 1),
(149, '2023-05', 1),
(150, '2023-05', 1),
(151, '2023-05', 1),
(152, '2023-05', 1),
(153, '2023-05', 1),
(154, '2023-05', 1),
(155, '2023-05', 1),
(156, '2023-05', 1),
(157, '2023-05', 1),
(158, '2023-05', 1),
(159, '2023-05', 1),
(160, '2023-05', 1),
(161, '2023-05', 1),
(162, '2023-05', 1),
(163, '2023-05', 1),
(164, '2023-05', 1),
(165, '2023-05', 1),
(166, '2023-05', 1),
(167, '2023-05', 1),
(168, '2023-05', 1),
(169, '2023-05', 1),
(170, '2023-05', 1),
(171, '2023-05', 1),
(172, '2023-05', 1),
(173, '2023-05', 1),
(174, '2023-05', 1),
(175, '2023-05', 1),
(176, '2023-05', 1),
(177, '2023-05', 1),
(178, '2023-05', 1),
(179, '2023-05', 1),
(180, '2023-05', 1),
(181, '2023-05', 1),
(182, '2023-05', 1),
(183, '2023-05', 1),
(184, '2023-05', 1),
(185, '2023-05', 1),
(186, '2023-05', 1),
(187, '2023-05', 1),
(188, '2023-05', 1),
(189, '2023-05', 1),
(190, '2023-05', 1),
(191, '2023-05', 1),
(192, '2023-05', 1),
(193, '2023-05', 1),
(194, '2023-05', 1),
(195, '2023-05', 1),
(196, '2023-05', 1),
(197, '2023-05', 1),
(198, '2023-05', 1),
(199, '2023-05', 1),
(200, '2023-05', 1),
(201, '2023-05', 1),
(202, '2023-05', 1),
(203, '2023-05', 1),
(204, '2023-05', 1),
(205, '2023-05', 1),
(206, '2023-05', 1),
(207, '2023-05', 1),
(208, '2023-05', 1),
(209, '2023-05', 1),
(210, '2023-05', 1),
(211, '2023-05', 1),
(212, '2023-05', 1),
(213, '2023-05', 1),
(214, '2023-05', 1),
(215, '2023-05', 1),
(216, '2023-05', 1),
(217, '2023-05', 1),
(218, '2023-05', 1),
(219, '2023-05', 1),
(220, '2023-05', 1),
(221, '2023-05', 1),
(222, '2023-05', 1),
(223, '2023-05', 1),
(224, '2023-05', 1),
(225, '2023-05', 1),
(226, '2023-05', 1),
(227, '2023-05', 1),
(228, '2023-05', 1),
(229, '2023-05', 1),
(230, '2023-05', 1),
(231, '2023-05', 1),
(232, '2023-05', 1),
(233, '2023-05', 1),
(234, '2023-05', 1),
(235, '2023-05', 1),
(236, '2023-05', 1),
(237, '2023-05', 1),
(238, '2023-05', 1),
(239, '2023-05', 1),
(240, '2023-05', 1),
(241, '2023-05', 1),
(242, '2023-05', 1),
(243, '2023-05', 1),
(244, '2023-05', 1),
(245, '2023-05', 1),
(246, '2023-05', 1),
(247, '2023-05', 1),
(248, '2023-05', 1),
(249, '2023-05', 1),
(250, '2023-05', 1),
(251, '2023-05', 1),
(252, '2023-05', 1),
(253, '2023-05', 1),
(254, '2023-05', 1),
(255, '2023-05', 1),
(256, '2023-05', 1),
(257, '2023-05', 1),
(258, '2023-05', 1),
(259, '2023-05', 1),
(260, '2023-05', 1),
(261, '2023-05', 1),
(262, '2023-05', 1),
(263, '2023-05', 1),
(264, '2023-05', 1),
(265, '2023-05', 1),
(266, '2023-05', 1),
(267, '2023-05', 1),
(268, '2023-05', 1),
(269, '2023-05', 1),
(270, '2023-05', 1),
(271, '2023-05', 1),
(272, '2023-05', 1),
(273, '2023-05', 1),
(274, '2023-05', 1),
(275, '2023-05', 1),
(276, '2023-05', 1),
(277, '2023-05', 1),
(278, '2023-05', 1),
(279, '2023-05', 1),
(280, '2023-05', 1),
(281, '2023-05', 1),
(282, '2023-05', 1),
(283, '2023-05', 1),
(284, '2023-05', 1),
(285, '2023-05', 1),
(286, '2023-05', 1),
(287, '2023-05', 1),
(288, '2023-05', 1),
(289, '2023-05', 1),
(290, '2023-05', 1),
(291, '2023-05', 1),
(292, '2023-05', 1),
(293, '2023-05', 1),
(294, '2023-05', 1),
(295, '2023-05', 1),
(296, '2023-05', 1),
(297, '2023-05', 1),
(298, '2023-05', 1),
(299, '2023-05', 1),
(300, '2023-05', 1),
(301, '2023-05', 1),
(302, '2023-05', 1),
(303, '2023-05', 1),
(304, '2023-05', 1),
(305, '2023-05', 1),
(306, '2023-05', 1),
(307, '2023-05', 1),
(308, '2023-05', 1),
(309, '2023-05', 1),
(310, '2023-05', 1),
(311, '2023-05', 1),
(312, '2023-05', 1),
(313, '2023-05', 1),
(314, '2023-05', 1),
(315, '2023-05', 1),
(316, '2023-05', 1),
(317, '2023-05', 1),
(318, '2023-05', 1),
(319, '2023-05', 1),
(320, '2023-05', 1),
(321, '2023-05', 1),
(322, '2023-05', 1),
(323, '2023-05', 1),
(324, '2023-05', 1),
(325, '2023-05', 1),
(326, '2023-05', 1),
(327, '2023-05', 1),
(328, '2023-05', 1),
(329, '2023-05', 1),
(330, '2023-05', 1),
(331, '2023-05', 1),
(332, '2023-05', 1),
(333, '2023-05', 1),
(334, '2023-05', 1),
(335, '2023-05', 1),
(336, '2023-05', 1),
(337, '2023-05', 1),
(338, '2023-05', 1),
(339, '2023-05', 1),
(340, '2023-05', 1),
(341, '2023-05', 1),
(342, '2023-05', 1),
(343, '2023-05', 1),
(344, '2023-05', 1),
(345, '2023-05', 1),
(346, '2023-05', 1),
(347, '2023-05', 1),
(348, '2023-05', 1),
(349, '2023-05', 1),
(350, '2023-05', 1),
(351, '2023-05', 1),
(352, '2023-05', 1),
(353, '2023-05', 1),
(354, '2023-05', 1),
(355, '2023-05', 1),
(356, '2023-05', 1),
(357, '2023-05', 1),
(358, '2023-05', 1),
(359, '2023-05', 1),
(360, '2023-05', 1),
(361, '2023-05', 1),
(362, '2023-05', 1),
(363, '2023-05', 1),
(364, '2023-05', 1),
(365, '2023-05', 1),
(366, '2023-05', 1),
(367, '2023-05', 1),
(368, '2023-05', 1),
(369, '2023-05', 1),
(370, '2023-05', 1),
(371, '2023-05', 1),
(372, '2023-05', 1),
(373, '2023-05', 1),
(374, '2023-05', 1),
(375, '2023-05', 1),
(376, '2023-05', 1),
(377, '2023-05', 1),
(378, '2023-05', 1),
(379, '2023-05', 1),
(380, '2023-05', 1),
(381, '2023-05', 1),
(382, '2023-05', 1),
(383, '2023-05', 1),
(384, '2023-05', 1),
(385, '2023-05', 1),
(386, '2023-05', 1),
(387, '2023-05', 1),
(388, '2023-05', 1),
(389, '2023-05', 1),
(390, '2023-05', 1),
(391, '2023-05', 1),
(392, '2023-05', 1),
(393, '2023-05', 1),
(394, '2023-05', 1),
(395, '2023-05', 1),
(396, '2023-05', 1),
(397, '2023-05', 1),
(398, '2023-05', 1),
(399, '2023-05', 1),
(400, '2023-05', 1),
(401, '2023-05', 1),
(402, '2023-05', 1),
(403, '2023-05', 1),
(404, '2023-05', 1),
(405, '2023-05', 1),
(406, '2023-05', 1),
(407, '2023-05', 1),
(408, '2023-05', 1),
(409, '2023-05', 1),
(410, '2023-05', 1),
(411, '2023-05', 1),
(412, '2023-05', 1),
(413, '2023-05', 1),
(414, '2023-05', 1),
(415, '2023-05', 1),
(416, '2023-05', 1),
(417, '2023-05', 1),
(418, '2023-05', 1),
(419, '2023-05', 1),
(420, '2023-05', 1),
(421, '2023-05', 1),
(422, '2023-05', 1),
(423, '2023-05', 1),
(424, '2023-05', 1),
(425, '2023-05', 1),
(426, '2023-05', 1),
(427, '2023-05', 1),
(428, '2023-05', 1),
(429, '2023-05', 1),
(430, '2023-05', 1),
(431, '2023-05', 1),
(432, '2023-05', 1),
(433, '2023-05', 1),
(434, '2023-05', 1),
(435, '2023-05', 1),
(436, '2023-05', 1),
(437, '2023-05', 1),
(438, '2023-05', 1),
(439, '2023-05', 1),
(440, '2023-05', 1),
(441, '2023-05', 1),
(442, '2023-05', 1),
(443, '2023-05', 1),
(444, '2023-05', 1),
(445, '2023-05', 1),
(446, '2023-05', 1),
(447, '2023-05', 1),
(448, '2023-05', 1),
(449, '2023-05', 1),
(450, '2023-05', 1),
(451, '2023-05', 1),
(452, '2023-05', 1),
(453, '2023-05', 1),
(454, '2023-05', 1),
(455, '2023-05', 1),
(456, '2023-05', 1),
(457, '2023-05', 1),
(458, '2023-05', 1),
(459, '2023-05', 1),
(460, '2023-05', 1),
(461, '2023-05', 1),
(462, '2023-05', 1),
(463, '2023-05', 1),
(464, '2023-05', 1),
(465, '2023-05', 1),
(466, '2023-05', 1),
(467, '2023-05', 1),
(468, '2023-05', 1),
(469, '2023-05', 1),
(470, '2023-05', 1),
(471, '2023-05', 1),
(472, '2023-05', 1),
(473, '2023-05', 1),
(474, '2023-05', 1),
(475, '2023-05', 1),
(476, '2023-05', 1),
(477, '2023-05', 1),
(478, '2023-05', 1),
(479, '2023-05', 1),
(480, '2023-05', 1),
(481, '2023-05', 1),
(482, '2023-05', 1),
(483, '2023-05', 1),
(484, '2023-05', 1),
(485, '2023-05', 1),
(486, '2023-05', 1),
(487, '2023-05', 1),
(488, '2023-05', 1),
(489, '2023-05', 1),
(490, '2023-05', 1),
(491, '2023-05', 1),
(492, '2023-05', 1),
(493, '2023-05', 1),
(494, '2023-05', 1),
(495, '2023-05', 1),
(496, '2023-05', 1),
(497, '2023-05', 1),
(498, '2023-05', 1),
(499, '2023-05', 1),
(500, '2023-05', 1),
(501, '2023-05', 1),
(502, '2023-05', 1),
(503, '2023-05', 1),
(504, '2023-05', 1),
(505, '2023-05', 1),
(506, '2023-05', 1),
(507, '2023-05', 1),
(508, '2023-05', 1),
(509, '2023-05', 1),
(510, '2023-05', 1),
(511, '2023-05', 1),
(512, '2023-05', 1),
(513, '2023-05', 1),
(514, '2023-05', 1),
(515, '2023-05', 1),
(516, '2023-05', 1),
(517, '2023-05', 1),
(518, '2023-05', 1),
(519, '2023-05', 1),
(520, '2023-05', 1),
(521, '2023-05', 1),
(522, '2023-05', 1),
(523, '2023-05', 1),
(524, '2023-05', 1),
(525, '2023-05', 1),
(526, '2023-05', 1),
(527, '2023-05', 1),
(528, '2023-05', 1),
(529, '2023-05', 1),
(530, '2023-05', 1),
(531, '2023-05', 1),
(532, '2023-05', 1),
(533, '2023-05', 1),
(534, '2023-05', 1),
(535, '2023-05', 1),
(536, '2023-05', 1),
(537, '2023-05', 1),
(538, '2023-05', 1),
(539, '2023-05', 1),
(540, '2023-05', 1),
(541, '2023-05', 1),
(542, '2023-05', 1),
(543, '2023-05', 1),
(544, '2023-05', 1),
(545, '2023-05', 1),
(546, '2023-05', 1),
(547, '2023-05', 1),
(548, '2023-05', 1),
(549, '2023-05', 1),
(550, '2023-05', 1),
(551, '2023-05', 1),
(552, '2023-05', 1),
(553, '2023-05', 1),
(554, '2023-05', 1),
(555, '2023-05', 1),
(556, '2023-05', 1),
(557, '2023-05', 1),
(558, '2023-05', 1),
(559, '2023-05', 1),
(560, '2023-05', 1),
(561, '2023-05', 1),
(562, '2023-05', 1),
(563, '2023-05', 1),
(564, '2023-05', 1),
(565, '2023-05', 1),
(566, '2023-05', 1),
(567, '2023-05', 1),
(568, '2023-05', 1),
(569, '2023-05', 1),
(570, '2023-05', 1),
(571, '2023-05', 1),
(572, '2023-05', 1),
(573, '2023-05', 1),
(574, '2023-05', 1),
(575, '2023-05', 1),
(576, '2023-05', 1),
(577, '2023-05', 1),
(578, '2023-05', 1),
(579, '2023-05', 1),
(580, '2023-05', 1),
(581, '2023-05', 1),
(582, '2023-05', 1),
(583, '2023-05', 1),
(584, '2023-05', 1),
(585, '2023-05', 1),
(586, '2023-05', 1),
(587, '2023-05', 1),
(588, '2023-05', 1),
(589, '2023-05', 1),
(590, '2023-05', 1),
(591, '2023-05', 1),
(592, '2023-05', 1),
(593, '2023-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `philosophy`
--

CREATE TABLE `philosophy` (
  `philosophy_id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `subheading` varchar(50) NOT NULL,
  `mission` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `background_image` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `philosophy`
--

INSERT INTO `philosophy` (`philosophy_id`, `heading`, `subheading`, `mission`, `vision`, `background_image`, `created_at`, `updated_at`) VALUES
(1, 'Our Philosophy', 'Passion & Quality: Cafe Allegra\'s Essence', 'At Cafe Allegra, we are committed to providing our customers with the highest quality coffee and food products in a welcoming and friendly environment. Our mission is to create a space where people can come together to share their love of coffee and food.', 'Our vision at Cafe Allegra is to become the go-to coffee shop for residents and tourists in Baliuag. We aim to expand our menu and product offerings while maintaining the highest standards of quality and service.', 'philosophy.jpg', '2023-04-29 09:48:19', '2023-05-26 05:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `private_dining`
--

CREATE TABLE `private_dining` (
  `private_dining_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `others` varchar(255) NOT NULL,
  `status` enum('Pending','Done') DEFAULT 'Pending',
  `special_requests` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `private_dining`
--

INSERT INTO `private_dining` (`private_dining_id`, `first_name`, `last_name`, `email`, `phone`, `number_of_guests`, `reservation_date`, `reservation_time`, `others`, `status`, `special_requests`, `created_at`) VALUES
(1, 'Jeanherline', 'Santiago', 'jeanherlinesantiago0329@gmail.com', '09293010483', 5, '2023-05-24', '15:00:00', 'N/A', 'Done', 'N/A', '2023-04-28 15:58:43'),
(2, 'Simone Jehrome', 'Chico', 'wetak98532@mevori.com', '09567956164', 6, '2023-06-29', '12:00:00', 'N/A', 'Pending', 'N/A', '2023-05-23 12:19:50'),
(3, 'Erzen Joi', 'Alberto', 'wetak98532@mevori.com', '09290987234', 4, '2023-08-17', '10:30:00', 'N/A', 'Pending', 'N/A', '2023-05-23 12:42:58'),
(4, 'Colline', 'Crisostomo', 'gamakiv486@goflipa.com', '09292345321', 5, '2023-10-18', '09:30:00', 'N/A', 'Pending', 'N/A', '2023-05-24 12:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `customer_photo` varchar(512) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `testimonial` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `customer_photo`, `customer_name`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 'pic-1_1682875378.jpg', 'Darwin S. Calonzo', 'A coffee lover na talagang satisfied sa products ng coffee shop na \'to, can surpass the quality and taste ng mga kilalang coffee store. Will surely try more!', '2023-04-29 10:17:22', '2023-04-30 17:22:58'),
(2, 'pic-2.jpg', 'Nelmar Mandani', 'I\'d like to recommend this coffee shop to all coffee lovers there in baliuag☕♥️', '2023-04-29 10:17:22', '2023-04-29 10:17:22'),
(3, 'pic-3.jpg', 'Ross De Vera-Dahan', 'Looove the Butterscotch Latte and baked mac. Will definitely try their Frappe, soon. ♥️', '2023-04-29 10:17:46', '2023-04-29 10:17:46'),
(4, 'pic-4.jpg', 'Angel Gonzales', 'Perfect place to catch up with friends at ang ganda pa ng ambiance! At ang pastries at drinks nila dito panalo! Masarap lahat at affordable pa.', '2023-04-30 17:02:56', '2023-04-30 17:03:36'),
(5, 'pic-5.jpg', 'Quinn Cassey Castillo', 'Perfect place para sa mga lovers and mgkakaibgan😘🥰', '2023-04-30 17:02:56', '2023-04-30 17:02:56'),
(6, 'pic-6_1682919124_1685018827.png', 'Suzette Bishop Love Angeles', 'Absolutely loved Cafe Allegra! Delicious food, great service, and a cozy atmosphere. Can\'t wait to go back!', '2023-04-30 17:11:05', '2023-05-25 12:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `table_reservation`
--

CREATE TABLE `table_reservation` (
  `table_reservation_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `others` varchar(255) NOT NULL,
  `status` enum('Pending','Done') NOT NULL DEFAULT 'Pending',
  `special_requests` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_reservation`
--

INSERT INTO `table_reservation` (`table_reservation_id`, `first_name`, `last_name`, `email`, `phone`, `number_of_guests`, `reservation_date`, `reservation_time`, `others`, `status`, `special_requests`, `created_at`) VALUES
(1, 'Jeanherline', 'Santiago', 'jeanherlinesantiago0329@gmail.com', '09293010483', 5, '2023-05-24', '15:00:00', 'N/A', 'Done', 'N/A', '2023-04-28 16:04:38'),
(2, 'Simone Jehrome', 'Chico', 'wetak98532@mevori.com', '09435462432', 9, '2023-06-29', '12:00:00', 'N/A', 'Pending', 'N/A', '2023-05-23 12:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseus`
--

CREATE TABLE `whychooseus` (
  `whychooseus_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `index_photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whychooseus`
--

INSERT INTO `whychooseus` (`whychooseus_id`, `heading`, `subheading`, `background_image`, `title`, `description`, `index_photo`, `created_at`, `updated_at`) VALUES
(1, 'Why Choose Us?', 'Savor the Unforgettable: Cafe Allegra', 'about.jpg', 'A cafe that feels like home', 'At Cafe Allegra, we provide an exceptional dining experience with the finest ingredients, skilled chefs and baristas, warm and inviting atmosphere, excellent customer service, a wide selection of food and beverages, and a convenient location.<br /><br />\r\n<br /><br />\r\nWe believe that excellent customer service is the foundation of a great dining experience. That\'s why our staff is dedicated to providing you with personalized attention and a warm welcome every time you visit. Whether you\'re looking for a quick coffee break or a leisurely meal with friends and family, we have a wide selection of food and beverages to satisfy any taste.<br /><br />\r\n<br /><br />\r\nConveniently located in the heart of town, Cafe Allegra is the perfect place to unwind and relax. Come see why we are the go-to spot for locals and visitors alike.<br /><br />\r\n<br /><br />\r\nChoose Cafe Allegra for an unforgettable experience.', 'about-img-1.png', '2023-04-29 09:54:37', '2023-05-26 05:11:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD UNIQUE KEY `contact_id` (`contact_id`);

--
-- Indexes for table `delivery_partners`
--
ALTER TABLE `delivery_partners`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `edit_contact`
--
ALTER TABLE `edit_contact`
  ADD PRIMARY KEY (`edit_contact_id`);

--
-- Indexes for table `edit_dining`
--
ALTER TABLE `edit_dining`
  ADD PRIMARY KEY (`edit_dining_id`);

--
-- Indexes for table `edit_feedback`
--
ALTER TABLE `edit_feedback`
  ADD PRIMARY KEY (`edit_feedback_id`);

--
-- Indexes for table `edit_menu`
--
ALTER TABLE `edit_menu`
  ADD PRIMARY KEY (`edit_menu_id`);

--
-- Indexes for table `edit_table`
--
ALTER TABLE `edit_table`
  ADD PRIMARY KEY (`edit_table_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `feedback_id` (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `herobanner`
--
ALTER TABLE `herobanner`
  ADD PRIMARY KEY (`herobanner_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `category_id` (`category`);

--
-- Indexes for table `monthly_visits`
--
ALTER TABLE `monthly_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `philosophy`
--
ALTER TABLE `philosophy`
  ADD PRIMARY KEY (`philosophy_id`);

--
-- Indexes for table `private_dining`
--
ALTER TABLE `private_dining`
  ADD PRIMARY KEY (`private_dining_id`),
  ADD UNIQUE KEY `private_dining_id` (`private_dining_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `table_reservation`
--
ALTER TABLE `table_reservation`
  ADD PRIMARY KEY (`table_reservation_id`),
  ADD UNIQUE KEY `table_reservation_id` (`table_reservation_id`);

--
-- Indexes for table `whychooseus`
--
ALTER TABLE `whychooseus`
  ADD PRIMARY KEY (`whychooseus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_partners`
--
ALTER TABLE `delivery_partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `edit_contact`
--
ALTER TABLE `edit_contact`
  MODIFY `edit_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_dining`
--
ALTER TABLE `edit_dining`
  MODIFY `edit_dining_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_feedback`
--
ALTER TABLE `edit_feedback`
  MODIFY `edit_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_menu`
--
ALTER TABLE `edit_menu`
  MODIFY `edit_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_table`
--
ALTER TABLE `edit_table`
  MODIFY `edit_table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `herobanner`
--
ALTER TABLE `herobanner`
  MODIFY `herobanner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `monthly_visits`
--
ALTER TABLE `monthly_visits`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=594;

--
-- AUTO_INCREMENT for table `philosophy`
--
ALTER TABLE `philosophy`
  MODIFY `philosophy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `private_dining`
--
ALTER TABLE `private_dining`
  MODIFY `private_dining_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_reservation`
--
ALTER TABLE `table_reservation`
  MODIFY `table_reservation_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whychooseus`
--
ALTER TABLE `whychooseus`
  MODIFY `whychooseus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
