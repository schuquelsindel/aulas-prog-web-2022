<?php
	function escrever_data($d, $m, $a){
	$meses = array("", "janeiro", "fevereiro", "março". "abril", "maio", "junho", "julho", "agosto",
"setembro", "outubro", "novembro", "dezembro");

	return "$d de $meses[$m] de $a";
	}
	echo ("nascimento é: " . escrever_data(22, 07,2003));
	echo("<br>");

	$pascoa = "A Páscoa é em " . escrever_data(17, 04, 2022);

	$msg = strtoupper($pascoa);
	echo ($msg);
	echo("<br>");
	echo(strtolower("O dia do trabalhador é em DOMINGO, " . escrever_data(1, 5, 2022)));

?>
