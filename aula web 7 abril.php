<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content =  width=device-width,initial-scale=1">
	<title></title>
</head>
<body>
	Formulário utilizando get, que recebe os valores e verifica
	<form metod="GET"> 
		<input type = "number" name = "numero">
		<input type = "submit" name ="enviar" value = "verificar">
</form>
	<?php
		if (isset($_GET['enviar'])){
			$numero = $_GET['numero'];
			if (isset($numero)&& empty($numero) == false){
				if ($numero%2==0)
					echo("numero $numero é <b>par</b>");
				else
					echo("numero $numero é <b>impar</b>''");
			}else{
				echo("digite um valor valido");
			}
			}
		
?>
</body>
