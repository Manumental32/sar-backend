<?php
// http://localhost:9999/getUsers.php
include('connectDb.php');

$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
$mail = isset($_GET["mail"]) ? $_GET["mail"] : '';
$password = isset($_GET["password"]) ? $_GET["password"] : '';
$enabled = isset($_GET["enabled"]) ? $_GET["enabled"] : '';
// $now = date("Y-m-d H:i:s");

$sql = "SELECT name, lastname, mail, password, enabled FROM users WHERE 1 = 1"; 
if ($enabled != '') {
	$sql = $sql . " AND enabled = $enabled ";
}
if ($mail != '' && $password != '') {
	$sql = $sql . " AND mail = '$mail' AND password = '$password'";
}

$result = $conexion->query($sql) or die('error');

$results = [];

while($row = $result->fetch_assoc()) {
    // echo $row["humidity_measurement_value"];
    $results[] = $row;
    // echo $row["name"] . ', ' . $row["lastname"] . ', ' . $row["mail"] . ', ' . $row["password"]. ', ' . $row["enabled"];
	// print_r($row);
}


if ($password != '' && (count($results) == 0)) {
	header('HTTP/1.0 401 Unauthorized');
	echo 'El usuario y/o la contraseña no existen';
	exit;
}

echo json_encode($results);
	
$conexion ->close();

?>