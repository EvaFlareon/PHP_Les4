<?php

$appid = 'c2c592e96569efe57d9770049e91bbf1';
$cityId = '524901';

$content = file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=".$cityId."&appid=".$appid);
$result = json_decode($content, true);

$name = $result['name'];
$date = date("d.m.Y");
$temp = $result['main']['temp'] - 273.15;
$weather = $result['weather'][0]['description'];
$pressure = $result['main']['pressure'];
$humidity = $result['main']['humidity'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weather in Moscow</title>
</head>
<body>
	<h1>Weather in <?= $name." ".$date; ?></h1>
	<p>Now in <?= $name." ".$temp; ?> C,<br>
		<?= $weather; ?>,<br>
		pressure <?= $pressure; ?> hpa, humidity <?= $humidity; ?>%
	</p>
</body>
</html>
