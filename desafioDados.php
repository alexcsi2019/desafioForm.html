<?php
    $nome = $_POST["nome"];
	$idade = $_POST["idade"];
	$altura = $_POST["altura"];
	$peso = $_POST["peso"];
	$imc = $peso/($altura*$altura);
	echo "$nome, você mede $altura metros e pesa $peso kg com $idade anos de idade. Com esses dados o seu IMC é " . number_format ($imc,1).".";
	echo "<br><br>";
	if($imc > 0 and $imc < 18.5){
		echo "Baixo peso";		
	}elseif($imc >= 18.5 and $imc < 25){
		echo "Peso adequado";		
	}elseif($imc >= 25 and $imc < 30){
		echo "Sobrepeso";		
	}else{
		echo "Obesidade";
	}
	