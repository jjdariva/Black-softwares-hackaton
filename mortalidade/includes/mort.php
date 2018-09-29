<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "cadastro";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$uid = $_SESSION['u_id'];

	if (isset($_POST['submit'])) {
		$MN1 = $_POST['MN0'];
		$ME1 = $_POST['ME0'];
			$soma = $MN1+$ME1;
		$MN2 = $_POST['MN1'];
		$ME2 = $_POST['ME1'];
			$soma1 = $MN2+$ME2;
		$MN3 = $_POST['MN2'];
		$ME3 = $_POST['ME2'];
			$soma2 = $MN3+$ME3;
		$MN4 = $_POST['MN3'];
		$ME4 = $_POST['ME3'];
			$soma3 = $MN4+$ME4;
		$MN5 = $_POST['MN4'];
		$ME5 = $_POST['ME4'];
			$soma4 = $MN5+$ME5;
		$MN6 = $_POST['MN5'];
		$ME6 = $_POST['ME5'];
			$soma5 = $MN6+$ME6;
		$MN7 = $_POST['MN6'];
		$ME7 = $_POST['ME6'];
			$soma6 = $MN7+$ME7;

		$sql = mysqli_real_escape_string($conn ,"UPDATE usuarios SET morto1 = $soma WHERE morto1 = -1 AND u_id = $uid;");
		mysql_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,'UPDATE usuarios SET morto2 = $soma1 WHERE morto2 = -1 AND u_id = $uid;');
		mysql_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,'UPDATE usuarios SET morto3 = $soma2 WHERE morto3 = -1 AND u_id = $uid;');
		mysql_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,'UPDATE usuarios SET morto4 = $soma3 WHERE morto4 = -1 AND u_id = $uid;');
		mysql_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,'UPDATE usuarios SET morto5 = $soma4 WHERE morto5 = -1 AND u_id = $uid;');
		mysql_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,'UPDATE usuarios SET morto6 = $soma5 WHERE morto6 = -1 AND u_id = $uid;');
		mysql_query($conn, $sql);
		$sql = mysqli_real_escape_string($conn ,'UPDATE usuarios SET morto7 = $soma6 WHERE morto7 = -1 AND u_id = $uid;');
		mysql_query($conn, $sql);

		$sql = mysqli_real_escape_string($conn ,'SELECT morto1, morto2, morto3, morto4, morto5, morto6, morto7 FROM `usuarios` WHERE morto1 != -1 AND morto2 != -1 AND morto3 != -1 AND morto4 != -1 AND morto5 != -1 AND morto6 != -1 AND morto7 != -1;');
		$rowp = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($rowp);
		$semanal = $row['morto1'] + $row['morto2'] + $row['morto3'] + $row['morto4'] + $row['morto5'] + $row['morto6'] + $row['morto7'];
		$sql = mysqli_real_escape_string($conn ,'UPDATE usuarios SET mortsemanal = $semanal  WHERE morto7= -1;');
		mysql_query($conn, $sql);
		if (true) {
			header('Location: /hackaton/menu.php?Sucesso');
			exit();
		}
	}
	else{
		header('Location /hackaton/menu.php?Nope');
		exit();
	}