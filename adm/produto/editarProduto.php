<?php
	
	include("../config/conecta.php");

	$parms[':nome'] = $_POST['nome'];
	$parms[':descricao'] = $_POST['descricao'];
	$parms[':preco'] = $_POST['preco'];
	$parms[':tamanho'] = $_POST['tamanho'];

	$con = new conecta(); 
	$sql = " UPDATE produtos 
							SET
								nome = ':nome' ,
								descricao = ':descricao' ,
								tamanho = ':tamanho',
								preco = ':preco' 

							WHERE nome = ':nome'";

	$stmt = $con->prepare($sql); //consulta sql
	$stmt->execute();

	$select = $stmt->fetchObject();

	if($Atualizar){
		header("Location:produto.php");
	}
	else{
		header("Location:editar_produto.php");
	}
	
?>