-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 07:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esraa_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buliding` varchar(50) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `street` varchar(40) NOT NULL,
  `floor` varchar(40) NOT NULL,
  `flat` varchar(40) NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `buliding`, `notes`, `street`, `floor`, `flat`, `region_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Building 3', '', 'Al Ghasham Street', '10', '3', 10, 1, '2022-03-01 01:33:09', '2022-03-09 01:33:09'),
(9, 'Building 5', 'لغتاتلتلرتل رتارترترتر التتغتغ اتاتات ', 'Tahrir street', '45', '6', 11, 2, '2022-03-15 01:34:36', '2022-03-16 01:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `national_id` varchar(14) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `password`, `email_verified_at`, `status`, `image`, `national_id`, `created_at`, `updated_at`) VALUES
(100, 'ali', '0218923732', 'ali@yahoo.com', 'vjgvgght6675646767fcf', NULL, 1, NULL, '56456653435435', '2022-03-30 01:35:29', '2022-03-09 01:35:29'),
(101, 'ibrahem', '02182373782', 'hghsghshg@sghhgs', 'jdjdkjhfrr89478', NULL, 0, NULL, '32689902897327', '2022-03-17 01:35:29', '2022-03-10 01:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => active ,\r\n0=>not active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_en`, `name_ar`, `image`, `status`, `created_at`, `updated_at`) VALUES
(50, 'zara', 'زارا', 'zara.png', 1, '2022-03-20 01:40:32', '2022-03-27 03:47:05'),
(51, 'dell', 'ديل', 'dell.png', 1, '2022-03-20 01:40:32', '2022-03-27 03:47:05'),
(52, 'samsung', 'سلمسونج', 'samsung.png', 1, '2022-03-26 07:55:17', '2022-03-27 03:47:05'),
(53, 'apple', 'ابل', 'apple.png', 1, '2022-03-26 07:55:17', '2022-03-27 03:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` mediumint(20) NOT NULL,
  `total_price` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => active (default)\r\n0 => not active ',
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_ar`, `status`, `image`, `created_at`, `updated_at`) VALUES
(200, 'electronice', 'الكترونيات', 1, NULL, '2022-03-26 07:57:57', '2022-03-26 10:22:01'),
(201, 'fashion', 'فاشون', 1, NULL, '2022-03-26 07:57:57', '2022-03-26 10:22:13'),
(202, 'kitchen', 'مطابخ', 1, NULL, '2022-03-26 07:58:27', '2022-03-26 10:22:17'),
(203, 'super market', 'سوبر ماركت', 1, NULL, '2022-03-26 10:15:27', '2022-03-26 10:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(60) NOT NULL,
  `name_ar` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 => deliverd ,\r\n0 => not deliverd (default)',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name_en`, `name_ar`, `status`, `created_at`, `updated_at`) VALUES
(4, 'zazigh', 'زقازيق', 1, '2022-03-20 01:30:15', '2022-03-21 01:30:15'),
(5, 'giza', 'جيزة', 1, '2022-03-20 01:30:15', '2022-03-21 01:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(10) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `discount` bigint(7) NOT NULL,
  `discount_type` varchar(20) NOT NULL,
  `minimum_order_value` bigint(1) NOT NULL,
  `maximum_discount_value` bigint(10) NOT NULL,
  `number of usage per user` mediumint(20) NOT NULL,
  `number of usage` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_product`
--

CREATE TABLE `coupon_product` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_user`
--

CREATE TABLE `coupon_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `desccc` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `discount` mediumint(9) NOT NULL,
  `discount_type` varchar(20) NOT NULL,
  `applied_offer_count` bigint(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `count` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordes`
--

CREATE TABLE `ordes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => ORDER ,\r\n0-> NOT ORDER',
  `total_price` decimal(7,0) NOT NULL,
  `deliverd_at` date NOT NULL,
  `shipping_price` decimal(7,0) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordes`
--

INSERT INTO `ordes` (`id`, `status`, `total_price`, `deliverd_at`, `shipping_price`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 1, '20000', '2022-03-02', '200', 3, '2022-03-09 00:44:02', '2022-03-29 00:44:02'),
(11, 1, '200000', '2022-03-15', '200', 1, '2022-03-28 00:44:02', '2022-03-28 00:44:02'),
(12, 1, '30000', '2022-03-23', '300', 2, '2022-03-18 00:45:45', '2022-03-20 00:45:45'),
(13, 1, '15000', '2022-03-20', '120', 4, '2022-03-15 00:45:45', '2022-03-13 00:45:45'),
(14, 1, '5000', '2022-03-16', '100', 3, '2022-03-09 00:47:38', '2022-03-09 00:47:38'),
(15, 1, '70000', '2022-03-08', '100', 4, '2022-03-02 00:47:38', '2022-03-02 00:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `product-offer`
--

CREATE TABLE `product-offer` (
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price after discount` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` smallint(3) NOT NULL DEFAULT 1,
  `details_en` longtext NOT NULL,
  `details_ar` longtext NOT NULL,
  `code` smallint(5) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => excist ,\r\n0 => not ',
  `subcategory_id` bigint(20) NOT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_en`, `name_ar`, `price`, `quantity`, `details_en`, `details_ar`, `code`, `image`, `status`, `subcategory_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(60, 'hot sale custom logo restaurant dessert white plates round ceramic dinner plates porcelain plate dish', 'حار بيع شعار مخصص مطعم الحلوى لوحات بيضاء مستديرة أطباق عشاء السيراميك الخزف لوحة طبق', '600.00', 1, 'Dinnerware Type: Dishes & Plates ,Pattern Type: Customized ,Plate Type:Plate Dish ,Shape: Round, Round ,Technique: On-glazed ,Commercial Buyer:Caterers & Canteens, Restaurants, Fast Food and Takeaway Food Services, Food & Beverage Stores, Food & Beverage Manufacture, Convenience Stores, Cafes and Coffee Shops,Season:\r\nAll-Season ,Design Style: Minimalist, CLASSIC, Modern ,Room Space ,Selection: Not Support ,Occasion Selection: Not Support ,Holiday ,Selection: Not Support ,Quantity: >10 ,Material: Ceramic, Reinforced Porcelain ,Feature: Sustainable ,Place of Origin: Guangdong, China\r\n,Brand Name: NONE ,Product name: White porcelain velvet plate ,Size: 7.5 inches 19cm*2cm ,Color: White ,LOGO: Support Logo customization ,Scope of application: Microwave oven, oven, sterilizer, dishwasher ,Product weight: 0.2KG ,Packaging Specifications: 48 pieces/carton ,Packaging size: 40*32*21cm', 'نوع أواني الطعام: الأطباق والأطباق ، نوع النمط: حسب الطلب ، نوع اللوحة: طبق طبق ، الشكل: دائري ، دائري ، التقنية: على الزجاج ، المشتري التجاري: متعهدو المطاعم والمقاصف ، المطاعم ، الوجبات السريعة وخدمات الأطعمة الجاهزة ، متاجر الأطعمة والمشروبات ، صناعة الأغذية والمشروبات ، المتاجر الصغيرة ، المقاهي والمقاهي ، الموسم:\r\nجميع المواسم ، نمط التصميم: الحد الأدنى ، الكلاسيكي ، الحديث ، مساحة الغرفة ، الاختيار: لا يدعم ، اختيار المناسبة: لا يدعم ، عطلة ، الاختيار: لا يدعم ، الكمية:> 10 ، المادة: سيراميك ، بورسلين مقوى ، الميزة: مستدام ، مكان المنشأ: قوانغدونغ ، الصين\r\n، اسم العلامة التجارية: NONE ، اسم المنتج: لوح مخملي بورسلين أبيض ، الحجم: 7.5 بوصة 19 سم * 2 سم ، اللون: أبيض ، الشعار: تخصيص شعار الدعم ، نطاق التطبيق: فرن ميكروويف ، فرن ، معقم ، غسالة أطباق ، وزن المنتج: 0.2 كجم مواصفات التغليف: 48 قطعة / كرتون ، حجم العبوة: 40 * 32 * 21 سم', 14632, 'hot sale custom logo restaurant dessert white plates round ceramic dinner plates porcelain plate dish.png', 1, 302, NULL, '2022-03-26 08:24:12', '2022-03-27 23:42:25'),
(61, 'Classical elegant tableware household creative western dishes dining plates ceramic tableware flower ceramic plate', 'أدوات مائدة كلاسيكية أنيقة منزلية أطباق غربية إبداعية أطباق طعام أطباق سيراميك على شكل زهرة لوحة سيراميك', '999.99', 1, 'Dinnerware Type: Dishes & Plates ,Pattern Type: Customized ,Plate ,Type: Plate Dish ,Shape: Round ,Technique: On-glazed ,Commercial Buyer: Restaurants, Specialty Stores, Department Stores, Super Markets, Hotels, Cafes and Coffee Shops, Gifts Stores ,Occasion:\r\nBusiness Gifts, Party, Presents, Wedding ,Holiday: Valentine\'s Day, Mother\'s Day, Father\'s Day, Christmas, New Year\'s, Thanksgiving, ,Halloween Season: All-Season ,Room Space: Kitchen, Closet, Dining Room, Living Room, Office ,Design Style: Minimalist, Transitional, CLASSIC, Modern, Morden Luxury ,Room Space Selection: Support\r\n,Occasion Selection: Support ,Holiday Selection: Support ,Quantity:4\r\n,Material: Ceramic ,Feature: Sustainable, Stocked, Eco-friendly, Stocked ,Place of Origin: Shanxi, China , Color:Green ,Quality: 4 Usage: Home, Festival & wedding event ,Design: Accept client\'s design ,Sample: Avaliable ,Packing: Color Box , MOQ: 100 sets', 'نوع أواني الطعام: الأطباق والأطباق ، نوع النمط: مخصص ، لوحة ، النوع: طبق طبق ، الشكل: دائري ، التقنية: على الزجاج ، المشتري التجاري: المطاعم ، المتاجر المتخصصة ، المتاجر الكبرى ، الأسواق الفائقة ، الفنادق ، المقاهي والمقاهي ، محلات الهدايا ، المناسبة:\r\nهدايا الأعمال ، حفلة ، هدايا ، زفاف ، عطلة: عيد الحب ، عيد الأم ، عيد الأب ، الكريسماس ، رأس السنة الجديدة ، عيد الشكر ، موسم الهالوين: كل المواسم ، مساحة الغرفة: مطبخ ، خزانة ، غرفة طعام ، غرفة معيشة ، مكتب ، نمط التصميم: بسيط ، انتقالي ، كلاسيكي ، حديث ، موردن فاخر ، اختيار مساحة الغرفة: الدعم\r\n، اختيار المناسبة: الدعم ، اختيار العطلة: الدعم ، الكمية: 4\r\n، المادة: سيراميك ، الميزة: مستدام ، مخزّن ، صديق للبيئة ، مخزّن ، مكان المنشأ: شانشي ، الصين ، اللون: أخضر ، الجودة: 4 الاستخدام: المنزل ، المهرجان وحدث الزفاف ، التصميم: قبول تصميم العميل ، العينة: متوافرة ، التعبئة: صندوق ألوان ، موك: 100 مجموعة', 32767, 'Classical elegant tableware household creative western dishes dining plates ceramic tableware flower ceramic plate.jpg', 1, 302, NULL, '2022-03-26 08:24:12', '2022-04-01 01:18:55'),
(63, 'Samsung Galaxy A02 Mobile Phone, Dual Sim, 6.5 Inch Screen, 32 GB, 3 GB RAM, 4G LTE - Black', 'موبايل سامسونج جالاكسي A02 بشريحتين اتصال، شاشة 6.5 بوصة، 32 جيجابايت، 3 جيجابايت رام، شبكة الجيل الرابع ال تي اي - اسود', '2650.00', 1, 'Brand: Samsung, Model Number: Galaxy A02, Color: Black, Body, Dimensions: 164 x 75.9 x 9.1 mm, Weight: 206 grams, SIM: Dual SIM, Material: Glass interface, plastic back, screen plastic frame, Type : BLSI IPS, Size: 6.5 inch\r\n, Resolution: 720 x 1600 pixels, Operating platform, Operating system: Android 10, Processor: Quad-core, Memory: Internal memory: 32 GB, RAM: 3 GB, Rear camera: 13 megapixels, lens aperture: 1.9 (wide) 2 megapixels, Lens aperture 2.4 (macro), front camera: 5 megapixels, lens aperture 2.0, video: 1080 pixels at 30 frames per second\r\nConnectivity: Wireless LAN: 802.11 b/g/n, Bluetooth: Version 5.1, Radio: FM Radio, GPS: GPS, Glonass, USB: Micro USB 2.0, Wi-Fi Direct, Hotspot, Sensors speed proximity sensor\r\n,Battery Capacity: Non-removable Li-Po 5000 mAh battery\r\nAudio Speaker 3.5mm port', 'العلامة التجارية: سامسونج , رقم الموديل: جالاكسي A02 ,اللون: اسود ,الهيكل ,الأبعاد: 164 × 75.9 × 9.1 ملم ,الوزن: 206 جرام ,شريحة الاتصال: شريحة مزدوجة ,المواد: واجهة زجاجية، ظهر بلاستيك، إطار بلاستيك الشاشة ,النوع: بي ال اس اي بي اس ,الحجم: 6.5 بوصة\r\n,دقة الوضوح: 720 × 1600 بكسل منصة التشغيل ,نظام التشغيل: اندرويد 10 ,المعالج: رباعي النواة , الذاكرة الذاكرة الداخلية: 32 جيجابايت ,ذاكرة الرام: 3 جيجابايت , الكاميرا الخلفية: 13 ميجابكسل، فتحة عدسة 1.9 (واسعة) 2 ميجابكسل، فتحة عدسة 2.4 (ماكرو) ,الكاميرا الأمامية: 5 ميجابكسل فتحة عدسة 2.0 , الفيديو: 1080 بكسل بكسل لكل 30 إطار في الثانية\r\nالاتصال الشبكة المحلية اللاسلكية: 802.11 b/g/n , البلوتوث: إصدار 5.1 ,الراديو: راديو اف ام نظام تحديد المواقع: نظام تحديد الوقع المساعد ونظام جلوناس يو اس بي: مايكرو يو اس بي 2.0 ,واي فاي مباشر هوت سبوت ,المستشعرات مستشعر السرعة مستشعر التقارب\r\n,البطارية السعة: بطارية ليثيوم بوليمر 5000 مللي امبير في الساعة غير قابلة للإزالة\r\nالصوت مكبر صوت منفذ 3.5 ملم', 25173, 'Samsung Galaxy A02 Mobile Phone, Dual Sim, 6.5 Inch Screen, 32 GB, 3 GB RAM, 4G LTE - Black.png', 1, 301, 52, '2022-03-26 08:59:12', '2022-03-27 03:37:19'),
(64, 'iPhone 13 Pro Max, 256 GB, Sierra Blue', 'موبايل ايفون 13 Pro Max، 256 جيجابايت، ازرق سييرا', '27900.00', 1, '6.7 inch Super Retina XDR display with Pro Motion technology for fast and responsive touchscreen operation\r\nCinematic mode adds tremendous depth of field, and focus shifts automatically in videos\r\nProfessional Camera System with 12MP Telephoto Lens, Ultra Wide Camera, LiDAR Scanner, 6x Optical Zoom, Macro, Photographic Modes, ProRes Video, Smart HDR 4, Night Mode, Photo Capture Apple ProRAW, 4K recording with Dolby Vision and HDR\r\n12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision and HDR\r\nA15 Bionic chip for ultra-fast performance', 'شاشة سوبر رتينا XDR بحجم 6.7 بوصة بتقنية برو موشن لتوفير خاصية لمس سريعة وفائقة الاستجابة\r\nيضيف الوضع السينمائي عمقًا هائلا للمجال، ويتحول التركيز تلقائيًا في مقاطع الفيديو\r\nنظام كاميرا احترافي مع عدسة مقربة 12 ميجابكسل وكاميرا فائقة الاتساع، سكانر بتقنية ليدار LiDAR، وتكبير الصورة بصريا حتى 6 مرات، وتصوير ماكرو، وأنماط فوتوغرافية، ومقاطع فيديو بتنسيق ProRes، وتقنية التصوير بالمدى الديناميكي العالي HDR 4 الذكية، والوضع الليلي، والتقاط الصور بتقنية ProRAW من أبل، وتسجيل بدقة 4K باستخدام تقنية دولبي فيجن وتقنية المدى الديناميكي العالي HDR\r\nكاميرا أمامية ترو ديبث بدقة 12 ميجابكسل مع الوضع الليلي، والتسجيل بجودة 4k بتقنية دولبي فيجن وتقنية التصوير بالمدى الديناميكي العالي HDR\r\nشريحة بيونيك A15 لأداء فائق السرعة\r\n', 29736, 'iPhone 13 Pro Max, 256 GB, Sierra Blue.png', 1, 301, 53, '2022-03-26 08:59:12', '2022-03-27 03:37:19'),
(65, 'Casual Hoodies Slim Fit Hoodies Sweatshirt Oblique Zipper Hoodie For Men, Black', 'سترة هوديز كاجوال بغطاء للراس وقصة ضيقة ذات غطاء راس وسوستة مائلة للرجال بلون اسود', '300.00', 1, 'black color\r\nMaterial: Cotton\r\nJacket Design: Hooded & Zippered Jacket\r\nLength: short', 'اللون: أسود\r\nالخامة: قطن\r\nتصميم السترة: سترة بغطاء راس وسوستة\r\nالطول: قصير', 12437, 'Casual Hoodies Slim Fit Hoodies Sweatshirt Oblique Zipper Hoodie For Men, Black.png', 1, 303, 50, '2022-03-26 09:05:02', '2022-03-27 03:37:19'),
(66, 'Dell Vostro 3510 Laptop - Intel Core i7-1165G7 11th Gen, 8GB RAM, 1TB HDD, NVIDIA GeForce MX350 GDDR5, 15.6 Inch, FHD (1920 x 1080) Thin LED Frame, Ubuntu - Black', 'لابتوب ديل فوسترو 3510 - انتل كورi7-1165G7 الجيل 11، ذاكرة RAM سعة 8 جيجا، هارد HDD سعة 1 تيرا، انفيديا جيفورس MX350 GDDR5، شاشة 15.6 بوصة، FHD (1920 × 1080) اطار رفيع LED، اوبونتو - اسود', '15050.10', 1, 'VOSTRO 3510 i7 Series\r\nBrand Dell\r\nSpecific Uses of the Multimedia Product\r\nScreen size 15.6 inch\r\nLinux operating system\r\nCPU Manufacturer Intel\r\nDescription of Dedicated Graphics Card\r\nblack color\r\nHard disk size 1 TB\r\nNumber of processors 4\r\nAbout this item\r\nDell Vostro 3510 Laptop - Intel Core i7-1165G7 11th Gen, 8GB RAM, 1TB HDD, NVIDIA GeForce MX350 GDDR5 Graphics, 15.6\" FHD (1920 x 1080) LED Narrow Edge, Ubuntu - carbon black', 'السلسلة	VOSTRO 3510 i7\r\nالعلامة التجارية	ديل\r\nاستخدامات محددة للمنتج	Multimedia\r\nحجم الشاشة	15.6 بوصة\r\nنظام التشغيل	لينكس\r\nمُصنِّع CPU	Intel\r\nوصف بطاقة الرسومات	Dedicated\r\nاللون	أسود\r\nحجم القرص الثابت	1 تيرا بايت\r\nعدد المعالجات	4\r\nحول هذه السلعة\r\nلابتوب ديل فوسترو 3510 - معالج انتل كورi7-1165G7 الجيل 11، ذاكرة رام سعة 8 جيجابايت، هارد HDD سعة 1 تيرابايت، بطاقة رسومات نفيديا جيفورس MX350 GDDR5، شاشة مقاس 15.6\"، FHD (1920 × 1080) حافة ضيقة باضاءة ليد، اوبونتو - اسود كربوني', 0, 'Dell Vostro 3510 Laptop - Intel Core i7-1165G7 11th Gen, 8GB RAM, 1TB HDD, NVIDIA GeForce MX350 GDDR5, 15.6 Inch, FHD (1920 x 1080) Thin LED Frame, Ubuntu - Black.png', 1, 300, 51, '2022-03-26 09:19:15', '2022-03-27 03:37:19'),
(67, '2021 Apple MacBook Pro (16-inch, Apple M1 Pro Chip with 10 Core CPU, 16″ GPU, 16GB RAM, 1TB SSD) - Space Gray', '2021 Apple MacBook Pro (16 بوصة ، شريحة Apple M1 Pro مع 10 Core CPU ، 16 ″ GPU ، 16 جيجا بايت رام ، 1 تيرا بايت SSD) - رمادي فلكي', '61900.00', 1, 'The Apple brand\r\nProduct dimensions 39.9 x 6.3 x 29 cm; 3.48 kg\r\n6 Lithium-ion batteries Requires batteries. (attached)\r\nThe manufacturer is Apple Computer\r\nSpace Gray color\r\nDisplay screen size 16 inch\r\nProcessor brand Apple\r\nProcessor Type Intel Core i9\r\nProcessor Speed ​​2.6 GHz\r\nNumber of processors 10\r\nRAM size 64 GB\r\nHard Disk Size 1 TB\r\nGraphics RAM Type DDR3 SDRAM\r\nIntegrated graphics card interface\r\nNumber of USB 2.0 3 . Ports\r\nMac hardware platform\r\nMac OS\r\nAre batteries included Yes\r\nLithium battery energy content 99.6Wh\r\nLithium battery packaging Batteries in equipment\r\nLithium battery weight 0.43 grams\r\n6 . Li-ion battery cells', 'العلامة التجارية	‎ابل\r\nأبعاد المنتج	‎39.9 x 6.3 x 29 سم; 3.48 كيلو جرام\r\nبطاريات	‎6 أيون الليثيوم يتطلب بطاريات. (مرفقة)\r\nالشركة المصنعة	‎ابل كومبيوتر\r\nلون	‎سبيس غراي\r\nحجم شاشة العرض	‎16 بوصة\r\nالعلامة التجارية للمعالج	‎Apple\r\nنوع المعالج	‎Intel Core i9\r\nسرعة المعالج	‎2.6 غيغاهرتز\r\nعدد المعالجات	‎10\r\nحجم ذاكرة الوصول العشوائي	‎64 غيغابايت\r\nحجم القرص الصلب	‎1 تيرا بايت\r\nنوع ذاكرة رام الخاصة بالرسوميات	‎DDR3 SDRAM\r\nواجهة بطاقة الرسومات	‎مدمجة\r\nعدد منافذ يو اس بي 2.0	‎3\r\nمنصة الأجهزة	‎Mac\r\nنظام التشغيل	‎Mac OS\r\nهل البطاريات مشمولة	‎نعم\r\nمحتوى طاقة بطارية الليثيوم	‎99.6 واط ساعي\r\nتغليف بطارية الليثيوم	‎البطاريات الموجودة في المعدات\r\nوزن بطارية الليثيوم	‎0.43 غرامات\r\nعدد خلايا بطارية ليثيوم أيون	‎6', 13683, '2021 Apple MacBook Pro (16-inch, Apple M1 Pro Chip with 10 Core CPU, 16″ GPU, 16GB RAM, 1TB SSD) - Space Gray.png', 1, 300, 53, '2022-03-26 09:19:15', '2022-03-27 03:37:19'),
(68, 'chepsi', 'شيبسي', '10.00', 3, 'Cheese flavored chips', 'شيبسي بطعم الجبنة ', 12635, 'chepsi.jpg', 1, 305, NULL, '2022-03-27 23:45:42', '2022-03-28 00:35:37'),
(69, 'feta', 'فيتا', '20.00', 1, 'feta is good', 'فيتا  اااسي', 12367, 'feta.png', 1, 306, NULL, '2022-03-27 23:45:42', '2022-03-29 12:30:49'),
(80, 'tv', 'شاشة ', '7000.00', 7, 'djdhhf hjhjdsa hjasjhsaj hjshjas', 'يتيااي اتيايساس اياسيتاسي يااسيسي اتاتياس', 12334, 'tv.jpg', 1, 304, 52, '2022-04-30 02:11:19', '2022-04-30 02:11:19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_details`
-- (See below for the actual view)
--
CREATE TABLE `products_details` (
`id` bigint(20) unsigned
,`name_en` varchar(255)
,`name_ar` varchar(255)
,`price` decimal(7,2)
,`quantity` smallint(3)
,`details_en` longtext
,`details_ar` longtext
,`code` smallint(5)
,`image` varchar(255)
,`status` tinyint(1)
,`subcategory_id` bigint(20)
,`brand_id` bigint(20)
,`created_at` timestamp
,`updated_at` timestamp
,`subcategory_name_en` varchar(50)
,`category_id` bigint(20) unsigned
,`category_name_en` varchar(50)
,`brand_name_en` varchar(50)
,`review_count` bigint(21)
,`review_avg` decimal(4,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `proder_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` mediumint(20) NOT NULL,
  `price` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`proder_id`, `order_id`, `quantity`, `price`) VALUES
(60, 12, 2, '20000'),
(60, 15, 2, '30000'),
(61, 11, 1, '10000'),
(63, 10, 1, '30000'),
(63, 13, 4, '15000'),
(63, 14, 1, '30000'),
(63, 15, 2, '60000'),
(64, 12, 2, '31000'),
(64, 13, 1, '16000'),
(66, 13, 2, '300000'),
(67, 11, 2, '40000');

-- --------------------------------------------------------

--
-- Table structure for table `product_spec`
--

CREATE TABLE `product_spec` (
  `spec_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1= > deliverd\r\n0 (not deliverd) (default)',
  `name_en` varchar(20) NOT NULL,
  `name_ar` varchar(20) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `status`, `name_en`, `name_ar`, `city_id`, `created_at`, `updated_at`) VALUES
(10, 1, 'shariqa', 'الشرقية', 4, '2022-03-20 01:31:40', '2022-03-22 01:31:40'),
(11, 1, 'egypt', 'مصر', 5, '2022-03-20 01:31:40', '2022-03-22 01:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rate` tinyint(1) NOT NULL DEFAULT 0,
  `commentt` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`user_id`, `product_id`, `rate`, `commentt`, `updated_at`, `created_at`) VALUES
(1, 60, 4, NULL, '2022-03-17 06:01:06', '2022-03-16 06:01:06'),
(1, 63, 5, NULL, '2022-04-01 01:42:24', '2022-03-27 14:40:09'),
(1, 64, 4, NULL, '2022-03-23 05:58:37', '2022-03-09 05:58:37'),
(1, 66, 3, NULL, '2022-03-17 05:58:20', '2022-03-16 05:58:20'),
(2, 63, 1, NULL, '2022-03-27 15:17:14', '2022-03-27 15:17:14'),
(2, 64, 5, NULL, '2022-04-01 01:34:46', '2022-03-27 14:40:09'),
(2, 67, 5, NULL, '2022-03-09 05:59:19', '2022-03-10 05:59:19'),
(3, 63, 5, 'gamad', '2022-03-22 06:03:09', '2022-03-22 06:03:09'),
(3, 66, 4, NULL, '2022-03-16 05:58:01', '2022-03-08 05:58:01'),
(3, 67, 4, NULL, '2022-03-08 06:00:00', '2022-03-06 06:00:00'),
(4, 63, 5, NULL, '2022-03-16 06:02:42', '2022-03-21 06:02:42'),
(4, 68, 5, NULL, '2022-03-15 06:01:51', '2022-03-14 06:01:51'),
(4, 69, 2, NULL, '2022-03-02 06:00:18', '2022-03-02 06:00:18'),
(32, 60, 3, NULL, '2022-03-27 15:16:57', '2022-03-27 15:16:57'),
(32, 63, 4, NULL, '2022-03-27 15:17:29', '2022-03-27 15:17:29'),
(32, 66, 5, 'excellent', '2022-04-01 01:34:52', '2022-03-27 14:38:55'),
(32, 67, 4, 'very good', '2022-03-27 14:38:55', '2022-03-27 14:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyyy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => active ,\r\n0 => not active',
  `image` varchar(255) DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name_en`, `name_ar`, `status`, `image`, `categorie_id`, `updated_at`, `created_at`) VALUES
(300, 'laptop', 'لابتوب', 1, NULL, 200, '2022-03-26 08:00:30', '2022-03-26 08:00:30'),
(301, 'mobiles', 'موبايلات', 1, NULL, 200, '2022-03-26 08:00:30', '2022-03-26 08:00:30'),
(302, 'dishes', 'اطباق', 1, NULL, 202, '2022-03-26 08:03:31', '2022-03-26 08:03:31'),
(303, 'tishert', 'تيشيرت', 1, NULL, 201, '2022-03-26 08:03:31', '2022-03-26 08:03:31'),
(304, 'tv', 'تليفزيونات', 1, NULL, 200, '2022-03-26 10:46:04', '2022-03-26 10:46:04'),
(305, 'snacks', 'سناكس', 1, NULL, 203, '2022-03-26 10:46:04', '2022-03-26 10:46:04'),
(306, 'cheese', 'جبن', 1, NULL, 203, '2022-03-26 10:47:08', '2022-03-26 10:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `gender` enum('m','f') NOT NULL,
  `verification_code` mediumint(5) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => active (default)\r\n0 >= blocked',
  `remmber_token` varchar(255) NOT NULL,
  `code_expired_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `forget_code` smallint(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `phone`, `email`, `image`, `gender`, `verification_code`, `status`, `remmber_token`, `code_expired_at`, `email_verified_at`, `forget_code`, `created_at`, `updated_at`) VALUES
(1, 'esraa', '', '05455332dxdf', '01112511731', 'esraa@dfdfdfdf', NULL, 'f', NULL, 1, '', NULL, NULL, NULL, '2022-03-20 01:28:10', '2022-03-21 22:43:23'),
(2, 'esso', '', '05455332dxdf', '01112514446', 'esso@dfdfdfdf', NULL, 'f', NULL, 1, '', NULL, NULL, NULL, '2022-03-20 01:28:10', '2022-03-21 22:43:34'),
(3, 'ahmed', 'ali', '12433345fdgdxcx', '01123415375', 'ahmed@yahoo.com', 'default.png', 'm', NULL, 1, '', '2022-03-28 00:39:04', '2022-03-28 00:39:04', NULL, '2022-03-28 00:42:43', '2022-03-28 00:42:43'),
(4, 'mohamed', 'ali', '566rdtt6743fg', '01172268493', 'mohamed@yahoo.com', 'default.png', 'm', NULL, 1, '', NULL, NULL, NULL, '2022-03-28 00:42:43', '2022-03-28 00:42:43'),
(32, 'esraa', 'ali', '$2y$10$OLyqYmOmq7oPt3NUgAubE.u.2ea10mhwaljBXeveXX.twq2tIuufe', '01121458228', 'esraa.ali786392@gmail.com', 'defaukt.jpg', 'm', 33532, 1, '', NULL, '2022-03-26 07:52:39', NULL, '2022-03-26 07:50:40', '2022-03-26 07:52:39'),
(34, 'esraa', 'aliiii', '$2y$10$sT12axuzO2S5VFcC7eR0.eUQxQ.M4GStlXe98oOLpBkQ/8xqnb2zu', '01121637821', 'esraarabea357@gmail.com', '6246801cd7888.jpg', 'f', 51982, 1, '', '2022-04-01 05:16:29', '2022-04-01 04:29:58', 32767, '2022-04-01 04:29:38', '2022-04-01 05:13:29');

-- --------------------------------------------------------

--
-- Structure for view `products_details`
--
DROP TABLE IF EXISTS `products_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_details`  AS SELECT `products`.`id` AS `id`, `products`.`name_en` AS `name_en`, `products`.`name_ar` AS `name_ar`, `products`.`price` AS `price`, `products`.`quantity` AS `quantity`, `products`.`details_en` AS `details_en`, `products`.`details_ar` AS `details_ar`, `products`.`code` AS `code`, `products`.`image` AS `image`, `products`.`status` AS `status`, `products`.`subcategory_id` AS `subcategory_id`, `products`.`brand_id` AS `brand_id`, `products`.`created_at` AS `created_at`, `products`.`updated_at` AS `updated_at`, `subcategories`.`name_en` AS `subcategory_name_en`, `categories`.`id` AS `category_id`, `categories`.`name_en` AS `category_name_en`, `brands`.`name_en` AS `brand_name_en`, count(`review`.`product_id`) AS `review_count`, if(round(avg(`review`.`rate`),0) is null,0,round(avg(`review`.`rate`),0)) AS `review_avg` FROM ((((`products` left join `brands` on(`brands`.`id` = `products`.`brand_id`)) join `subcategories` on(`products`.`subcategory_id` = `subcategories`.`id`)) join `categories` on(`categories`.`id` = `subcategories`.`categorie_id`)) left join `review` on(`products`.`id` = `review`.`product_id`)) GROUP BY `products`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_adress` (`user_id`),
  ADD KEY `adress_region` (`region_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `national_id` (`national_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `cart_user_fk` (`product_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`,`product_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `coupon_product`
--
ALTER TABLE `coupon_product`
  ADD PRIMARY KEY (`product_id`,`coupon_id`),
  ADD KEY `coupon_product_fk` (`coupon_id`),
  ADD KEY `product_id` (`product_id`,`coupon_id`) USING BTREE;

--
-- Indexes for table `coupon_user`
--
ALTER TABLE `coupon_user`
  ADD PRIMARY KEY (`user_id`,`coupon_id`),
  ADD KEY `coupon_user_fk` (`coupon_id`),
  ADD KEY `user_id` (`user_id`,`coupon_id`) USING BTREE;

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `fav_product_fk` (`product_id`),
  ADD KEY `user_id` (`user_id`,`product_id`) USING BTREE;

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordes`
--
ALTER TABLE `ordes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_fk` (`user_id`);

--
-- Indexes for table `product-offer`
--
ALTER TABLE `product-offer`
  ADD PRIMARY KEY (`offer_id`,`product_id`),
  ADD KEY `offer_product_fk` (`product_id`),
  ADD KEY `offer_id` (`offer_id`,`product_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `brand_product_fk` (`brand_id`),
  ADD KEY `subcat_product_fk` (`subcategory_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`proder_id`,`order_id`),
  ADD KEY `order_fk_product` (`order_id`),
  ADD KEY `proder_id` (`proder_id`,`order_id`) USING BTREE;

--
-- Indexes for table `product_spec`
--
ALTER TABLE `product_spec`
  ADD PRIMARY KEY (`spec_id`,`product_id`),
  ADD KEY `product_fk_spe` (`product_id`),
  ADD KEY `spec_id` (`spec_id`,`product_id`) USING BTREE;

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_city_fk` (`city_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `review_product_fk` (`product_id`),
  ADD KEY `user_id` (`user_id`,`product_id`) USING BTREE;

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Categories_subcategories_FK` (`categorie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `adress_region` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`),
  ADD CONSTRAINT `user_adress` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `user_cart_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fk_cart` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `coupon_product`
--
ALTER TABLE `coupon_product`
  ADD CONSTRAINT `coupon_product_fk` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`),
  ADD CONSTRAINT `product_coupon_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `coupon_user`
--
ALTER TABLE `coupon_user`
  ADD CONSTRAINT `coupon_user_fk` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`),
  ADD CONSTRAINT `user_coupon_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fav_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ordes`
--
ALTER TABLE `ordes`
  ADD CONSTRAINT `order_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product-offer`
--
ALTER TABLE `product-offer`
  ADD CONSTRAINT `offer_product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `profuct_offer_fk` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `brand_product_fk` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `subcat_product_fk` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `order_fk_product` FOREIGN KEY (`order_id`) REFERENCES `ordes` (`id`),
  ADD CONSTRAINT `product_order_fk` FOREIGN KEY (`proder_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_spec`
--
ALTER TABLE `product_spec`
  ADD CONSTRAINT `product_fk_spe` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spec_id_prod` FOREIGN KEY (`spec_id`) REFERENCES `specs` (`id`);

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `region_city_fk` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `review_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `Categories_subcategories_FK` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
