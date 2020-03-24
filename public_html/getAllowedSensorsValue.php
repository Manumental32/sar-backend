<?php
// http://localhost:9999/getAllowedSensorsValue.php?arduino_id=1
include('connectDb.php');

$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
// $now = date("Y-m-d H:i:s");

$sql = "SELECT ip.humidity_min_allowed, ip.light_max_allowed, ip.temperature_max_allowed FROM arduinos_irrigation_plan aip
left join irrigations_plan ip ON (ip.irrigation_plan_id = aip.irrigation_plan_id)
left join users u ON (aip.user_id = u.user_id)
WHERE arduino_id = {$arduino_id}
LIMIT 1";

// echo $sql;
$result = $conexion->query($sql) or die('error');

// $results = [];

while($row = $result->fetch_assoc()) {
	// $results[] = $row;
    // echo $row["humidity_measurement_value"];
    echo $row["humidity_min_allowed"] . ', ' . $row["light_max_allowed"] . ', ' . $row["temperature_max_allowed"];
	// print_r($row);
}

// echo json_encode($results);

	
$conexion ->close();

?>