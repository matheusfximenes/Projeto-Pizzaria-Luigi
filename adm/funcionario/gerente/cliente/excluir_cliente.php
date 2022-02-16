<?php

	$telefone = $_GET['telefone'];

	include('../../config/conecta.php');

	$telefone = $_GET['telefone'];

	$con = new conecta();
	$parms = [':telefone' => $telefone];

	$sql  =  "DELETE FROM clientes WHERE telefone = :telefone";

	$stmt = $con->prepare($sql); //consulta sql
	$deleta = $stmt->execute($parms);
	
	if($deleta){
		header('Location:cliente.php');
	}
	else{
		header('Location:editar_cliente.php');
	}

