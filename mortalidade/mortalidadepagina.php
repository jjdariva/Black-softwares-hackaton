<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<link rel="stylesheet" type="text/css" href="essecsspertencemortalidade.css">
		<script>
		function funcaoSemana() {
			data = new Date()
			mes = data.getMonth()
			dia = data.getDate()
			a = 0
			b = 0
			document.getElementById('DIA0').innerHTML = dia + '/' + (mes + 1)
			
			for(i = 1; i<=6;i++){
			if (dia + i == 32) {
				dia = 1
				document.getElementById('DIA'+i).innerHTML = 1 + '/' + (mes + 2)
				document.getElementById('DIA'+(i+1)).innerHTML = 2 + '/' + (mes + 2)
				document.getElementById('DIA'+(i+2)).innerHTML = 3 + '/' + (mes + 2)
				document.getElementById('DIA'+(i+3)).innerHTML = 4 + '/' + (mes + 2)
				document.getElementById('DIA'+(i+4)).innerHTML = 5 + '/' + (mes + 2)
				document.getElementById('DIA'+(i+5)).innerHTML = 6 + '/' + (mes + 2)
				break
				
			} else {
				b = b + 1
				document.getElementById('DIA'+i).innerHTML = (dia+b) + '/' + (mes + 2)	
			}
		}
	}
		</script>
</head>
<body onload="funcaoSemana()">
	<div>
		<center><h2>Mortalidade</h2></center>
		<table class="a">
			  <tr class="coluna">
			    <th>Mortalidade Diária</th>
			    <th>1°<br><p id="DIA0"></p></th>
			    <th>2°<br><p id="DIA1"></p></th>
			    <th>3°<br><p id="DIA2"></p></th>
			    <th>4°<br><p id="DIA3"></p></th>
			    <th>5°<br><p id="DIA4"></p></th>
			    <th>6°<br><p id="DIA5"></p></th>
			    <th>7°<br><p id="DIA6"></p></th>
			  </tr>
			  <tr>
			    <td>Morte Natural</td>
			    <script>
			    	for (var i = 0; i<7; i++) {	   
document.write('<td><input class="input" type="number" id="MN'+i+'" name="MN'+i+'"></td>')
			    	}
			    </script>
			  </tr>
			  <tr>
			    <td>Eliminado</td>
			    <script>
			    for (var i = 0; i<7; i++) {	   
document.write('<td><input class="input" type="number" id="ME'+i+'" name="ME'+i+'"></td>')
			    	}
			    </script>
			  </tr>
		</table>
	</div>
</body>
</html>