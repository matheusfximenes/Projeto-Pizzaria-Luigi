<?php
	
	include('../../config/conecta.php');

	$parms[':nome'] =     $_POST['nome'];
	$parms[':telefone'] = $_POST['telefone'];
	$parms[':endereco'] = $_POST['endereco'];
	$parms[':email'] = $_POST['email'];
	$parms[':senha'] = (md5($_POST['senha']));


	$con = new conecta();
	$res = "INSERT INTO  clientes (nome, telefone, endereco, email, senha) VALUES (:nome, :telefone,:endereco, :email,:senha)";
	
	$stmt = $con->prepare($res); //consulta sql
	$stmt->execute($parms);

	$row = $stmt->fetchObject();
	
	if($insert){
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Funfou... =) '); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:cadastrar_cliente.php");
	}
	else{
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Não Funfou... =)'); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:cadastrar_cliente.php");	
	}


?>