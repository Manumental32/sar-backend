<?php
// http://localhost:9999/updateIrrigationPlan.php?irrigation_plan_id=1&name='Plan para arroz'&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=30&enabled=1
include('connectDb.php');

$irrigation_plan_id = isset($_GET["irrigation_plan_id"]) ? $_GET["irrigation_plan_id"] : '';
if ($irrigation_plan_id == '') {
	header('HTTP/1.0 400 Error');
	die('falta irrigation_plan_id');
}

$name = isset($_GET["name"]) ? $_GET["name"] : '';
$humidity_min_allowed = isset($_GET["humidity_min_allowed"]) ? $_GET["humidity_min_allowed"] : '';
$light_max_allowed = isset($_GET["light_max_allowed"]) ? $_GET["light_max_allowed"] : '';
$temperature_max_allowed = isset($_GET["temperature_max_allowed"]) ? $_GET["temperature_max_allowed"] : '';
$enabled = isset($_GET["enabled"]) ? $_GET["enabled"] : 1;

$query = "UPDATE irrigations_plan t SET ";
if($enabled == 1) {
	$query = $query . "t.`name` = {$name} , t.`humidity_min_allowed` = {$humidity_min_allowed}, t.`light_max_allowed` = {$light_max_allowed}, t.`temperature_max_allowed` = {$temperature_max_allowed}";
} else {
	$query = $query . " t.`enabled` = {$enabled} ";
}
$query = $query . " WHERE t.`irrigation_plan_id` = {$irrigation_plan_id}";
// echo $query;

if (!$result = $conexion->query($query)) {
	header('HTTP/1.0 400 Error');
    echo "Error:\n";
    echo $query;
    die();
}
	
$conexion ->close();

echo ("OK");

?>