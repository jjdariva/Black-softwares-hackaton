<?php  
	session_start();
	if(isset($_SESSION['u_id'])) {
		$x=1;
	} else {
		header("Location /hackaton/menu.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ABATE CHIQ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
<<<<<<< HEAD

	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Ex Poul</title>
	<style>
=======
    <style>
>>>>>>> 37411be00f18be2cd4ea0e46cab078521ad93513
		.fundo{
			background-color: #CCC;
		}
		.divisao{
			background-color: #C0C0C0;
			height: 900px;
			width: 400px;
		}
		.font{
			font-family: arial;
			font-size: 45px;
		}
<<<<<<< HEAD
        	{
        	    margin: 0;
        	}

=======
	   {
	       margin: 0;
	   }
>>>>>>> 37411be00f18be2cd4ea0e46cab078521ad93513
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: #f1f1f1;
            position: fixed;
            overflow: auto;
            float: left;
        }
<<<<<<< HEAD

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            float: left;
        }

        li a.active {
            background-color: #4CAF50;
=======
        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            float: left;
        }

        li a.active {
            background-color: #4CAF50;
            color: white;
            transition-duration: 0.2s;
            float: left;
        }

        li a:hover:not(.active) {
            background-color: #555;
>>>>>>> 37411be00f18be2cd4ea0e46cab078521ad93513
            color: white;
            transition-duration: 0.2s;
            float: left;
        }
<<<<<<< HEAD

        li a:hover:not(.active) {
            background-color: #555;
            color: white;
            transition-duration: 0.2s;
            float: left;
        }
        .button{
            background-color: white;
            color: black;
            border: 2px solid #555555;
            height: 50px;
            width: 90px;
            font-size: 25px;
        }

=======
        .button{
            background-color: white;
            color: black;
            border: 2px solid #555555;
            height: 50px;
            width: 90px;
            font-size: 25px;
        }

>>>>>>> 37411be00f18be2cd4ea0e46cab078521ad93513
        .button:hover {
            background-color: #555555;
            color: white;
            height: 50px;
            width: 90px;
            font-size: 25px;
            transition-duration: 0.3s;
        }
<<<<<<< HEAD
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            font-family: arial;
        }
</style>
=======
    </style>
>>>>>>> 37411be00f18be2cd4ea0e46cab078521ad93513
</head>
<body class="fundo">
	<header>
        <div class="principal">
            <nav>
            	<div class="nav-login">
                    <form action="includes/logout.inside.php" method="POST">
                        <button type="submit" name="submit" >Sair</button>
                    </form>
                    <img src="logo4.png" height="78.571" width="238.095">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Serviços</span>
                </div>
                <br><br><br><br><br>
                <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <a href="mortalidade/morpa.php">Ficha de mortalidade</a>
                      <a href="peso/peso.php">Ficha de Peso</a>
                      <a href="racao/racao.php">Ficha de ração</a>
                </div>
            </nav>
        </div>
    </header>		
		<div class="principal">
		</div>
	</header>	
<<<<<<< HEAD

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
=======
>>>>>>> 37411be00f18be2cd4ea0e46cab078521ad93513
</body>
</html>