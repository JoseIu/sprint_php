<?php
require_once('./BladeOne.php');

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
function conectDB()
{
    $host = '127.0.0.1';
    $username = 'root';
    $password = 'root';
    $database = 'hotel_miranda';

    try {
        $mysqli = new mysqli($host, $username, $password, $database);

        echo "Conection successfull 🚀";
        return $mysqli;
    } catch (mysqli_sql_exception $e) {
        echo "Erro in the contection 😥: " . $e->getMessage();
    }
}
