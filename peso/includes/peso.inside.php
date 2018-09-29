<?php
	session_start();
	if (isset($_POST['submit'])) {
		$servername = "localhost";
		$username = "root";
		$password = "usbw";
		$dbname = "cadastro";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$uid = $_SESSION['u_id'];

		$EspN = $_POST['EspN'];
		$TrueW = $_POST['TrueW'];
		$pesomedia = $TrueW * $EspN;
		
		$sql = mysqli_real_escape_string($conn ,UPDATE usuarios SET pesorigem = TrueW, pesomedia WHERE u_id = $uid;);
		mysql_query($conn, $sql);
		echo "$sql";

	}

	else{
		header("Location: /hackaton/menu.php");
		exit();
				header("Location: /hackaton/menu.php?Sucesso");
		exit();
	}