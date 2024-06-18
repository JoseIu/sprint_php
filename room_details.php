<?php
require_once('./setup.php');
$db = conectDB();

$room_id = (int) ($_GET['room'] ?? null);

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
JOIN amenities a ON a.id = ra.amenity_id
WHERE
r._id =$room_id";

$result = mysqli_query($db, $query_OnRoom);

$roomdetails = array();

$roomdetails = [];
$images = [];
$amenities = [];

while ($row = mysqli_fetch_assoc($result)) {
    if (empty($roomdetails)) {
        $roomdetails = [
            '_id' => $row['_id'],
            'room_number' => $row['room_number'],
            'room_type' => $row['room_type'],
            'description' => $row['description'],
            'offer' => $row['offer'],
            'offer_price' => $row['offer_price'],
            'price' => $row['price'],
            'status' => $row['status']
        ];
    }
    if (!in_array($row['images'], $images)) {
        $images[] = $row['images'];
    }
    if (!in_array($row['amenities'], $amenities)) {
        $amenities[] = $row['amenities'];
    }
}

$roomdetails['images'] = $images;
$roomdetails['amenities'] = $amenities;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gues_name = $_POST['name'] ?? '';
    $gues_lastName = $_POST['last_name'] ?? '';

    $reservation_id = uniqid();
    $order_date = date('Y-m-d');

    $check_in = $_POST['check_in'] ?? '';
    $check_out = $_POST['check_out'] ?? '';
    $room_id = $roomdetails['_id'];
    $room_type = $roomdetails['room_type'];
    $special_request = $_POST['special_request'] ?? '';
    $status = 'pending';

    $insertQuery = "INSERT INTO booking 
    (gues_name, gues_lastName, reservation_id, order_date, check_in, check_out, room_number, room_id, room_type, specialRequest, status) 
    VALUES 
    ('$gues_name', '$gues_lastName', '$reservation_id', '$order_date', '$check_in', '$check_out', {$roomdetails['room_number']}, {$roomdetails['_id']}, '{$roomdetails['room_type']}', '$special_request', '$status')";

    if (mysqli_query($db, $insertQuery)) {
        echo "Reserva creada exitosamente.";
    } else {
        echo "Error al crear la reserva: " . mysqli_error($db);
    }
}

echo $blade->run("room_details", ['roomdetails' => $roomdetails]);
