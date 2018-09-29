<?php

session_start();

if (isset($_POST['submit'])) {
	include 'dtb.inside.php';

	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['pwd']);
	if (empty($uid) || (empty($password))) {
		header("Location: /hackaton/index.php?login=empty");
		exit();
	}
	else{
		$sql = "SELECT * FROM usuarios WHERE `u_name` = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck == 0) {
			header('Location: /hackaton/index.php?=wrongggggg');	
			exit();
		}	
		else{
			if ($row = mysqli_fetch_assoc($result)) {
					$passwordCheck = null;
					if ($password == $row['u_pwd']) {
						$passwordCheck = true;
					} 
					else {
						$passwordCheck = false;
					}

				if ($passwordCheck == false) {
					header("Location: /hackaton/index.php?login=password");
					exit();
				}
				elseif ($passwordCheck == true) {
					$_SESSION['u_id'] = $row['u_id'];
					$_SESSION['u_name'] = $row['u_name'];
					$_SESSION['u_pwd'] = $row['u_pwd'];
					header('Location: /hackaton/menu.php?sucesso');
					exit();
				}
			}
		}
	}
}
else{
	header("Location: /hackaton/index.php?Senha error");
	exit();
}