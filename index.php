<?php
require_once('./setup.php');
require_once('./querys/room.querys.php');
conectDB();

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
function getBookins()
{
    $bookings = array();
    global $db;
    $booking_querry = "SELECT * FROM bookings";
    $result = mysqli_query($db, $booking_querry);

    return $result;
}


function isOccupied($startDate, $endDate)
{
    global $db;

    $startDate = date('Y-m-d', strtotime($startDate));
    $endDate = date('Y-m-d', strtotime($endDate));

    $booking_query = "
        SELECT COUNT(*) AS total_bookings 
        FROM booking
        WHERE check_in < '$endDate' 
        AND check_out > '$startDate'
    ";

    $result = mysqli_query($db, $booking_query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $totalBookings = (int) $row['total_bookings'];
        if ($totalBookings === 0) {
            return true;
        } else {
            return false;
        }
    } else {
        die('Error en la consulta: ' . mysqli_error($db));
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inital_date = $_POST['arrival'] ?? '';
    $end_date = $_POST['departure'] ?? '';

    $isOcupiedd = isOccupied($inital_date, $end_date);
    if ($isOcupiedd) {
        echo "La habitacion esta disponible";
    } else {
        echo "La habitacion no esta disponible";
    }
}
echo $blade->run("index", ["rooms" => $rooms]);
