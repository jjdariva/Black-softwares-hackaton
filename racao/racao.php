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
		<form action="\hackaton\racao\includes\racao.inside.php" method="POST">
			<th><input type="date" name="rdata" class="info"></th>
			<th><input type="text" name="rfase" class="info"></th>
			<th><input type="number" name="rquant" class="info"></th>
	</table>
			<br><br>
			<input type="submit" name="submit" value='Salvar' id="botao">
		</form>
		</tr>
</body>
</html>