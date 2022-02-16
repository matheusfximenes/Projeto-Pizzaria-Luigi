<?php 

	include('../../config/conecta.php');

	$parms[':nome'] =     $_POST['nome'];
	$parms[':telefone'] = $_POST['telefone'];
	$parms[':endereco'] = $_POST['endereco'];
	$parms[':email'] = $_POST['email'];
	$parms[':nascimento'] = $_POST['nascimento'];
	

	$con = new conecta(); 
	$sql = "UPDATE  clientes 
							SET
							   nome = :nome,
							   telefone = :telefone,
							   endereco = :endereco, 
							   email = :email,
							   senha = :senha

							   WHERE telefone = :telefone";



	$stmt = $con->prepare($sql); //consulta sql
	$stmt->execute($parms);

	$select = $stmt->fetchObject();


	if($Atualizar){
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript' >alert('Funfou... =) ');</script>";
		header("Location:cliente.php");
	}
	else{
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Não Funfou... =)'); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:cliente.php");	
	}
