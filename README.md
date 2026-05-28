# Online Shop

## 💡 Resources

**Color Palette**

https://coolors.co/palette/dabfff-907ad6-4f518c-2c2a4a-7fdeff  
https://www.colorhunt.co/palette/362f4f5b23ff008bffe4ff30

**Apache**

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

**Database**

```
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
│   │   ├── App.php
│   │   ├── Router.php
│   │   ├── Controller.php
│   │   ├── Database.php
│   │   └── View.php
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
│   └── config.php
```