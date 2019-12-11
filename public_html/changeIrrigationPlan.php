<?php
// http://localhost:9999/changeIrrigationPlan.php?arduino_id=1&irrigation_plan_id=2&user_id=3
include('connectDb.php');
$arduino_id = isset($_GET["arduino_id"]) ? $_GET["arduino_id"] : 1;
$user_id = isset($_GET["user_id"]) ? $_GET["user_id"] : null;
$irrigation_plan_id = isset($_GET["irrigation_plan_id"]) ? $_GET["irrigation_plan_id"] : null;
$now = date("Y-m-d H:i:s");

$query = "INSERT INTO arduinos_irrigation_plan (arduino_id, irrigation_plan_id, user_id, arduinos_irrigation_plan_update_at) VALUES ({$arduino_id}, {$irrigation_plan_id}, {$user_id}, '{$now}')";

// echo $query;

if (!$result = $conexion->query($query)) {
	header('HTTP/1.0 400 Error');
	echo 'Ocurrio un error al seleccionar el plan de riego';
	exit;
}

$conexion ->close();
?>