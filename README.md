# Digital Depot

Digital Depot is a simple e-commerce web application built with PHP using a custom MVC architecture. The project demonstrates basic principles of routing, controllers, models, views, reusable components, and database interaction.  

This project is intentionally built without a PHP framework in order to demonstrate the basic concepts behind an MVC web application.

## ✨ Features

- Product catalog
- Simple product filtering by category
- Detailed product information
- Custom MVC architecture
- MySQL database integration using PDO

## 🧱 Project Structure

The project uses `index.php` as a simple front controller. All requests are passed to the custom router, which determines the corresponding controller and action.

```
FIXME:
DIGITAL-DEPOT/
├── app/
│   ├── controllers/
│   │   ├── PageController.php
│   │   └── ProductController.php
│   │
│   ├── core/
│   │   ├── Controller.php
│   │   ├── Database.php
│   │   └── Router.php
│   │
│   ├── helpers/
│   │   └── helpers.php
│   │
│   ├── models/
│   │   └── Product.php
│   │
│   └── views/
│       ├── about/
│       │   └── index.php
│       │
│       ├── contacts/
│       │   └── index.php
│       │
│       ├── home/
│       │   └── index.php
│       │
│       ├── includes/
│       │   ├── category-nav.php
│       │   ├── footer.php
│       │   ├── header.php
│       │   ├── nav.php
│       │   └── product-card.php
│       │
│       └── layouts/
│           └── main.php
│
├── config/
│   ├── db.php
│   └── routes.php
│
├── public/
│   ├── css/
│   ├── img/
│   ├── js/
│   ├── .htaccess
│   └── index.php
│
├── .htaccess
└── README.md
```

### Request Flow

A typical request follows this flow:  

`Browser → public/index.php → Router → Controller → Model → Database → Controller → View → Browser`

### Architecture

The application follows a lightweight custom MVC structure:

- **Controllers** process requests and prepare data for views
- **Models** handle database-related operations
- **Views** are responsible for rendering HTML
- **Router** matches the requested URI to a controller action
- **Helpers** contain reusable functions that are not tied to a specific class
- **Config** contains application configuration (db connection, routes etc.)

## ⚙️ Settings

### Database

The application uses MySQL for storing product data with the following tables: categories and products.

```sql
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2026 at 10:01 PM
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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'books'),
(2, 'games'),
(3, 'phones'),
(4, 'tablets'),
(5, 'microphones');

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
  `category` int UNSIGNED DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_categories` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `category`, `meta_description`, `meta_keywords`) VALUES
(22, 'Learn JavaScript Quickly: A Complete Beginner’s Guide to Learning JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'javascript.jpg', 15.99, 1, NULL, NULL),
(23, 'Node.js: Novice to Ninja 1st Edition', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'node.jpg', 39.95, 1, NULL, NULL),
(24, 'JavaScript from Beginner to Professional: Learn JavaScript quickly', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'machine-learning.jpg', 34.95, 1, NULL, NULL),
(25, 'Coding All-in-One For Dummies', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'coding.jpg', 19.99, 1, NULL, NULL),
(26, 'Star Wars Squadrons', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'star-wars.jpg', 39.99, 2, NULL, NULL),
(27, 'M4 Tank Brigade', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tank.jpg', 14.95, 2, NULL, NULL),
(28, 'Far Cry Primal - PC Standard Edition', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'farcry.jpg', 34.95, 2, NULL, NULL),
(29, 'Battlefield 3 [Download]', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'batlefield.jpg', 49.99, 2, NULL, NULL),
(30, 'SAMSUNG Galaxy S22 Ultra Cell Phone,', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phone-1.jpg', 1.14, 3, NULL, NULL),
(31, 'Apple iPhone 12 Pro, 512GB', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phone-2.jpg', 919.99, 3, NULL, NULL),
(32, 'Moto G Power | 2021 | 3-Day battery', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phone-3.jpg', 160.95, 3, NULL, NULL),
(33, 'Moto G7 Plus | Unlocked | Made for US by Motorola', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phone-4.jpg', 201.00, 3, NULL, NULL),
(34, 'Rode PodMic Cardioid Dynamic Broadcast Microphone', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'mic-1.jpg', 99.00, 5, NULL, NULL),
(35, 'Audio-Technica AT2020 Cardioid', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'mic-2.jpg', 99.00, 5, NULL, NULL),
(36, 'Elgato Wave:3 - Premium Studio Quality USB ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'mic-3.jpg', 149.95, 5, NULL, NULL),
(37, 'Razer Seiren X USB Streaming Microphone: Professional Grade', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'mic-4.jpg', 59.00, 5, NULL, NULL),
(38, 'SAMSUNG SM-T290NZKAXAR, Galaxy Tab A 8.0 32 GB', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablet-1.jpg', 99.00, 4, NULL, NULL),
(39, 'Lectrus Tablet Customized Cover, Android 9.0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablet-2.jpg', 119.00, 4, NULL, NULL),
(40, '10 Inch Tablet and Tablet Case Bundle, Android 9.0 Tablet 2GB RAM', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablet-3.jpg', 149.95, 4, NULL, NULL),
(41, 'Lenovo IdeaTab A2109 9-Inch 16 GB Tablet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablet-4.jpg', 199.00, 4, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

### Database Connection

Update the database connection settings in config/database.php according to **your** local MySQL environment.

### Apache

Add the following Virtual Host configuration to the Apache configuration file:

```
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

## 🚀 Getting Started

The project can be run using a local environment such as WAMP.

1. Clone the repository [https://github.com/vitavlas/Online-Shop.git](https://github.com/vitavlas/Online-Shop.git)
2. Create a MySQL database named `digital_depot`
3. Import the SQL file as described in **Settings → Database**
4. Open the project through your local web server
