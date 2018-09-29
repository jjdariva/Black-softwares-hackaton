<?php
	if ($_POST) {
		$totfran = $_POST['totalfrangos'];
		$pesmis = $_POST['realMisto'];
	}
	$soma = $pesmis/$totfran;
	
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "cadastro";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE usuarios SET totfran = $totfran WHERE totfran=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET peso = $soma WHERE peso=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>