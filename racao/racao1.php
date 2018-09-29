<?php
	if ($_POST) {
		$data = $_POST['dataracao'];
		$fase = $_POST['faseracao'];
		$quant = $_POST['quantracao'];
	}

	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "cadastro";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE usuarios SET data = $data  WHERE data = ( $data, "%m/%d/%Y" )";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$sql = "UPDATE usuarios SET fase = $fase WHERE fase=";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "UPDATE usuarios SET racao = $quant WHERE racao=0";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>