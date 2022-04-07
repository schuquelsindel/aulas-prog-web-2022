<?php
//atividade 1
	//$i = 0;
	//for ($i=2020; $i<=5000; $i++){
	//if ($i % 2 == 0);
	//	echo "$i <br>";
//		$i++;
//}

// atividade 2
	$i = 0;
	for ($i = 1; $i <=500; $i ++){
	if ($i / 3 == 0){
		echo("fizz");
	} else if ($i / 5 == 0){
		echo ("buzz");
	} else if ($i / 5 == 0 && $i / 3 ==0){
		echo ("fizzbuzz");
	}else{
		echo($i);
	}
	}
		
?>

