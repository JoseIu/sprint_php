<?php
function conectDB()
{
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'ejemplo_db';

    $mysqli = mysqli_connect($host, $username, $password, $database);

    if ($mysqli) {
        echo "Conexión exitosa Conexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosaConexión exitosa";
    } else {
        echo "Error en la conexión";
    }
}
