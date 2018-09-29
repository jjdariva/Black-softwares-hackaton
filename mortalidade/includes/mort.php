<?php
	if ($_POST) {
		$MN1 = $_POST['MN0'];
		$ME1 = $_POST['ME0'];
	}
	$soma = $MN1+$ME1;

	if ($_POST) {
		$MN2 = $_POST['MN1'];
		$ME2 = $_POST['ME1'];
	}
	$soma1 = $MN2+$ME2;

	if ($_POST) {
		$MN3 = $_POST['MN2'];
		$ME3 = $_POST['ME2'];
	}
	$soma2 = $MN3+$ME3;

	if ($_POST) {
		$MN4 = $_POST['MN3'];
		$ME4 = $_POST['ME3'];
	}
	$soma3 = $MN4+$ME4;

	if ($_POST) {
		$MN5 = $_POST['MN4'];
		$ME5 = $_POST['ME4'];
	}
	$soma4 = $MN5+$ME5;

	if ($_POST) {
		$MN6 = $_POST['MN5'];
		$ME6 = $_POST['ME5'];
	}
	$soma5 = $MN6+$ME6;

	if ($_POST) {
		$MN7 = $_POST['MN6'];
		$ME7 = $_POST['ME6'];
	}
	$soma6 = $MN7+$ME7;


	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "cadastro";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE usuarios SET morto1 = $soma WHERE morto1=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET morto2 = $soma1 WHERE morto2=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET morto3 = $soma2 WHERE morto3=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET morto4 = $soma3 WHERE morto4=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET morto5 = $soma4 WHERE morto5=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET morto6 = $soma5 WHERE morto6=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET morto7 = $soma6 WHERE morto7=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>