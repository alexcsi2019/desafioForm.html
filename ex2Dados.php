<?php 
    $nome = $_POST["nome"];
	$idade = $_POST["idade"];
	
	if($idade >= 18 and $idade < 70){
		
		echo "$nome, você é eleitor obrigatório.";	
	
	}elseif($idade >= 16 or $idade >= 70){
		
		echo "$nome, você é eleitor opcional.";	
		
	}else{
		
		echo "$nome, você ainda não pode votar.";	
		
	}
	
	
