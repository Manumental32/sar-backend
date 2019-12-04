<?php
// http://localhost:9999/getUsers.php
include('connectDb.php');

$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
// $now = date("Y-m-d H:i:s");

$sql = "SELECT name, lastname, mail, password, enabled FROM users WHERE enabled = true";

// echo $sql;
$result = $conexion->query($sql) or die('error');

$results = [];

while($row = $result->fetch_assoc()) {
    // echo $row["humidity_measurement_value"];
    $results[] = $row;
    // echo $row["name"] . ', ' . $row["lastname"] . ', ' . $row["mail"] . ', ' . $row["password"]. ', ' . $row["enabled"];
	// print_r($row);
}

echo json_encode($results);
	
$conexion ->close();

?>