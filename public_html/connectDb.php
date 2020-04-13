<?php
header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
date_default_timezone_set('America/Argentina/Buenos_Aires');

$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$dbname = "dbtest";

$conexion = new mysqli($host, $user, $pass, $dbname);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

?>
