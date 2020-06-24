<?php
    //Alguns tipos de Operadores em PHP
	
	//Operadores de Atribuição
	
	$var = 13;
	$var_1 = ($var_2 = 7) + 13;
	echo "$var_1";
	echo "<br/>";
	echo "$var_2";
	echo "<br/>";
	echo "<hr>";
	
	//Operadores Aritméticos
	
	$v1 = 7;
	$v2 = 3;
	$v = ($v1%$v2);
	echo "$v";
	echo "<br/>";
	echo "<hr/>";
	
	//Operadores Relacionais
	$v1 = 7;
	$v2 = 5;
	if($v1 == $v2){
		echo "Verdadeiro";
	}else{
		echo "Falso";
	}
	echo "<hr/>";
	
	//Operadores Lógicos
	
	echo "<hr/>";
	
	//Operadores herdados da Linguagem C
	//Funcionamento dos Operadores ++ e --
	
	$var = 10;
	echo ++$var;
	echo "<br/>";
	echo $var++;
	echo "<br/>";
	echo --$var;
	echo "<br/>";
	echo $var--;
	echo "<br/>";
	echo "<hr/>";
	