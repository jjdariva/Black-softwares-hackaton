<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PESO</title>
	<link rel="stylesheet" type="text/css" href="designPeso.css">
</head>
<body>
	<h1>Ficha do peso</h1>
	<table>
		<tr>
			<th>Total de frangos</th>
			<th>PESO Machos(g)</th>
			<th>PESO Fêmeas(g)</th>
			<th>PESO Misto(g)</th>
		</tr>
		<tr>
			<td><input type="number" name="totalFrangos"></th>
			<td>IDEAL:<input type="number" name="idealMachos" value="186" readonly><br>
				REAL: <input type="number" name="realMachos"></td>
			<td>IDEAL:<input type="number" name="idealFemeas" value="175" readonly><br>
				REAL: <input type="number" name="realFemeas"></th>
			<td>IDEAL:<input type="number" name="idealMisto" value="177" readonly><br>
				REAL: <input type="number" name="realMisto"></th>
		</tr>
	</table>
</body>
</html>