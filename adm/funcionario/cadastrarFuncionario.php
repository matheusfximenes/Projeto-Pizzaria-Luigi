<?php
	
	require_once("../config/conecta.php");

	$parms[':nome'] =     $_POST['nome'];
	$parms[':cargo'] = $_POST['cargo'];
	$parms[':email'] = $_POST['email'];
	$parms[':senha'] = $_POST['senha'];


	$con = new conecta();
	$res = "INSERT INTO  funcionarios (nome, cargo, email, senha ) VALUES (:nome, :cargo, :email, :senha)";
	
	$stmt = $con->prepare($res); //consulta sql
	$stmt->execute($parms);

	$row = $stmt->fetchObject();
	
	if($insert){
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Funfou... =) '); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:c_funcionario.php");
	}
	else{
		echo "<script  language='javascript'  charset='utf-8' type='text/javascript>alert('Não Funfou... =)'); window.location.href='cadastrar_cliente.php';</script>";
		header("Location:c_funcionario.php");	
	}


?>