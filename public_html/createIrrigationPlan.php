<?php
// http://localhost:9999/createIrrigationPlan.php?name='nuevo'&irrigation_plan_id=1&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=40&enabled=1
include('connectDb.php');

$name = isset($_GET["name"]) ? $_GET["name"] : '';
$humidity_min_allowed = isset($_GET["humidity_min_allowed"]) ? $_GET["humidity_min_allowed"] : '';
$light_max_allowed = isset($_GET["light_max_allowed"]) ? $_GET["light_max_allowed"] : '';
$temperature_max_allowed = isset($_GET["temperature_max_allowed"]) ? $_GET["temperature_max_allowed"] : '';
$enabled = isset($_GET["enabled"]) ? $_GET["enabled"] : 1;
	


//yo agregue todo hasta $query y el if que le sigue

$consulta = "SELECT * from irrigations_plan where name = $name";
$resultado = $conexion->query($consulta) or die('error');
//print_r($resultado);
$results = [];
//print_r($results);

while($row = $resultado->fetch_assoc()) {
    $results[] = $row;
	//print_r($row);
}


if ((count($results) == 1)) {
	header('HTTP/1.0 401 Unauthorized');
	echo 'El plan de riego que intenta cargar ya existe, debe volver al listado y editarlo.';
	exit;
	}

else {
	if ($light_max_allowed > 1) {
	header('HTTP/1.0 400 Error');
	echo 'La luminosidad debe ser 0 o 1';
	exit;
	}
	else {
		$query = "INSERT INTO `irrigations_plan` (`name`, `humidity_min_allowed`, `light_max_allowed`, `temperature_max_allowed`, `enabled`) 
		VALUES ({$name}, {$humidity_min_allowed}, {$light_max_allowed}, {$temperature_max_allowed}, {$enabled})";
//echo "por aca paso";
//print_r($query);
		$resultado1 = $conexion->query($query) or die('error');
//print_r($resultado1);
		$results1 = [];
		}
//print_r($results1);

/*while($row1 = $resultado1->fetch_assoc()) {
	echo $row["name"] . ', ' . $row["humidity_min_allowed"] . ', ' . $row["light_max_allowed"] . ', ' . $row["temperature_max_allowed"]. ', ' . $row["enabled"];
    $results1[] = $row1;
	print_r($row1);
}*/

// echo $query;
//print_r($query);
//echo "El plan se cargo";
}





//echo json_encode($results);

if (!$resultado1 = $conexion->query($consulta)) {
    echo "Error:\n";
    echo $consulta;
    die();
}


$conexion ->close();

echo ("OK");

?>