<?php

	$email = $_GET['email'];

	include("../config/conecta.php");

	$email = $_GET['email'];

	$con = new conecta();
	$parms = [':email' => $email];

	$sql  =  "DELETE FROM funcionarios WHERE email = :email";

	$stmt = $con->prepare($sql); //consulta sql
	$deleta = $stmt->execute($parms);
	
	if($deleta){
		header('Location:funcionario.php');
	}
	else{
		header('Location:c_funciorio.php');
	}

