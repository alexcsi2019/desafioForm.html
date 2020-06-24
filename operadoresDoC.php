<?php
    echo '$var seguido de echo ++$var: ';
	$var = 10;
	echo ++$var; //pré-incremento: ($var = 10) + 1, primeiro ++$var depois imprime 11
	
	echo "<hr>";
	
	$var = 10;
	echo $var++; //pós-incremento: primeiro imprime 10 depois incrementa +1
	echo "<br>";
	echo 'Outro echo $var: ';
	echo $var;
	
	echo "<hr>";
	
	echo '$var seguido de echo --$var: ';
	$var = 10;
	echo --$var; //pré-decremento: ($var = 10) - 1, primeiro --$var depois imprime 9
	
	echo "<hr>";
	
	$var = 10;
	echo $var--; //pós-decremento: primeiro imprime 10 depois decrementa -1
	echo "<br>";
	echo 'outro echo $var--: ';
	echo $var--;
	
	echo "<hr>";
	
	$a = 10;
	$b = 12;
	$c = 2;
	$b = $c--;
	$a = ++$b;
	echo "$a - $b - $c";
	
	echo "<hr>";
	
	$var_1 = 5;
	$var_2 = '5';
	if ($var_1 == $var_2){
		echo "Sim";
	}else{
		echo "Não";
	}
	
	echo "<hr>";
	
    