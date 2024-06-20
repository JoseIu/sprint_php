USE hotel_miranda;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`(
`_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`date` DATE NOT NULL,
`customer_name` VARCHAR(50) NOT NULL,
`customer_email` VARCHAR(50) NOT NULL,
`customer_phone` VARCHAR(50) NOT NULL,
`subect` VARCHAR(50) NOT NULL,
`message` TEXT NOT NULL,
`archived` BOOLEAN DEFAULT FALSE
);


SELECT * FROM `contact`

INSERT INTO `contact` (`date`,`customer_name`,`customer_email`,`customer_phone`,`subect`,`message`)

VALUES()