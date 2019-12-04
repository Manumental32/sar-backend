<?php
// http://localhost:9999/grabaDatos.php?arduino_id=1&client_id=1&humidity=10&light=20&temperature=30
date_default_timezone_set('America/Argentina/Buenos_Aires');
include 'connectDb.php';

$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
$client_id = isset($_GET["client_id"]) ? $_GET["client_id"] : 1;
$humidity = isset($_GET["humidity"]) ? $_GET["humidity"] : null;
$light = isset($_GET["light"]) ? $_GET["light"] : null;
$temperature = isset($_GET["temperature"]) ? $_GET["temperature"] : null;
$now = date("Y-m-d H:i:s");

$query = "INSERT INTO arduinos_measurement 
            (arduino_id, client_id, humidity_measurement_value, light_measurement_value, temperature_measurement_value, measurement_datetime) 
            VALUES ( {$arduino_id}, {$client_id}, {$humidity}, {$light}, {$temperature}, '{$now}')";
// echo $query;

if (!$result = $conexion->query($query)) {
    echo "Error:\n";
    echo $query;
}
	
$conexion ->close();

echo ("OK");
?>