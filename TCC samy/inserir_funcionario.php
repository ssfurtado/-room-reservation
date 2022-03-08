<?php
//Aqui conectamos no banco de dados
require("config.php");

//Aqui resgatamos os valores enviados do formulario pelo metodo POST
$nome		=	$_POST['nome'];
$autor		=	$_POST['autor'];
$editora	=	$_POST['editora'];	
$rua        =   $_POST['rua'];	



	//Aqui enviamos os valores para o banco de dados
	$x	=	$pdo-> prepare("INSERT INTO usuarios(nome, autor, editora, rua) VALUES (?,?,?,?)");

	if($x->execute(array($nome, $autor, $editora, $rua))){
		echo" cadastro ok";
	}else{
		echo" Erro ao cadastrar";
	
	}


?>
