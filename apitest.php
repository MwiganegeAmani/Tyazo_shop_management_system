<?php 
if (isset($_POST['submit'])) {
$myapi = $_POST['myapi'];
	$map_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$myapi; 
	$map_json = $file_get_contents($map_url);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>API TEST</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="myapi">
	<input type="submit" name="submit">
</form>
</body>
</html>