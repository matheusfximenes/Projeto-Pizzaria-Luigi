<?php

	include ("../config/conecta.php");

	$parms[':nome'] = $_POST['nome'];
	$parms[':descricao'] = $_POST['descricao'];
	$parms[':preco']= $_POST['preco'];
	$parms[':tamanho'] = $_POST['tamanho'];


	$con = new conecta();
	$res = "INSERT INTO produtos(nome, descricao, preco, tamanho) VALUES(:nome, :descricao, :preco, :tamanho)";
	$stmt = $con->prepare($res); //consulta sql
	$stmt->execute($parms);
	

	$row = $stmt->fetchObject();
	
	if($insert){
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Funfou... =) '); window.location.href='cadastrar_produto.php';</script>";
		header("Location:produto.php");
	}
	else{

		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('N Funfou... =) '); window.location.href='cadastrar_produto.php';</script>";
		header("Location:produto.php");
	}
?>