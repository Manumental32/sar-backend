<?php
// http://localhost:9999/readArduinoMeasurements.php?arduino_id=1
include('connectDb.php');

$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
// $now = date("Y-m-d H:i:s");

$sql = "SELECT humidity_measurement_value, light_measurement_value, temperature_measurement_value, measurement_datetime FROM arduinos_measurement WHERE arduino_id = {$arduino_id} ORDER BY measurement_datetime DESC LIMIT 1";

// echo $sql;
$result = $conexion->query($sql) or die('error');

while($row = $result->fetch_assoc()) {
    // echo $row["humidity_measurement_value"];
    echo $row["humidity_measurement_value"] . ', ' . $row["light_measurement_value"] . ', ' . $row["temperature_measurement_value"];
	// print_r($row);
}

	
$conexion ->close();

?>