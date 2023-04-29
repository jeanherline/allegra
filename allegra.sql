-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 09:23 PM
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
-- Database: `allegra`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'All', '2023-04-29 07:46:09', '2023-04-29 07:46:09'),
(4, 'Promos', '2023-04-29 12:12:46', '2023-04-29 12:12:46'),
(5, 'Espresso', '2023-04-29 12:12:46', '2023-04-29 12:44:23'),
(7, 'Frappe', '2023-04-29 12:13:04', '2023-04-29 12:47:25'),
(8, 'Coolers', '2023-04-29 12:13:13', '2023-04-29 12:47:25'),
(9, 'Pasta & Snacks', '2023-04-29 12:13:13', '2023-04-29 12:47:25'),
(11, 'Pastries', '2023-04-29 12:45:28', '2023-04-29 13:00:39'),
(12, 'Waffles', '2023-04-29 12:59:53', '2023-04-29 13:00:39');

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
  `google_map` varchar(512) NOT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_year`, `company_name`, `logo_orig`, `logo_white`, `logo_icon`, `address`, `phone`, `email`, `store_hours`, `google_map`, `facebook_link`, `instagram_link`, `twitter_link`, `created_at`, `updated_at`) VALUES
(1, 2022, 'Cafe Allegra', 'logo-brown.png', 'logo.png', 'logo-icon.png', '781 B.S Aquino Ave. Brgy. Bagong Nayon, Baliuag, Bulacan (In front of New Frontier Subdivision)', '0969 622 9438', 'cafeallegrabaliuag@gmail.com', 'Mon-Fri: 10AM-8PM | Sat-Sun: 11AM-8PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d963.6464479118739!2d120.89822424377084!3d14.960152777501325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339701f2dfa15023%3A0x2ae26381c4a9af6b!2sCafe%20Allegra!5e0!3m2!1sen!2sph!4v1681242204750!5m2!1sen!2sph', 'https://www.facebook.com/cafeallegrabaliuag', 'https://www.instagram.com/cafeallegra.ph/', '', '2023-04-29 08:20:43', '2023-04-29 08:25:02');

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
(1, 'Jeanherline', 'Santiago', 'jeanherlinesantiago0329@gmail.com', 'N/A', 'Can we invite you as one of our event concessionaire? ', '2023-04-28 15:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_partners`
--

CREATE TABLE `delivery_partners` (
  `partner_id` int(11) NOT NULL,
  `partner_photo` varchar(255) NOT NULL,
  `partner_name` varchar(50) NOT NULL,
  `partner_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_partners`
--

INSERT INTO `delivery_partners` (`partner_id`, `partner_photo`, `partner_name`, `partner_link`, `created_at`, `updated_at`) VALUES
(1, 'grabfood.png', 'GrabFood', 'https://food.grab.com/ph/en/restaurant/cafe-allegra-baliuag-delivery/2-C3VFCPTUAGJTSA', '2023-04-29 08:29:52', '2023-04-29 08:29:52'),
(2, 'ordermo.png', 'Ordermo', 'https://app.ordermo.ph/Cafe-Allegra', '2023-04-29 08:29:52', '2023-04-29 08:29:52');

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
(1, 'Contact Us', 'Let us know how we can serve you.', '2023-04-29 10:03:41', '2023-04-29 10:04:54');

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
(1, 'Private Dining', 'Have An Upcoming Special Event?', '3 hours for only 3,000 PHP (Consumables)', 'private-1.jpg', 'private-2.jpg', 'private-3.jpg', 'service-1.jpg', 'service-2.jpg', '2023-04-29 09:33:41', '2023-04-29 09:33:51');

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
(1, 'Feedback & Suggestion', 'We Value Your Feedback and Suggestions', 'feedback.jpg', '2023-04-29 10:08:27', '2023-04-29 10:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `edit_menu`
--

CREATE TABLE `edit_menu` (
  `edit_menu_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edit_menu`
--

INSERT INTO `edit_menu` (`edit_menu_id`, `heading`, `subheading`, `created_at`, `updated_at`) VALUES
(1, 'Our Menu', 'Experience something new!', '2023-04-29 09:41:14', '2023-04-29 09:41:14');

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
(1, 'Table Reservation', 'Reserve your spot today!', '2023-04-29 09:44:36', '2023-04-29 09:44:36');

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
(5, 'Sam', 'Espino', 'jr.samespino@gmail.com', 'Hello, thank you Cafe Allegra!', '2023-04-28 05:31:34');

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
(1, 'g-img-1.png', 'Private Dining', 'Make your special occasion even more special with a private dining experience at Cafe Allegra!', 'https://www.facebook.com/cafeallegrabaliuag/posts/pfbid0KbN3ztPQbAs3A5L8y9y84F3t9gfGoPU2SJ8F89cwcpvLuC86SEdZK1UYtViUwErfl', '2023-04-29 10:10:55', '2023-04-29 10:11:25'),
(2, 'g-img-2.png', 'Open and Ready to Help You!', 'Calling all entrepreneurs and freelancers! Need a place to work and get creative? We have the perfect spot for you!', 'https://www.facebook.com/photo.php?fbid=165000912981015&set=pb.100084133214934.-2207520000.&type=3', '2023-04-29 10:13:59', '2023-04-29 10:13:59'),
(3, 'g-img-3.jpg', 'Our homemade lasagna', 'Start your week off right with a delicious and satisfying combo of our homemade lasagna and a Spanish latte.', 'https://www.facebook.com/cafeallegrabaliuag/posts/pfbid02f5MqquNQqYVnNbqvHYKAJkm42megf3FZcKTSQGEbwv2H3Cnk7VY4C2SR2nQEvKmUl', '2023-04-29 10:13:59', '2023-04-29 10:13:59'),
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `herobanner`
--

INSERT INTO `herobanner` (`herobanner_id`, `heading`, `subheading`, `background_image`, `created_at`, `updated_at`) VALUES
(1, 'your cozy cafe', 'where every sip and bite is a delight!', 'home-bg.jpg', '2023-04-28 17:10:54', '2023-04-29 03:59:20');

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
  `availability` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_photo`, `menu_name`, `description`, `price`, `category`, `availability`, `created_at`, `updated_at`) VALUES
(1, 'spanish-latte.png', 'Spanish Latte', 'Espresso, steamed milk, and condensed milk.', 'Hot 12oz - ₱65<br>Iced 16oz - ₱75<br>Iced 22oz - ₱85', 5, 'Available Today', '2023-04-29 12:21:17', '2023-04-29 16:02:04'),
(2, 'caramel-macchiato.png', 'Caramel Macchiato', 'Velvety espresso, milk, and caramel drizzle.', 'Hot 12oz - ₱115<br>Iced 16oz - ₱125<br>Iced 22oz - ₱145', 5, 'Available Today', '2023-04-29 12:21:17', '2023-04-29 16:31:26'),
(3, 'matcha-espresso.png', 'Matcha Espresso', 'Energizing matcha meets bold espresso.', 'Hot 12oz - ₱125<br>Iced 16oz - ₱145<br>Iced 22oz - ₱165', 5, 'Available Today', '2023-04-29 12:23:00', '2023-04-29 16:31:26'),
(4, 'matcha-latte.png', 'Matcha Latte', 'Creamy, smooth blend of premium matcha green tea and silky steamed milk.', 'Hot 12oz - ₱125<br>Iced 16oz - ₱145<br>Iced 22oz - ₱165', 5, 'Available Today', '2023-04-29 12:23:00', '2023-04-29 16:31:26'),
(5, 'cookies&cream.png', 'Cookies & Cream', 'Frosty blend of cookies, cream, and ice for a delightful, sweet escape.', 'Iced 22oz - ₱165', 7, 'Available Today', '2023-04-29 12:26:55', '2023-04-29 16:31:26'),
(6, 'java-chip.png', 'Java Chip', 'Fusion of rich coffee, chocolate chips, and icy indulgence.', 'Iced 22oz - ₱165', 7, 'Available Today', '2023-04-29 12:26:55', '2023-04-29 16:31:26'),
(7, 'matcha.png', 'Matcha', 'Refreshing blend of matcha green tea and creamy delight', 'Iced 22oz - ₱175', 7, 'Available Today', '2023-04-29 12:28:19', '2023-04-29 16:31:26'),
(8, 'salted-caramel.png', 'Salted Caramel', 'Blend of sweet caramel, a hint of salt, and creamy refreshment.', 'Iced 22oz - ₱165', 7, 'Available Today', '2023-04-29 12:28:19', '2023-04-29 16:31:26'),
(9, 'strawberries&cream.png', 'Strawberries & Cream', 'Luscious, icy blend of sweet strawberries and velvety cream.', 'Iced 22oz - ₱165', 7, 'Available Today', '2023-04-29 12:29:50', '2023-04-29 16:31:26'),
(10, 'white-chocolate-mocha.png', 'White Chocolate Mocha', 'Frosty medley of smooth white chocolate, bold coffee, and creamy delight.', 'Iced 22oz - ₱165', 7, 'Available Today', '2023-04-29 12:29:50', '2023-04-29 16:31:26'),
(11, 'cucumber-lemonade.png', 'Cucumber Lemonade', 'Revitalizing blend of crisp cucumber, tangy lemon, and a hint of sweetness.', 'Iced 22oz - ₱75', 8, 'Available Today', '2023-04-29 12:33:30', '2023-04-29 16:31:26'),
(12, 'iced-tea-lemon.png', 'Iced Tea Lemon', 'Fusion of brisk iced tea, zesty lemon, and a touch of sweetness.', 'Iced 22oz - ₱85', 8, 'Available Today', '2023-04-29 12:33:30', '2023-04-29 16:31:26'),
(13, 'strawberry-soda.png', 'Strawberry Soda', 'Bubbly concoction of ripe strawberries, sparkling soda, and a hint of sweetness', 'Iced 22oz - ₱85', 8, 'Available Today', '2023-04-29 12:34:56', '2023-04-29 16:31:26'),
(14, 'thai-lemon-tea.png', 'Thai Lemon Tea', 'Vibrant fusion of aromatic Thai tea, tangy lemon, and a splash of sweetness.', 'Iced 22oz - ₱85', 8, 'Available Today', '2023-04-29 12:34:56', '2023-04-29 16:31:26'),
(15, 'baked-macaroni.png', 'Baked Macaroni', 'Tender pasta, rich, creamy cheese sauce, and a golden, crispy crust.', '₱169', 9, 'Available Today', '2023-04-29 12:36:38', '2023-04-29 16:31:26'),
(16, 'beef-lasagna.png', 'Beef Lasagna', 'Layers of savory beef, tender pasta, and creamy cheese, baked to perfection.', '₱169', 9, 'Available Today', '2023-04-29 12:36:38', '2023-04-29 16:31:26'),
(17, 'chicken-pesto.png', 'Chicken Pesto', 'Succulent chicken, aromatic basil pesto, and al dente pasta for a flavorful, herb-infused treat.', '₱169', 9, 'Available Today', '2023-04-29 12:37:40', '2023-04-29 16:31:26'),
(18, 'classic-carbonara.png', 'Classic Carbonara', 'Creamy, savory blend of al dente pasta, smoky bacon, and rich Parmesan.', '₱169', 9, 'Available Today', '2023-04-29 12:37:40', '2023-04-29 16:31:26'),
(19, 'beef-nachos.png', 'Beef Nachos', 'Satisfying medley of crispy tortilla chips, seasoned beef, melted cheese, and zesty toppings.', '₱145', 9, 'Available Today', '2023-04-29 12:39:37', '2023-04-29 16:31:26'),
(20, 'beef-tacos.png', 'Beef Tacos', 'Zesty combination of seasoned beef, fresh veggies, and tangy sauce, nestled in a soft or crunchy tortilla.', '₱145', 9, 'Available Today', '2023-04-29 12:39:37', '2023-04-29 16:31:26'),
(21, 'cheezy-nachos.png', 'Cheezy Nachos', 'Mouthwatering stack of crunchy tortilla chips, smothered in melted cheese and zesty toppings.', '₱125', 9, '', '2023-04-29 12:40:53', '2023-04-29 16:34:46'),
(22, 'french-fries.png', 'French Fries', 'Crispy, golden goodness of perfectly seasoned, deep-fried potato sticks.', '₱125', 9, 'Available Today', '2023-04-29 12:40:53', '2023-04-29 16:34:46'),
(23, 'nacho-fries.png', 'Nacho Fries', 'Crispy french fries, smothered in melted cheese, and topped with nacho flavors.', '₱145', 9, 'Available Today', '2023-04-29 12:41:39', '2023-04-29 16:34:46'),
(24, 'matha-regular.png', 'Matcha Regular (Non-Espresso)', 'Earthy, smooth flavor of classic matcha green tea.', 'Hot 12oz - ₱125<br>Iced 16oz - ₱145<br>Iced 22oz - ₱165', 5, 'Available Today', '2023-04-29 13:04:54', '2023-04-29 16:34:46'),
(25, 'strawberry&milk.png', 'Strawberry & Milk (Non-Espresso)', 'Refreshing and sweet blend of ripe, juicy strawberries and creamy, smooth milk.', 'Iced 16oz - ₱125<br>Iced 22oz - ₱145', 5, 'Available Today', '2023-04-29 13:04:54', '2023-04-29 16:35:08'),
(26, 'thai-milktea.png', 'Thai Milktea (Non-Espresso)', 'Fragrant, sweet blend of aromatic Thai tea and creamy milk.', 'Hot 12oz - ₱110<br>Iced 16oz - ₱125<br>Iced 22oz - ₱145', 5, 'Available Today', '2023-04-29 13:05:32', '2023-04-29 16:34:46'),
(27, 'blueberry-cheesecake.png', 'Blueberry Cheesecake', 'Creamy richness of cheesecake paired with sweet, tangy blueberries.', '₱165', 11, 'Available Today', '2023-04-29 13:09:07', '2023-04-29 16:34:46'),
(28, 'chocolate-almond.png', 'Chocolate Almond', 'Combination of rich chocolate and crunchy almonds for a delightful, nutty treat.', '₱50', 11, 'Available Today', '2023-04-29 13:09:07', '2023-04-29 16:34:46'),
(29, 'chocolate-walnut.png', 'Chocolate Walnut', 'Fusion of smooth chocolate and earthy walnuts for a scrumptious, nutty dessert.', '₱50', 11, 'Available Today', '2023-04-29 13:10:40', '2023-04-29 16:34:46'),
(30, 'double-chocolate-muffin.png', 'Double Chocolate Muffin', 'Indulgent harmony of rich chocolate and moist muffin.', '₱50', 11, 'Available Today', '2023-04-29 13:10:40', '2023-04-29 16:34:46'),
(31, 'strawberry-cheesecake.png', 'Strawberry Cheesecake', 'Blissful union of creamy cheesecake and sweet, tangy strawberries.', '₱165', 11, 'Available Today', '2023-04-29 13:13:54', '2023-04-29 16:34:46'),
(32, 'banana&choco-hazelnut.png', 'Banana & Choco Hazelnut', 'Sweet bananas and rich chocolate-hazelnut spread.', '₱75', 12, 'Available Today', '2023-04-29 13:19:24', '2023-04-29 16:34:46'),
(33, 'butter&maple-syrup.png', 'Butter & Maple Syrup', 'Classic combination of rich, creamy butter and sweet, luscious maple syrup.', '₱70', 12, 'Available Today', '2023-04-29 13:19:24', '2023-04-29 16:34:46'),
(34, 'choco-hazelnut.png', 'Choco Hazelnut', 'Creamy, nutty fusion of rich chocolate and decadent hazelnut.', '₱70', 12, 'Available Today', '2023-04-29 13:21:04', '2023-04-29 16:34:46'),
(35, 'banana&peanut-butter.png', 'Banana & Peanut Butter', 'Delicious combination of sweet, ripe bananas and rich, creamy peanut butter.', '₱75', 12, 'Available Today', '2023-04-29 13:21:04', '2023-04-29 16:34:46'),
(36, 'strawberry&cream.png', 'Strawberry & Cream', 'Sweet, juicy flavor of ripe strawberries, paired with luscious, velvety cream.', '₱75', 12, 'Available Today', '2023-04-29 13:21:48', '2023-04-29 16:34:46'),
(37, 'barkada-bundle.png', 'Barkada Bundle', 'A group-sized feast of delicious snacks and drinks, perfect for sharing with friends, or even family.', '₱700, save ₱150', 4, 'Available Today', '2023-04-29 13:23:15', '2023-04-29 16:48:41'),
(38, 'family-bundle.png', 'Family Bundle', 'A satisfying, family-sized meal of classic dishes, designed to satisfy everyone\'s cravings.', '₱1145, save ₱180', 4, 'Available Today', '2023-04-29 13:23:15', '2023-04-29 16:37:56');

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
(1, 'Our Philosophy', 'Passion & Quality: Cafe Allegra\'s Essence', 'At Cafe Allegra, we are committed to providing our customers with the highest quality coffee and food products in a welcoming and friendly environment. Our mission is to create a space where people can come together to share their love of coffee and food ', 'Our vision at Cafe Allegra is to become the go-to coffee shop for residents and tourists in Baliuag. We aim to expand our menu and product offerings while maintaining the highest standards of quality and service. We envision a future where Cafe Allegra is', 'philosophy.jpg', '2023-04-29 09:48:19', '2023-04-29 09:48:19');

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
  `special_requests` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `private_dining`
--

INSERT INTO `private_dining` (`private_dining_id`, `first_name`, `last_name`, `email`, `phone`, `number_of_guests`, `reservation_date`, `reservation_time`, `others`, `special_requests`, `created_at`) VALUES
(1, 'Jeanherline', 'Santiago', 'jeanherlinesantiago0329@gmail.com', '09293010483', 5, '2023-04-29', '15:00:00', 'N/A', 'N/A', '2023-04-28 15:58:43');

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
(1, 'pic-1.jpg', 'Darwin S. Calonzo', 'A coffee lover na talagang satisfied sa products ng coffee shop na \'to, can surpass the quality and taste ng mga kilalang coffee store. Will surely try more!', '2023-04-29 10:17:22', '2023-04-29 10:17:22'),
(2, 'pic-2.jpg', 'Nelmar Mandani', 'I\'d like to recommend this coffee shop to all coffee lovers there in baliuag☕♥️', '2023-04-29 10:17:22', '2023-04-29 10:17:22'),
(3, 'pic-3.jpg', 'Ross De Vera-Dahan', 'Looove the Butterscotch Latte and baked mac. Will definitely try their Frappe, soon. ♥️', '2023-04-29 10:17:46', '2023-04-29 10:17:46');

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
  `special_requests` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_reservation`
--

INSERT INTO `table_reservation` (`table_reservation_id`, `first_name`, `last_name`, `email`, `phone`, `number_of_guests`, `reservation_date`, `reservation_time`, `others`, `special_requests`, `created_at`) VALUES
(1, 'Jeanherline', 'Santiago', 'jeanherlinesantiago0329@gmail.com', '09293010483', 8, '2023-05-24', '15:55:00', 'N/A', 'N/A', '2023-04-28 16:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseus`
--

CREATE TABLE `whychooseus` (
  `whychooseus_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `index_photo` varchar(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whychooseus`
--

INSERT INTO `whychooseus` (`whychooseus_id`, `heading`, `subheading`, `index_photo`, `background_image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Why Choose Us?', 'Savor the Unforgettable: Cafe Allegra', 'about-img-1.png', 'about.jpg', 'A cafe that feels like home', 'At Cafe Allegra, we provide an exceptional dining experience with the finest ingredients, skilled chefs and baristas, warm and inviting atmosphere, excellent customer service, a wide selection of food and beverages, and a convenient location.\r\n<br><br>\r\nWe believe that excellent customer service is the foundation of a great dining experience. That\'s why our staff is dedicated to providing you with personalized attention and a warm welcome every time you visit. Whether you\'re looking for a quick coffee break or a leisurely meal with friends and family, we have a wide selection of food and beverages to satisfy any taste.\r\n<br><br>\r\nConveniently located in the heart of town, Cafe Allegra is the perfect place to unwind and relax. Come see why we are the go-to spot for locals and visitors alike.\r\n<br><br>\r\nChoose Cafe Allegra for an unforgettable experience.', '2023-04-29 09:54:37', '2023-04-29 19:22:55');

--
-- Indexes for dumped tables
--

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
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `feedback_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `philosophy`
--
ALTER TABLE `philosophy`
  MODIFY `philosophy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `private_dining`
--
ALTER TABLE `private_dining`
  MODIFY `private_dining_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_reservation`
--
ALTER TABLE `table_reservation`
  MODIFY `table_reservation_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
