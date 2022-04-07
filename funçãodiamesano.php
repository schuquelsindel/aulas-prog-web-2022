<?php
	/*function escreverdata($d, $m , $a){
 	$meses = array("", "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");


	echo("$d de $meses[$m] de $a");
	}
	escreverdata (22,7,2003);
	echo ("<br>");
	escreverdata (10,7,2003);
	FUNÇÃO SEM RETORNO
	*/
	
	function escreverdata($d, $m , $a){
	$meses = array("", "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");

	return"$d de $meses[$m] de $a";
	}
	echo ("data aniversário sindel é " . escreverdata(22,7,2003));
	echo ("<br>");
	echo ("data aniversário juan é " . escreverdata(10,7,2003));
?>
