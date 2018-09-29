<?php
	session_start();
	if (isset($_POST['submit'])) {
		$servername = "localhost";
		$username = "root";
		$password = "usbw";
		$dbname = "cadastro";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$uid = $_SESSION['u_id'];

		$np = $_POST['np'];
		$pesototal = $_POST['pesototal'];
		$pesomedia = $pesototal * $np;
		
		$sql = mysqli_real_escape_string($conn ,"UPDATE usuarios SET pesorigem = $np WHERE u_id = $uid;");
		mysqli_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,"UPDATE usuarios SET pesomedia = $pesomedia WHERE u_id = $uid;");
		mysqli_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,"UPDATE usuarios SET pesototal = $pesototal WHERE u_id = $uid;");
		mysqli_query($conn, $sql);
		header("Location: /hackaton/menu.php?Sucesso");
		exit();
	}
	else{
		header("Location: /hackaton/menu.php");
		exit();
	}