<?php
require_once('./BladeOne.php');

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
function conectDB()
{
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'ejemplo_db';
    $port = 3306;

    try {
        $mysqli = new mysqli($host, $username, $password, $database, $port);

        // Verificar conexión
        if ($mysqli->connect_error) {
            echo "Error en la conexión: " . $mysqli->connect_error;
        } else {
            echo "Conexión exitosa";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }
}
