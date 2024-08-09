<?php 
use Model\ActiveRecord;
require __DIR__ . '/../vendor/autoload.php';
//La 2 lines son para poder utilizar las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
require 'funciones.php';
require 'database.php';


// Conectarnos a la base de datos

ActiveRecord::setDB($db);