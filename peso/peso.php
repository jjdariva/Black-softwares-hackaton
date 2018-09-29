<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PESO</title>
	<link rel="stylesheet" type="text/css" href="designPeso.css">
</head>
<body>
	<h1>Ficha do peso</h1>
	<form action="\hackaton\peso\includes\peso.inside.php" method="POST">
		<table>
			<tr>
				<th>Total de frangos</th>
				<th>PESO Machos(g)</th>
				<th>PESO Fêmeas(g)</th>
				<th>PESO Misto(g)</th>
			</tr>
			<tr>
			<td><input type="number" name="EspN"></td>
			<td>IDEAL:<input type="number" name="MascW" value="186" readonly><br></td>
			<td>IDEAL:<input type="number" name="FemW" value="175" readonly><br></td>
			<td>
				IDEAL:<input type="number" name="GenW" value="177" readonly><br>
				REAL: <input type="number" name="TrueW"></td>
			</tr>
		</table>
		<br>
		<br>
		<input type="submit" name="submit" id="botao">
	</form>
</td>
</body>
</html>