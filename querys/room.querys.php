<?php
$query_allrooms = "SELECT 
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
JOIN amenities a ON a.id = ra.amenity_id;
";

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
    r._id = $room_id";

$query_OfferRooms = "SELECT 
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
    room_images ri ON r._id = ri.room_id
JOIN
    room_amenities ra ON r._id = ra.room_id
JOIN
    amenities a ON a.id = ra.amenity_id
WHERE
    r.status = 'true'";

$queries = [
    'query_allrooms' => $query_allrooms,
    'query_OnRoom' => $query_OnRoom,
    'query_OfferRooms' => $query_OfferRooms,
];
