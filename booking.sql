USE hotel_miranda

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `gues_name` VARCHAR(50) NOT NULL,
  `gues_lastName` VARCHAR(50) NOT NULL,
  `reservation_id` VARCHAR(50) NOT NULL,
  `order_date` DATE NOT NULL,
  `check_in` DATE NOT NULL,
  `check_out` DATE NOT NULL,

  `room_number` INT NOT NULL,
  `room_id` INT NOT NULL,
  `room_type` VARCHAR(32) NOT NULL,
  `specialRequest` TEXT NOT NULL,
  `status` VARCHAR(32) NOT NULL,
  
  FOREIGN KEY (room_id) REFERENCES room(_id) ON DELETE CASCADE
);

INSERT INTO `booking` (`gues_name`,`gues_lastName`, `reservation_id`, `order_date`, `check_in`, `check_out`, `room_number`, `room_id`, `room_type`, `specialRequest`, `status`)
VALUES ('John', 'Doe', '1', '2021-01-01', '2021-01-02', '2021-01-03', 1, 1, 'Suite', 'No smoking', 'pending');