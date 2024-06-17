<?php
require_once('./setup.php');
require_once('./querys/room.querys.php');
$db = conectDB();

$result = mysqli_query($db, $queries['query_allrooms']);

$rooms = array();


while ($row = $result->fetch_assoc()) {
    if (!isset($rooms[$row['_id']])) {
        $rooms[$row['_id']] = $row;
        $rooms[$row['_id']]['amenities'] = array($row['amenities']);
    } else {
        if (!in_array($row['amenities'], $rooms[$row['_id']]['amenities'])) {
            $rooms[$row['_id']]['amenities'][] = $row['amenities'];
        }
    }
}

echo $blade->run("room", ['rooms' => $rooms]);
// echo '<pre>';
// print_r($rooms);
// echo '</pre>';
