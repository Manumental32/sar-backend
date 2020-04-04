<?php
// http://localhost:9999/createIrrigationPlan.php?name='nuevo'&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=40&enabled=1
include('connectDb.php');

$name = isset($_GET["name"]) ? $_GET["name"] : '';
$humidity_min_allowed = isset($_GET["humidity_min_allowed"]) ? $_GET["humidity_min_allowed"] : '';
$light_max_allowed = isset($_GET["light_max_allowed"]) ? $_GET["light_max_allowed"] : '';
$temperature_max_allowed = isset($_GET["temperature_max_allowed"]) ? $_GET["temperature_max_allowed"] : '';
$enabled = isset($_GET["enabled"]) ? $_GET["enabled"] : 1;

//INPUTS VALIDATIONS
if ($light_max_allowed > 1) {
	header('HTTP/1.0 400 Error');
	echo 'La luminosidad debe ser 0 o 1';
	exit;
}

$select_query = "SELECT name FROM irrigations_plan WHERE name = $name";
$select_query_result = $conexion->query($select_query) or die('error');

$results = [];

while($row = $select_query_result->fetch_assoc()) {
    $results[] = $row;
	//print_r($row);
}

if (count($results) == 1) {
	header('HTTP/1.0 400 Error');
	echo 'El plan de riego que intenta cargar ya existe, debe volver al listado y editarlo.';
	exit;
}


//CREATE IRRIGATION PLAN
$insert_query = "INSERT INTO `irrigations_plan` (`name`, `humidity_min_allowed`, `light_max_allowed`, `temperature_max_allowed`, `enabled`) VALUES ({$name}, {$humidity_min_allowed}, {$light_max_allowed}, {$temperature_max_allowed}, {$enabled})";
//echo($insert_query);

if (!$conexion->query($insert_query)) {
    echo "Error:\n";
    echo $query;
    exit;
}

$conexion ->close();
echo ("OK");

?>