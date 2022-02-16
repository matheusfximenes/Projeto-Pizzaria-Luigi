<?php

	include("../../../config/conecta.php");

	$nome = $_GET['nome'];
	$con = new conecta();
	$parms = [':nome' => $nome];

	$sql = "DELETE FROM produtos WHERE nome = :nome";
	$stmt = $con->prepare($sql);
	$deletar = $stmt->execute($parms);

	if($deletar){
		header("Location:produto.php");
	}
	else{
		header("Location:visualizar_produto.php");
	}


?>
