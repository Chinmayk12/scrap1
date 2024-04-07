-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 05:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrap1`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `name`, `email`, `mobile`, `address`) VALUES
(1, 7, 'Chinmay Karodpati', 'karodpatichinmay12@gmail.com', '08010944027', 'Plot no. 10 Gat no. 5/1 Dadawadi Ja'),
(2, 7, 'Chinmay Karodpati', 'chinmay@gmail.com', '0123456789', 'Akurdi Pune'),
(3, 11, 'Yashwant Karnawat', 'kyashwant3006@gmail.com', '0123456789', 'Bajrang Housing Society Pune 411062');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `mobile_no`, `email_id`, `password`) VALUES
(1, 'chinmay Karodpati', '6563463883', 'chinmayk234@gmail.com @gmail.com', 'chinmay123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `totalprice` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `qty`, `totalprice`, `user_id`) VALUES
(49, 19, 1, 2000, 4),
(50, 21, 1, 200, 4),
(51, 20, 3, 1500, 4),
(61, 21, 1, 200, 1),
(62, 20, 1, 500, 1),
(63, 19, 1, 2000, 1),
(65, 26, 5, 12500, 6),
(69, 30, 1, 500, 7),
(71, 26, 1, 2500, 7),
(72, 27, 1, 1500, 7);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `user_id`) VALUES
(1, 'manoj mahajan', 'manojmahajan1234@gmail.com', 'demo', 'demo', 1),
(2, 'manoj totalprice', 'manojmahajan1111@gmail.com', 'manoj', 'manoj', 1),
(3, 'Siddhesh Avinash Chaudhari', 'siddheshavic67@gmail.com', 'Good', 'zrxgchvjbkn', 6),
(4, 'Siddhesh Avinash Chaudhari', 'siddheshavic67@gmail.com', 'Good', 'Good', 7);

-- --------------------------------------------------------

--
-- Table structure for table `creative_product`
--

CREATE TABLE `creative_product` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `name` text NOT NULL,
  `price` int(100) NOT NULL,
  `description` text NOT NULL,
  `steps` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creative_product`
--

INSERT INTO `creative_product` (`id`, `uid`, `name`, `price`, `description`, `steps`, `image`) VALUES
(3, 7, 'Wall Hangings', 100, 'The beautiful macrame wall decor .', 'Wooden dowel or branch for hanging.\nScissors.\nOptional: beads, feathers, or other elements.', './add-img/product.jpg'),
(4, 7, 'Wedding Gift', 250, 'AvisaCraft Customized Handmade Gift for Love, Anniversary.', 'Choose meaningful materials.\r\nPersonalize design.\r\nCraft with care.', './add-img/71OaQIL+Y7L._AC_UF1000,1000_QL80_.jpg'),
(5, 7, 'Brown Blass Boho', 150, 'Handcrafted Decorative Vase_made With Waste', '', './add-img/wastebottlevass-1-d5de5f14-384f-4e8b-9036-9575f3d1572f-500x500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `photos` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `tail` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `totalprice` varchar(15) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `country`, `state`, `tail`, `city`, `address`, `totalprice`, `payment`, `user_id`) VALUES
(10, 'chinmay', 'karodpati', 'chinmayk234@gmail.com', 2147483647, 'India', 'maharashtra', 'jalgaon', 'jalgaon', 'near by state bank ,shiv colony jalgaon', '2800', 'COD', '1'),
(11, 'devesh', 'patil', 'manojmahajan765@gmail.com', 2147483647, 'India', 'maharastra', 'dharangaon', 'jalgaon', 'at post varad bk', '2800', 'COD', '1'),
(12, 'devesh', 'patil', 'manojmahajan765@gmail.com', 2147483647, 'India', 'maharastra', 'dharangaon', 'jalgaon', 'at post varad bk', '2800', 'COD', '1'),
(13, 'Siddhesh', 'Chaudhari', 'siddheshavic67@gmail.com', 2147483647, 'India', 'maharashtra', 'nothing', 'Jalgaon', 'jalgaon', '12600', 'COD', '6'),
(14, 'Siddhesh', 'Chaudhari', 'siddheshavic67@gmail.com', 2147483647, 'India', 'MAHARASHTRA', 'nothing', 'Jalgaon', 'Ganesh Colony Plot no. 112B, Jalgaon', '300', 'COD', '7'),
(15, 'Siddhesh', 'Chaudhari', 'siddheshavic67@gmail.com', 2147483647, 'India', 'MAHARASHTRA', 'nmn', 'Jalgaon', 'Ganesh Colony Plot no. 112B, Jalgaon', '100', 'COD', '7'),
(16, 'Chinmay Karodpati', '', 'karodpatichinmay12@gmail.com', 0, '', '', '', '', 'Plot no. 10 Gat no. 5/1 Dadawadi Ja', '4600', 'COD', '7');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` text NOT NULL,
  `message` text NOT NULL,
  `image` text NOT NULL,
  `comments` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `name`, `message`, `image`, `comments`, `description`) VALUES
(15, 7, 'Siddhesh Chaudhari', 'To recycle abrasive blasting material such as baking soda, sand or walnut shells, keep the abrasive material in an enclosed environment. ', './add-img/2b9306d18762adec413523767b101fe8.jpg', '', 'Handcrafted Glass for Showcase'),
(16, 7, 'Chinmay Karodpati', 'A sustainable storage solution crafted from recycled plastic, adorned with intricate decorative details for a touch of elegance.', './add-img/Best-out-of-waste-ideas-to-decorate-your-home-27.png', '', 'Ecobox'),
(18, 7, 'Yashwant Karnawat', 'Transform ordinary bottles into enchanting lamps with ease, perfect for eco-conscious and stylish home decor.', './add-img/shutterstock_608618687.jpg', '', 'EcoGlow Bottle Lamps'),
(19, 7, 'Soham Ghulane', 'Crafted from recycled newspapers and magazines, these coasters add eco-friendly style to any tabletop.', './add-img/Best-out-of-waste-ideas-to-decorate-your-home-07.png', '', 'Newsprint Charm Coaster Set');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `category`, `price`, `image`, `detail`, `type`, `user_id`) VALUES
(20, 'tyres', '1', '500', 'add-img/scrap-tires.png', 'old scrap tyres.Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy. Accus labore stet, est lorem sit diam sea et justo, amet at lorem et eirmod ipsum diam et rebum kasd rebum.', 'scrap', 1),
(26, 'Protect the Animals Mugs', '2', '2500', 'add-img/p2.jpg', 'Potter and animal lover JoAnn Stratakos created this series of custom mugs just for us—and to help give endangered animals a fighting chance.', 'creative', 6),
(27, 'Recycled Glass Elephants Night Light', '2', '1500', 'add-img/26462_1_640px.jpg', 'A glowing homage to motherhood, this recycled glass nightlight is brimming with storybook appeal.', 'creative', 6),
(28, 'Bishnupur Handpainted Terracotta Earrings', '2', '200', 'add-img/Q8A0511 (1).jpg', 'This beautiful handcrafted modern terracotta earrings is the perfect selection to wear with ethnic dresses for parties or casual use.', 'creative', 7),
(29, 'Handmade Applique Work Notebook', '2', '300', 'add-img/E9A9848.jpg', 'This notebook fulfils all your needs. You use the notebook as a student, working professional, or homemaker; it provides plenty of space for notes, calculations, lists, doodling and more.', 'creative', 7),
(30, 'Flower Art Work Special Visitor Notebook', '2', '500', 'add-img/IMG_5244_3d17eeff-059e-44f8-94cd-64a4fec10761.jpg', '  Flower Art Work Special Visitor Notebook (4.3 x 5.5 in)', 'creative', 8),
(31, 'Sling Bag', '2', '1800', 'add-img/potlisbagsheet2-55.jpg', '  Zardozi Hand Embroidered Tussar Silk Clutch/Sling Bag', 'creative', 8),
(32, 'Music Man Stand', '2', '1800', 'add-img/0X2A0264_9e34df47-aa37-49c5-adfe-ecb02bf449e5.jpg', 'Bastar Tribal Wrought Iron Music Man Stand', 'creative', 8),
(33, 'Ceramic Mugs (Set of 2, 350 ml)', '2', '590', 'add-img/0Q8A6856.jpg', 'Ceramic is known to be a healthier option in serveware and is non-toxic. These handmade and hand glazed products are crafted from premium quality clay by the studio potters of Rajasthan.', 'creative', 8),
(34, 'Battery ', '8', '750', 'add-img/inverter-battery-scrap.jpg', 'Automobile Battery Scrap, 2 Volt Battery Scrap, SMF Battery Scrap.', 'scrap', 8),
(35, 'RAM', '8', '500', 'add-img/ram-scrap-1000x1000.jpg', 'Mixed E Waste Scrap.', 'scrap', 8),
(36, 'old Television', '8', '2500', 'add-img/old-tv-set-removal-services.jpg', 'Old scrap wooden Television', 'scrap', 8),
(37, 'Newspaper', '9', '100', 'add-img/vhgf-500x500.jpg', 'Newspaper from 1st of Jan 2013 to 31st of June 2013', 'scrap', 6),
(38, 'Motors', '8', '200', 'add-img/OIP (12).jpg', 'Old Scrap Motors', 'scrap', 6),
(39, 'Monitors', '8', '200', 'add-img/OIP (13).jpg', 'Old Scrap Computer Monitors', 'scrap', 6),
(40, 'Mirror', '10', '200', 'add-img/8fcec5de5634bd55fddf02a159392178.jpg', 'Old Scrap Metal Mirror', 'scrap', 6),
(42, 'Wall Hangings', '2', '150', 'add-img/product.jpg', 'Something Creative', 'customize', 7),
(43, 'Glass Bottle', '13', '100', 'add-img/Picture1.jpg', '', 'scrap', 7),
(44, 'Lotus Blossom Chain', '2', '200', 'add-img/Picture3.jpg', 'A graceful necklace adorned with artificial lotus blooms, radiating serene beauty in a single chain', 'creative', 7),
(45, 'Seal Bracelet', '14', '150', 'add-img/Picture4.jpg', 'Upcycled from discarded can seals, the Seal Bracelet features an eco-chic design, transforming waste into wearable art, perfect for the conscious fashion enthusiast.', 'creative', 7),
(46, 'Denim Tote', '15', '350', 'add-img/Picture5.jpg', 'Fashioned from repurposed old jeans and fabric scraps, the Denim Revival Tote embodies sustainable style, blending rugged charm with eco-conscious craftsmanship for a chic and versatile accessory', 'creative', 7),
(47, 'Fabric Waste Purse', '15', '300', 'add-img/Picture6.jpg', 'Fabric waste purse crafted from upcycled materials, redefines eco-friendly fashion', 'creative', 7),
(48, 'Radha Krishna Earrings', '2', '100', 'add-img/Picture7.jpg', 'Unique adornments crafted from repurposed can caps, embodying the divine essence of Radha and Krishna in sustainable style.', 'creative', 7),
(49, 'Denim Earrings', '15', '150', 'add-img/Picture8.jpg', 'Fashion-forward accessories handcrafted from recycled denim, adding a touch of sustainable chic to any ensemble.', 'creative', 7),
(51, 'Popsicle Memories Photo Frame', '2', '200', 'add-img/Picture10.jpg', 'Crafted from repurposed ice cream sticks, preserving your cherished moments with a touch of nostalgic charm.', 'creative', 7),
(52, 'Denim Den Organizer: ', '15', '300', 'add-img/Picture12.jpg', 'A stylish and functional cupboard organizer made from repurposed denim jeans, adding a touch of rugged charm to your storage solutions.', 'customize', 7),
(53, 'Timber Tweets Bird Feeder:', '16', '350', 'add-img/Picture13.jpg', ' A rustic wooden bird feeder, offering a cozy haven for feathered friends while adding natural charm to your outdoor space.', 'customize', 7),
(54, 'Nut & Bolt Critter Sculpture: ', '14', '759', 'add-img/Picture14.jpg', 'A whimsical squirrel sculpture ingeniously crafted from recycled bearings, bolts, and chains, adding industrial charm to your living area as a captivating showcase piece..', 'customize', 7),
(55, 'Wood Fusion Shelf: ', '16', '849', 'add-img/Picture15.jpg', 'A versatile shelf handcrafted from repurposed wood waste and rods, providing functional storage and display space while reducing environmental impact with its sustainable design.', 'customize', 7),
(56, 'Shattered Splendor Frame:', '16', '339', 'add-img/Picture16.jpg', ' A bespoke frame crafted from meticulously arranged broken glass pieces, offering a unique and personalized showcase for your cherished memories.', 'customize', 7),
(57, 'Cement Crescendo Hand Headphone Stand', '17', '559', 'add-img/Picture17.jpg', 'An artistic headphone stand shaped like a hand, meticulously crafted from white cement, offering a stylish and functional way to showcase your headphones.', 'creative', 7),
(58, 'Minion Headphone Holder', '17', '349', 'add-img/Picture18.jpg', 'Transforming an old minion-themed pen stand into a creative headphone holder, offering a playful and functional way to keep your headphones organized and easily accessible.', 'creative', 7),
(59, 'Wooden Wonder iPhone 14 Case:', '16', '649', 'add-img/Picture19.jpg', 'A sleek and stylish phone case crafted from premium wood, offering protection and a touch of natural elegance to your iPhone 14.', 'creative', 7),
(60, 'Shawl & Handbag for Laptop', '17', '349', 'add-img/Picture20.jpg', 'Shawl & Handbag Fusion Laptop Carrier A unique laptop bag repurposed from an old shawl and handbag, blending fashion with functionality for a sustainable and stylish way to carry your laptop', 'customize', 7),
(61, 'Horse Metal Sculpture', '2', '999', 'add-img/WhatsApp Image 2024-04-07 at 00.25.51_e5c101c9.jpg', 'Something Creative', 'creative', 7),
(62, 'Painting', '2', '889', 'add-img/WhatsApp Image 2024-04-07 at 00.25.52_9a2e09a7.jpg', 'Wallart Nature Painting.', 'creative', 7),
(63, 'Owl metal sculpture', '14', '999', 'add-img/WhatsApp Image 2024-04-07 at 00.25.52_48d98062.jpg', '\"Exquisite handcrafted owl metal sculpture, a stunning addition to any space, intricately crafted.\"', 'customize', 7),
(64, 'Ganpati Bappa Painting', '2', '159', 'add-img/WhatsApp Image 2024-04-07 at 00.25.52_5cf74eb9.jpg', 'Ganpati Bappa Painting.', 'creative', 7),
(65, 'Earrings Stand', '14', '549', 'add-img/WhatsApp Image 2024-04-07 at 00.30.37_aedc5bfc.jpg', 'Earrings Stand made from Metal', 'customize', 7),
(66, 'Spice Box', '16', '159', 'add-img/WhatsApp Image 2024-04-07 at 00.30.53_c3a4a3dc.jpg', 'Spice Box made from wood.', 'customize', 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`cat_id`, `cat_name`, `type`) VALUES
(2, 'art', 'Creative'),
(8, 'Electronics', 'scrap'),
(9, 'Paper', 'scrap'),
(10, 'Other', 'Scrap'),
(13, 'Glass', 'Scrap'),
(14, 'Metal', 'Creative'),
(15, 'Cloth', 'Creative'),
(16, 'Wooden', 'Creative'),
(17, 'Tech', 'Creative');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `mobile_no`, `email`, `password`) VALUES
(6, 'Siddhesh Avinash Chaudhari', '07721928536', 'siddheshavic67@gmail.com', '0000'),
(7, 'Chinmay Karodpati', '0123456789', 'chinmay@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `wish`
--

CREATE TABLE `wish` (
  `wish_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wish`
--

INSERT INTO `wish` (`wish_id`, `product_id`, `user_id`) VALUES
(16, 20, 1),
(17, 21, 1),
(18, 26, 6),
(19, 30, 6),
(20, 32, 6),
(21, 34, 6),
(22, 39, 6),
(23, 37, 6),
(24, 26, 7),
(25, 27, 7),
(26, 28, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creative_product`
--
ALTER TABLE `creative_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `creative_product`
--
ALTER TABLE `creative_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wish`
--
ALTER TABLE `wish`
  MODIFY `wish_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
