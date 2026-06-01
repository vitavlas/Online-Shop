# Online Shop

## 💡 Resources

**Color Palette**

https://coolors.co/palette/dabfff-907ad6-4f518c-2c2a4a-7fdeff  
https://www.colorhunt.co/palette/362f4f5b23ff008bffe4ff30

## ⚙️ Settings

### Apache

```
# Virtual Hosts
#
<VirtualHost _default_:80>
  ServerName localhost
  ServerAlias localhost
  DocumentRoot "${INSTALL_DIR}/www"
  <Directory "${INSTALL_DIR}/www/">
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require local
  </Directory>
</VirtualHost>

# Online Shop
<VirtualHost *:80>
    ServerName online-shop.local
    DocumentRoot "${INSTALL_DIR}/www/online-shop/public"

    <Directory "${INSTALL_DIR}/www/online-shop/public/">
        AllowOverride All
        Require local
    </Directory>
</VirtualHost>
```

### Database

**Table 'products'**

``` SQL
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2026 at 09:30 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_depot`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```

**Filling table 'products' with test data**
``` SQL
INSERT INTO `products_2` (`image`, `title`, `price`, `description`, `category`) VALUES
('javascript.jpg', 'Learn JavaScript Quickly: A Complete Beginner’s Guide to Learning JavaScript', 15.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
('node.jpg', 'Node.js: Novice to Ninja 1st Edition', 39.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
('machine-learning.jpg', 'JavaScript from Beginner to Professional: Learn JavaScript quickly', 34.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
('coding.jpg', 'Coding All-in-One For Dummies', 19.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books'),
('star-wars.jpg', 'Star Wars Squadrons', 39.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
('tank.jpg', 'M4 Tank Brigade', 14.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
('farcry.jpg', 'Far Cry Primal - PC Standard Edition', 34.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
('batlefield.jpg', 'Battlefield 3 [Download]', 49.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games'),
('phone-1.jpg', 'SAMSUNG Galaxy S22 Ultra Cell Phone,', 1.136, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
('phone-2.jpg', 'Apple iPhone 12 Pro, 512GB', 919.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
('phone-3.jpg', 'Moto G Power | 2021 | 3-Day battery', 160.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
('phone-4.jpg', 'Moto G7 Plus | Unlocked | Made for US by Motorola', 201, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones'),
('mic-1.jpg', 'Rode PodMic Cardioid Dynamic Broadcast Microphone', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
('mic-2.jpg', 'Audio-Technica AT2020 Cardioid', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
('mic-3.jpg', 'Elgato Wave:3 - Premium Studio Quality USB ', 149.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
('mic-4.jpg', 'Razer Seiren X USB Streaming Microphone: Professional Grade', 59, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones'),
('tablet-1.jpg', 'SAMSUNG SM-T290NZKAXAR, Galaxy Tab A 8.0 32 GB', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets'),
('tablet-2.jpg', 'Lectrus Tablet Customized Cover, Android 9.0', 119, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets'),
('tablet-3.jpg', '10 Inch Tablet and Tablet Case Bundle, Android 9.0 Tablet 2GB RAM', 149.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets'),
('tablet-4.jpg', 'Lenovo IdeaTab A2109 9-Inch 16 GB Tablet', 199, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets');
```

## 🧱 Project Structure

```
digital-depot/
│
├── public/
│   ├── index.php
│   ├── css/
│   ├── js/
│   └── img/
│
├── app/
│   ├── core/
│   │   ├── Router.php
│   │   ├── Database.php
│   │
│   ├── controllers/
│   │   └── HomeController.php
│   │
│   ├── models/
│   │   └── Product.php
│   │
│   └── views/
│       ├── layouts/
│       │   └── main.php
│       │
│       ├── home/
│       │   └── index.php
│       │
│       └── includes/
│           ├── nav.php
│           ├── header.php
│           ├── footer.php
│           └── product-card.php
│
├── config/
│   └── db.php
│   └── routes.php
```