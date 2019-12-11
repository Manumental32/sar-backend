<?php
// http://localhost:9999/getCurrentIrrigationPlanSelected.php?arduino_id=1&user_id=1
include('connectDb.php');

$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
$user_id = isset($_GET["user_id"]) ? $_GET["user_id"] : 1;
// $now = date("Y-m-d H:i:s");

$sql = "SELECT aip.irrigation_plan_id, name, humidity_min_allowed, light_max_allowed, temperature_max_allowed from arduinos_irrigation_plan aip left join irrigations_plan ip ON aip.irrigation_plan_id = ip.irrigation_plan_id WHERE arduino_id = {$arduino_id} AND user_id = {$user_id} ORDER BY arduinos_irrigation_plan_update_at DESC LIMIT 1";

// echo $sql;

if (!$result = $conexion->query($sql)) {
	header('HTTP/1.0 400 Error');
	echo 'Ocurrio un error al obtener el plan de riego actual';
	exit;
}


while($row = $result->fetch_assoc()) {
	// print_r($row);
	$results = $row;
    // echo $row["humidity_measurement_value"];
    // echo $row["irrigation_plan_id"] . ', ' . $row["name"];
}

echo json_encode($results);

	
$conexion ->close();

?>