<?php
//isset testa se uma variavel existe
	if (isset($_get['enviar'])==true){
//codigo a ser executado

//usando a função empty para saber se um campo foi preenchido
		if (empty($_get["nome"])==true){
			echo ("Por favor preencha o campo <b>nome</b>");
        }else if (empty($_get["nascimento"])){
			echo("preencha a data de nascimento");
		}else if (empty($_get["numero"])){
			echo("preencha o numero");
		}else if (empty($_get["email"])){
			echo("preencha o email");
		}else if (empty($_get["senha"])){
			echo("preencha a senha");
		}else {
			
			$nome = $_get["nome"];
			$nascimento = $_get["nascimento"];
			$numero = $_get ["numero"];
			$email = $_get["email"];
			$senha = $_get["senha"];
}
		echo ("Dados recebidos");
		echo ("Nome $nome<br> Data nasc: $nascimento <br> numero: $numero <br> email: $email");

}else{
header ("location: aula3103.php");
}
?>
