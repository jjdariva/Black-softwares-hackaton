<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PESO</title>
	<link rel="stylesheet" type="text/css" href="designPeso.css">
</head>
<body>
	<h1>Ficha do peso</h1>
	<form action="pes.php" method="post">
	<table>
		<tr>
			<th>Total de frangos pesados</th>
			<th>PESO Machos(g)</th>
			<th>PESO Fêmeas(g)</th>
			<th>PESO Misto(g)</th>
		</tr>
		<tr>
			<td><input type="number" name="totalfrangos"></th>
			<td>IDEAL:<input type="number" name="idealMachos" value="186" readonly><br>
				
			<td>IDEAL:<input type="number" name="idealFemeas" value="175" readonly><br>
				
			<td>IDEAL:<input type="number" name="idealMisto" value="177" readonly><br>
				REAL: <input type="number" name="realMisto"></th>
		</tr>
	</table>
	<br><br>
	<input type="submit">
	</form>
</body>
</html>