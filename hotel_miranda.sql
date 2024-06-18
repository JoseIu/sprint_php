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
(2, 'Double Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',FALSE,0,200,TRUE),
(3, 'Double Superior','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',TRUE,20,700,TRUE), 
(4, 'Single Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',FALSE,0,200,TRUE),
(5, 'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',FALSE,0,200,TRUE), 
(6, 'Single Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',FALSE,0,200,FALSE),
(7, 'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',TRUE,20,400,TRUE), 
(8, 'Double Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',FALSE,0,200,TRUE),
(9, 'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',TRUE,20,800,TRUE), 
(10, 'Double Superior','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',FALSE,0,200,FALSE);

INSERT INTO `room_images` (`room_id`,`image`) 
VALUES
(1, 'https://images.unsplash.com/photo-1570129477492-45c003edd2be'),
(1, 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),
(2, 'https://images.unsplash.com/photo-1570129477492-45c003edd2be'),
(2, 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267'),
(3, 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688'),
(3, 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb'),
(4, 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688'),
(4, 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb'),
(5, 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'),
(5, 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),
(6, 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),
(6, 'https://images.unsplash.com/photo-1560518883-ce09059eeffa'),
(7, 'https://images.unsplash.com/photo-1560518883-ce09059eeffa'),
(7, 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'),
(8, 'https://images.unsplash.com/photo-1560518883-ce09059eeffa'),
(8, 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),
(9, 'https://images.unsplash.com/photo-1570129477492-45c003edd2be'),
(9, 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'),
(10, 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb'),
(10, 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb');

INSERT INTO `room_amenities` (`room_id`, `amenity_id`) 
VALUES 
(1,1),(1,2),(1,3),(1,4),
(2,1),(2,2),(2,3),(2,5),
(3,1),(3,2),(3,3),(3,5), 
(4,1),(4,2),(4,3),(4,5),
(5,1),(5,2),(5,3),(5,5),
(6,1),(6,2),(6,3),(6,5),
(7,1),(7,2),(7,3),(7,5),
(8,1),(8,2),(8,3),(8,5),
(9,1),(9,2),(9,3),(9,5),
(10,1),(10,2),(10,3),(10,5);







SELECT r._id, ri.image AS images, r.room_number, r.room_type, r.description, r.offer, r.offer_price, r.status, a.name FROM room r JOIN room_images ri ON r._id=ri.room_id JOIN room_amenities ra ON r._id=ra.room_id JOIN amenities a ON a.id = ra.amenity_id;



