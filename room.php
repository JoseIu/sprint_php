<?php
require_once('./setup.php');
echo $blade->run("room", ["name" => "Joselu"]);
$db = conectDB();
$query = "SELECT 
r._id, 
ri.image AS images,
r.room_number,
r.room_type,
r.description,
r.offer,
r.offer_price,
r.status,
a.name 
FROM
room r
JOIN
room_images ri ON r._id=ri.room_id
JOIN room_amenities ra ON r._id=ra.room_id
JOIN amenities a ON a.id = ra.amenity_id;
";


$result = mysqli_query($db, $query);
