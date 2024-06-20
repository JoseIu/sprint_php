<?php
require_once('./setup.php');
$db = conectDB();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = date('Y-m-d');
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    $customer_phone = $_POST['phone'];
    $subect = $_POST['subject'];
    $message = $_POST['message'];

    if (!empty($customer_name) && !empty($customer_email) && !empty($customer_phone) && !empty($subect) && !empty($message)) {

        $insertQuery = "INSERT INTO contact (date, customer_name, customer_email, customer_phone, subect, message) VALUES ('$date', '$customer_name', '$customer_email', '$customer_phone', '$subect', '$message')";

        if (mysqli_query($db, $insertQuery)) {
            header('Location: index.php');
        }
    }
}
echo $blade->run("contact");
