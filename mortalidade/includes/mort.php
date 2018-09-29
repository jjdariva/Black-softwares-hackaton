<?php
	session_start();
	include 'dtb.inside.php';
	if ($_POST) {
		$MN1 = $_POST['MN0'];
		$ME1 = $_POST['ME0'];
	}
	$uname = $_SESSION['u_name'];
	echo "~$uname";
	$soma = $MN1+$ME1;
	$sql ="INSERT INTO `usuarios` (`m1`,`m2`) VALUES (`$uname`, MN1) WHERE `u_name` = $uname;";
	$cv = mysqli_query($conn, $sql);
	echo "$sql";
	echo ($_SESSION['u_name']);				