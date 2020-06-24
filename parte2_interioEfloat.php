<?php
    
    //Tipos de dados primitivos e escalares numéricos
	
	//Tipo de dado primitivo escalar inteiro
	
	$idade = 43;
	var_dump($idade);
	echo "<br/>";
	if (is_int ($idade)){
		echo "É um inteiro.";
	}else{
		echo "Não é um inteiro";
		
	}
	
	    echo "<hr>";
	
    $num = 45;
	var_dump($num);
	echo"<br/>";
	if (is_float($num)){
		echo " É um decimal.";
	}else{
		echo "Não é um decimal.";
	}

	echo "<hr>";
	
	$cash = 100;
	var_dump($cash);
	echo "<br/>";
	if(is_int($cash)){
		echo "Pagamento na mão.";
	}else{
		echo "Pagamento em conta corrente/poupança.";
	}
	
	echo "<hr>";
	
	//Tipo de dado primitivo escalar Float ou Double
	
	$altura = 1.62;
	var_dump ($altura);
	echo "<br/>";
	if(is_float($altura)){
		echo "É um número real.";
	}else {
		echo "Não é um número real.";
	}
	
	echo "<hr>";
	
	// Tipo de dado primitivo escalar Booleano
	
	$var = true;
	var_dump ($var);
	echo "<br/>";
	if(is_bool($var)){
		echo "É um booleano.";
	}else{
		echo "Não é um booleano.";
	}
	
	echo "<hr>";
	
	//Tipo de dado primitivo escalar String
	
	$var = "Luciene";
	var_dump($var);
	echo "<br/>";
	if(is_string($var)){
		echo "É uma string.";	
	}else{
		echo "Não é uma string";
	}
	
	echo "<hr>";
	
	$var = "Alex";
	var_dump($var);
	echo "<br/>";
	if(is_string($var)){
		echo "É o meu nome.";
	}else{
		echo "Não é o meu nome.";
	}
	echo "<hr>";
	
	$variavel = 40;
	var_dump($variavel);
	echo "<br/>";
	if(is_string($variavel)){
		echo "Eu tenho ".$variavel;
	}else{
		echo "Eu não tenho.";
	}
	
	echo "<hr>";
	
	// Concatenando Strings
	
	echo "Alex". " "."Queiroz"." "."da"." "."Silva";
	echo "<br>";
	echo "Giselle"." "."Souza"." "."Martins";
	echo "<br>";
	echo "Josefa"." "."Souza"." "."Martins";
	echo "<br/>";
	echo "Leonardo"." "."da"." "."Silva";
	echo "<br>";
	
	echo "<hr/>";
	
	//Diferença entre aspas simples e aspas duplas
	
	$varString = 'Luciene';
	$varSaida = '***$varString***';
	echo "$varSaida";
	echo "<br/>";
	echo "<br/>";
	$varString = "Luciene";
	$varSaida = "***$varString***";
	echo "***$varString***";
	echo "<br/>";
	
	echo "<hr>";
	
	
	
	
	