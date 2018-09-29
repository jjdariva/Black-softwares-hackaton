<?php
	session_start();
	include 'dtb.inside.php';
	if ($_POST) {
		$MN1 = $_POST['MN0'];
		$ME1 = $_POST['ME0'];
	}
	$uname = $_SESSION['u_name'];
	$soma = $MN1+$ME1;
	$sql ="SELECT * FROM `usuarios` WHERE m1 = null;";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($query);
	
		echo "$row";