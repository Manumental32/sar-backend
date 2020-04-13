<?php
include('connectDb.php');
$domain = "";
?>
<h1>SAR is alive!</h1>
<a href="<?=$domain?>/grabaDatos.php?arduino_id=1&client_id=1&humidity=10&light=20&temperature=30" target="_blank"><?=$domain?>/grabaDatos.php?arduino_id=1&client_id=1&humidity=10&light=20&temperature=30</a>
<br>
<a href="<?=$domain?>/getAllowedSensorsValue.php?arduino_id=1" target="_blank"><?=$domain?>/getAllowedSensorsValue.php?arduino_id=1</a>
<br>
<a href="<?=$domain?>/getIrrigationsPlans.php?enabled=1" target="_blank"><?=$domain?>/getIrrigationsPlans.php?enabled=1</a>
<br>
<a href="<?=$domain?>/getUsers.php" target="_blank"><?=$domain?>/getUsers.php</a>
<br>
<a href="<?=$domain?>/readArduinoMeasurements.php?arduino_id=1" target="_blank"><?=$domain?>/readArduinoMeasurements.php?arduino_id=1</a>
<br>
<a href="<?=$domain?>/changeIrrigationPlan.php?arduino_id=1&irrigation_plan_id=2&user_id=3" target="_blank"><?=$domain?>/changeIrrigationPlan.php?arduino_id=1&irrigation_plan_id=2&user_id=3</a>
<br>
<a href="<?=$domain?>/getCurrentIrrigationPlanSelected.php?arduino_id=1&user_id=1" target="_blank"><?=$domain?>/getCurrentIrrigationPlanSelected.php?arduino_id=1&user_id=1</a>
<br>

<a href="<?=$domain?>/createUser.php?client_id=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='name'" target="_blank"><?=$domain?>/createUser.php?client_id=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='name'</a>
<br>
<a href="<?=$domain?>/updateUser.php?client_id=4&user_id=4&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='nombre'&enabled=1" target="_blank"><?=$domain?>/updateUser.php?client_id=4&user_id=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='nombre'&enabled=1</a>
<br>

<a href="<?=$domain?>/createIrrigationPlan.php?name='nuevo'&irrigation_plan_id=1&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=40&enabled=1" target="_blank"><?=$domain?>/createIrrigationPlan.php?name='nuevo'&irrigation_plan_id=1&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=40&enabled=1</a>
<br>
<a href="<?=$domain?>/updateIrrigationPlan.php?irrigation_plan_id=11&name=%27Plan%20b%20para%20arroz%27&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=30&enabled=1" target="_blank"><?=$domain?>/updateIrrigationPlan.php?irrigation_plan_id=11&name=%27Plan%20b%20para%20arroz%27&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=30&enabled=1</a>
<br>

