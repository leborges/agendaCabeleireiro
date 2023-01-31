<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "leonardo";
		$password = "102030";
		$dbname = "barbearia";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
	?>
</body>
</html>