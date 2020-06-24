<?php
    $nome = "Luciene Motta";
	$idade = 43;
	$altura = 1.62;
	$peso = "não quero nem ver";
	$comentario = "estou com saudade de vocês!";
	echo "Meu nome é $nome, tenho $idade. Meço $altura metros e meu peso $peso.<br/>";
	echo "Queria dizer que $comentario<br/>";	
	echo "<hr>";
?>	
<?php	
	$nome = "Luciene Motta";
	$idade = 43;
	$altura = 162;
	$peso = 68.5;
	$comentario = "agora entreguei que estou comendo mais do que deveria";
	echo "Meu nome é $nome, tenho $idade. Meço $altura centímetros e meu peso é $peso kg.<br/>";
	echo "Queria dizer que $comentario!";
	echo "<hr>";
?>
<?php
    $var = 1234;
	$outraVar = $var;
	$maisUmaVar = &$var;
	echo "Conteúdo de var é $var .<br/>";
	echo "Conteúdo de outraVar é $outraVar .<br/>";
	echo "Conteúdo de maisUmaVar é $maisUmaVar .<br/>";
	echo "<hr>";
	$var = "Luciene";
	$outraVar = $var;
	$maisUmaVar = &$var;
	echo "Conteúdo de var é $var .<br/>";
	echo "Conteúdo de outraVar é $outraVar .<br/>";
	echo "Conteúdo de maisumaVar é $maisUmaVar .<br/>";
	echo "<hr>";
	$outraVar = "CSI";
	$var = $outraVar;
	$maisUmaVar = &$outraVar;
	echo " Conteúdo de var é $var . <br/>";
	echo " Conteúdo de outraVar é $outraVar . <br/> ";
    echo " Conteúdo de maisUmaVar é $maisUmaVar . <br/>";
	echo "<hr>";
	$maisUmaVar = "informática";
	$var = &$maisUmaVar;
	$outraVar = $var;
	echo "Conteúdo de var é $var .<br/>";
	echo "Conteúdo de outraVar é $outraVar .<br/>";
	echo "Conteúdo de maisUmaVar é $maisUmaVar . <br/>";
	echo "<hr>";
?>
	
	