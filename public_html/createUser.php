<?php
// http://localhost:9999/createUser.php?client_id=1&name=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='name'
include('connectDb.php');

$client_id = isset($_GET["client_id"]) ? $_GET["client_id"] : 1;
$name = isset($_GET["name"]) ? $_GET["name"] : '';
$lastname = isset($_GET["lastname"]) ? $_GET["lastname"] : '';
$mail = isset($_GET["mail"]) ? $_GET["mail"] : '';
$password = isset($_GET["password"]) ? $_GET["password"] : '';

$query = "INSERT INTO users (`client_id`, `name`, `lastname`, `mail`, `password`, `enabled`) 
VALUES ({$client_id}, {$name}, {$lastname}, {$mail}, {$password}, 1)";
// echo $query;

if (!$result = $conexion->query($query)) {
    echo "Error:\n";
    echo $query;
    die();
}
	
$conexion ->close();

echo ("OK");

?>