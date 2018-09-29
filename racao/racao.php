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
		<form>
			<th><input type="date" name="dataracao" class="info"></th>
			<th><input type="text" name="faseracao" class="info"></th>
			<th><input type="number" name="quantracao" class="info"></th>
		</form>
		</tr>
	</table>
	<br><br>
	<input type="submit" name="enviarracao" value='Salvar' id="botao">
</body>
</html>