<?php
	if ($_POST) {
		$MN1 = $_POST['MN0'];
		$ME1 = $_POST['ME0'];
	}
	$soma = $MN1+$ME1;
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "cadastro";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE usuarios SET m1 = $soma WHERE m1=null";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>