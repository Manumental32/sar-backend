<h1>SAR is alive!</h1>
<?php
include('connectDb.php');

?>
<a href="http://localhost:9999/grabaDatos.php?arduino_id=1&client_id=1&humidity=10&light=20&temperature=30">http://localhost:9999/grabaDatos.php?arduino_id=1&client_id=1&humidity=10&light=20&temperature=30</a>
<br>
<a href="http://localhost:9999/getAllowedSensorsValue.php?arduino_id=1">http://localhost:9999/getAllowedSensorsValue.php?arduino_id=1</a>
<br>
<a href="http://localhost:9999/getIrrigationsPlans.php?enabled=1">http://localhost:9999/getIrrigationsPlans.php?enabled=1</a>
<br>
<a href="http://localhost:9999/getUsers.php">http://localhost:9999/getUsers.php</a>
<br>
<a href="http://localhost:9999/readArduinoMeasurements.php?arduino_id=1">http://localhost:9999/readArduinoMeasurements.php?arduino_id=1</a>
<br>
<a href="http://localhost:9999/changeIrrigationPlan.php?arduino_id=1&irrigation_plan_id=2&user_id=3">http://localhost:9999/changeIrrigationPlan.php?arduino_id=1&irrigation_plan_id=2&user_id=3</a>
<br>
<a href="http://localhost:9999/getCurrentIrrigationPlanSelected.php?arduino_id=1&user_id=1">http://localhost:9999/getCurrentIrrigationPlanSelected.php?arduino_id=1&user_id=1</a>
<br>

<a href="http://localhost:9999/createUser.php?client_id=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='name'">http://localhost:9999/createUser.php?client_id=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='name'</a>
<br>
<a href="http://localhost:9999/updateUser.php?client_id=4&user_id=4&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='nombre'&enabled=1">http://localhost:9999/updateUser.php?client_id=4&user_id=1&name='nombre'&lastname='apellido'&mail='algo@algo.com.ar'&password='nombre'&enabled=1</a>
<br>

<a href="http://localhost:9999/createIrrigationPlan.php?name='nuevo'&irrigation_plan_id=1&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=40&enabled=1">http://localhost:9999/createIrrigationPlan.php?name='nuevo'&irrigation_plan_id=1&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=40&enabled=1</a>
<br>
<a href="http://localhost:9999/updateIrrigationPlan.php?irrigation_plan_id=11&name=%27Plan%20b%20para%20arroz%27&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=30&enabled=1">http://localhost:9999/updateIrrigationPlan.php?irrigation_plan_id=11&name=%27Plan%20b%20para%20arroz%27&humidity_min_allowed=10&light_max_allowed=20&temperature_max_allowed=30&enabled=1</a>
<br>

