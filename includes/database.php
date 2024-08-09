<?php

$db = mysqli_connect(
    $_ENV['DB_HOST'], 
    $_ENV['DB_USER'], 
    $_ENV['DB_PASS'], 
    $_ENV['DB_NAME'],
    $_ENV['DB_PORT'],
);
$db->set_charset('utf8');
   /* $db = mysqli_connect(
        $_ENV['DB_HOST'], 
        'root', 
        '', 
        'appsalon_mvc',
        '8087');*/
        //$_ENV['']


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
