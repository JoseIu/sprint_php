<?php
require_once('./setup.php');
$db = conectDB();

$room_id = $_GET['room'] ?? null;

if (!$room_id) {
    die('No se proporcionó un ID de habitación válido.');
}

$query_OnRoom = "SELECT 
r._id, 
ri.image AS images,
r.room_number,
r.room_type,
r.description,
r.offer,
r.offer_price,
r.price,
r.status,
a.name AS amenities
FROM
room r
JOIN
room_images ri ON r._id=ri.room_id
JOIN room_amenities ra ON r._id=ra.room_id
JOIN amenities a ON a.id = ra.amenity_id,
WHERE
r._id =$room_id";

// $result = mysqli_query($db, $query_OnRoom);
// if ($result) {
//     echo '<pre>';
//     print_r($result);
//     echo '</pre>';
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

echo $blade->run("room_details", ['room_id' => $room_id]);
