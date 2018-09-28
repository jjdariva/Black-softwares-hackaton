<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<style>
   		table{
   			table-layout: auto;
   			border: 2px solid black;
   		}
   		table.a{
   			table-layout: auto;
    		width: 700px; 
    		height: 500px;   
   		}
   		tr,td {
    		border: 1px solid black;
    		font-size: 20px;
		}
		.input{
			height: 40px;
		}
   	</style>
</head>
<body>
	<div>
		<center><p><h2>Mortalidade</h2></p></center>
		<table class="a">
			  <tr>
			    <th>Mortalidade Diária</th>
			    <th>1°</th>
			  </tr>
			  <tr>
			    <td>Morte Natural</td>
			    <td><input class="input" type="number"></td>		    
			  </tr>
			  <tr>
			    <td>Eliminado</td>
			    <td><input class="input" type="number"></td>
			  </tr>
		</table>
	</div>
</body>
</html>