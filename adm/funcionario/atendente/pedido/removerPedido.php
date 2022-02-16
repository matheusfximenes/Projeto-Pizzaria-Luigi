<?php

include("../../../config/conecta.php");

	

	$id = $_GET['id'];
	$con = new conecta();
	$parms = [':id' => $id];
	$sql = "DELETE FROM pedidos WHERE id = :id";
	$stmt = $con->prepare($sql);
	$deletar = $stmt->execute($parms);

	if($deletar){
		header("Location:index.php");
	}
	else{
		header("Location:visualizar_produto.php");
	}
	