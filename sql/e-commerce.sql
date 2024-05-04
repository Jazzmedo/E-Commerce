/* Database Name = "shop_db" like in config.php*/
CREATE TABLE `user_form` (
    `id` int(100) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4;

CREATE TABLE `cart` (
    `id` int(100) NOT NULL AUTO_INCREMENT,
    `user_id` int(100) NOT NULL,
    `name` varchar(100) NOT NULL,
    `price` varchar(100) NOT NULL,
    `image` varchar(100) NOT NULL,
    `quantity` int(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4;

CREATE TABLE `products` (
    `id` int(100) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `price` varchar(100) NOT NULL,
    `image` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4;
/*this is joe*/
/*this is zuz*/