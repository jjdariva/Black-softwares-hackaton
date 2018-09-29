<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="racaostyle.css">
	<meta charset="utf-8">
	<title>Ração</title>
</head>
<body>
	<h1>Ração</h1>
	<table>
		<tr>
			<th>Data</th>
			<th>Fase de ração</th>
			<th>Quantidade</th>
		</tr>
		<tr>
		<form action="racao1.php" method="post">
			<th><input type="date" name="dataracao" class="info"></th>
			<th><input type="text" name="faseracao" class="info"></th>
			<th><input type="number" name="quantracao" class="info"></th>
		</tr>
	</table>
	<br><br>
	<input type="submit">
	</form>
	<br><br>
</body>
</html>