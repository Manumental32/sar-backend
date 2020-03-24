<?php
// http://localhost:9999/getIrrigationsPlans.php
include('connectDb.php');

$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
$enabled = isset($_GET["enabled"]) ? $_GET["enabled"] : 1;

// $now = date("Y-m-d H:i:s");

$sql = "SELECT irrigation_plan_id, name, humidity_min_allowed, light_max_allowed, temperature_max_allowed FROM irrigations_plan";
$sql = $sql . " WHERE enabled = {$enabled}";

// echo $sql;
$result = $conexion->query($sql) or die('error');


while($row = $result->fetch_assoc()) {
	// print_r($row);
	$results[] = $row;
    // echo $row["humidity_measurement_value"];
    // echo $row["irrigation_plan_id"] . ', ' . $row["name"];
}

echo json_encode($results);

	
$conexion ->close();

?>