USE hotel_miranda;
DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `room_number` INT NOT NULL,
  `room_type` VARCHAR(32) NOT NULL,
  `description` TEXT NOT NULL,
  `offer`BOOLEAN NOT NULL,
  `offer_price` INT NOT NULL,
  `price` INT NOT NULL,
  `status` BOOLEAN NOT NULL
);

DROP TABLE IF EXISTS `room_images`;
CREATE TABLE `room_images`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`room_id` INT NOT NULL,
    `image` TEXT NOT NULL,
    
    FOREIGN KEY (room_id) REFERENCES room(_id) ON DELETE CASCADE
);

DROP TABLE IF EXISTS `amenities`;
CREATE TABLE `amenities` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL
);
INSERT INTO `amenities` ( `name`) VALUES ( 'WiFi'), ( 'TV'), ( 'Air Conditioning'), ( 'Safe'), ('Coffee Maker');


DROP TABLE IF EXISTS `room_amenities`;
CREATE TABLE `room_amenities` (
  `room_id` int NOT NULL,
  `amenity_id` int NOT NULL,
  
   FOREIGN KEY (room_id) REFERENCES room(_id) ON DELETE CASCADE,
   FOREIGN KEY (amenity_id) REFERENCES amenities(id) ON DELETE CASCADE
);

INSERT INTO `room` (`room_number`,`room_type`,`description`,`offer`,`offer_price`,`price`,`status`)
 VALUES 
(1, 'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',TRUE,20,500,TRUE), 
(2, 'Single Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',FALSE,0,200,TRUE);

INSERT INTO `room_images` (`room_id`,`image`) 
VALUES
(1,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/183.jpg') ,
(1,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/43.jpg'),
(2,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/183.jpg') ,
(2,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/43.jpg');

INSERT INTO `room_amenities` (`room_id`, `amenity_id`) 
VALUES 
(1,1),(1,2),(1,3),(1,4),
(2,1),(2,2),(2,3),(2,5);






SELECT r._id, ri.image AS images, r.room_number, r.room_type, r.description, r.offer, r.offer_price, r.status, a.name FROM room r JOIN room_images ri ON r._id=ri.room_id JOIN room_amenities ra ON r._id=ra.room_id JOIN amenities a ON a.id = ra.amenity_id;



