<?php
// http://localhost:9999/createUser.php?client_id=1&name=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='name'
include('connectDb.php');

$client_id = isset($_GET["client_id"]) ? $_GET["client_id"] : 1;
$name = isset($_GET["name"]) ? $_GET["name"] : '';
$lastname = isset($_GET["lastname"]) ? $_GET["lastname"] : '';
$mail = isset($_GET["mail"]) ? $_GET["mail"] : '';
$password = isset($_GET["password"]) ? $_GET["password"] : '';

/*$query = "INSERT INTO users (`client_id`, `name`, `lastname`, `mail`, `password`, `enabled`) 
VALUES ({$client_id}, '{$name}', '{$lastname}', '{$mail}', '{$password}', 1)";
// echo $query;

if (!$result = $conexion->query($query)) {
	header('HTTP/1.0 400 Error');
    echo "Error:\n";
    echo $query;
    die();
}
//
*/


$select_query = "SELECT mail FROM users WHERE mail = '$mail'";
//echo $select_query;
$select_query_result = $conexion->query($select_query) or die('error');

$results = [];

while($row = $select_query_result->fetch_assoc()) {
    $results[] = $row;
	//print_r($row);
}

if (count($results) >= 1) {
	header('HTTP/1.0 400 Error');
	echo 'El usario que intenta cargar ya existe.';
	exit;
}
//print_r(count($results));

//CREATE USERS
$insert_query = "INSERT INTO users (`client_id`, `name`, `lastname`, `mail`, `password`, `enabled`) 
VALUES ('{$client_id}', '{$name}', '{$lastname}', '{$mail}', '{$password}', 1)";
//echo($insert_query);

if (!$conexion->query($insert_query)) {
	header('HTTP/1.0 400 Error');
    echo "El usuario no se pudo crear";
    echo $insert_query;
    exit;
}

	
$conexion ->close();

echo ("OK");

?>




