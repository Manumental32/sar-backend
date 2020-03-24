<?php
// http://localhost:9999/createIrrigationPlan.php?name='nuevo'&irrigation_plan_id=1&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=40&enabled=1
include('connectDb.php');

$name = isset($_GET["name"]) ? $_GET["name"] : '';
$humidity_min_allowed = isset($_GET["humidity_min_allowed"]) ? $_GET["humidity_min_allowed"] : '';
$light_max_allowed = isset($_GET["light_max_allowed"]) ? $_GET["light_max_allowed"] : '';
$temperature_max_allowed = isset($_GET["temperature_max_allowed"]) ? $_GET["temperature_max_allowed"] : '';
$enabled = isset($_GET["enabled"]) ? $_GET["enabled"] : 1;

$query = "INSERT INTO `irrigations_plan` (`name`, `humidity_min_allowed`, `light_max_allowed`, `temperature_max_allowed`, `enabled`) VALUES ({$name}, {$humidity_min_allowed}, {$light_max_allowed}, {$temperature_max_allowed}, {$enabled})";
// echo $query;

if (!$result = $conexion->query($query)) {
    echo "Error:\n";
    echo $query;
    die();
}
	
$conexion ->close();

echo ("OK");

?>