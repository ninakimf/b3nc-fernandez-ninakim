CREATE TABLE `categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `roles` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`email_address` varchar(255) NOT NULL,
	`role_id` int(11) NOT NULL,
	`image` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`delivery_address` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`price` DECIMAL(255) NOT NULL,
	`category_id` int(11) NOT NULL,
	`stocks_id` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`order_date` TIMESTAMP(11) NOT NULL,
	`user_id` varchar(255) NOT NULL,
	`ref_number` varchar(255) NOT NULL UNIQUE,
	`status_id` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_details` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`order_id` int(11) NOT NULL,
	`quantity` DECIMAL NOT NULL,
	`item_id` int NOT NULL,
	`price` DECIMAL NOT NULL,
	`subtotal` DECIMAL NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `status` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL,
	`order_id` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `stocks` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`item_id` int(11) NOT NULL,
	`quantity` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk1` FOREIGN KEY (`stocks_id`) REFERENCES `stocks`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`status_id`) REFERENCES `status`(`id`);

ALTER TABLE `order_details` ADD CONSTRAINT `order_details_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

ALTER TABLE `order_details` ADD CONSTRAINT `order_details_fk1` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`);

ALTER TABLE `order_details` ADD CONSTRAINT `order_details_fk2` FOREIGN KEY (`price`) REFERENCES `items`(`price`);

ALTER TABLE `status` ADD CONSTRAINT `status_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

ALTER TABLE `stocks` ADD CONSTRAINT `stocks_fk0` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`);

