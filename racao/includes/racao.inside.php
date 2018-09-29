<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "cadastro";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$uid = $_SESSION['u_id'];

	if (isset($_POST['submit'])) {
		$rdata = $_POST['rdata'];
		$rfase = $_POST['rfase'];
		$rquant = $_POST['rquant'];

		$sql = "UPDATE usuarios SET rdata = '$rdata' WHERE u_id = $uid;";
		mysqli_query($conn, $sql);
		$sql = "UPDATE usuarios SET rfase= '$rfase' WHERE u_id = $uid;";
		mysqli_query($conn, $sql);
		$sql = "UPDATE usuarios SET rquant = $rquant WHERE u_id = $uid;";
		mysqli_query($conn, $sql);
		header("Location: /hackaton/menu.php?Sucesso");
		exit();
	}
	else{
		header("Location: /hackaton/menu.php");
		exit();
	}