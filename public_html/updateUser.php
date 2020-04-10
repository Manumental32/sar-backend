<?php
// http://localhost:9999/updateUser.php?client_id=4&user_id=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='nombre'&enabled=1
include('connectDb.php');

$user_id = isset($_GET["user_id"]) ? $_GET["user_id"] : '';
if ($user_id == '') {
	die('falta client_id');
}

$client_id = isset($_GET["client_id"]) ? $_GET["client_id"] : 1;
$name = isset($_GET["name"]) ? $_GET["name"] : '';
$lastname = isset($_GET["lastname"]) ? $_GET["lastname"] : '';
$mail = isset($_GET["mail"]) ? $_GET["mail"] : '';
$password = isset($_GET["password"]) ? $_GET["password"] : '';
$enabled = isset($_GET["enabled"]) ? $_GET["enabled"] : 1;

$query = "UPDATE users t SET ";
if($enabled==1){
	$query = $query . "t.`client_id` = {$client_id}, t.`name` = '{$name}', t.`lastname` = '{$lastname}', t.`mail` = '{$mail}', t.`password` = '{$password}', t.`enabled` = {$enabled} ";
} else {
	$query = $query . "t.`enabled` = {$enabled} ";
}
	$query = $query . " WHERE t.`user_id` = {$user_id}";
//echo $query;



if (!$result = $conexion->query($query)) {
    header('HTTP/1.0 400 Error');
    echo "Error:\n";
    echo $query;
    die();
}
	
$conexion ->close();

echo ("OK");

?>