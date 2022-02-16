<?php
	include("../../config/conecta.php");

	
	$parms[':produto']= $_POST['produto'];
	$con = new conecta();
	$res = "SELECT preco FROM produtos WHERE nome = :produto";
	$stmt = $con->prepare($res);
	$stmt->execute($parms);
	$consultas = $stmt->fetchAll();
	$valor = 0; 
	foreach($consultas as $consulta){
		$valor = $consulta['preco'];
	}

	$total = ((float)$valor * (int)$_POST['quantidade']);

	$parms [':total'] = $total;
	$parms[':quantidade'] = $_POST['quantidade'];
	$prod[':produto']= $_POST['produto'];
	$parms[':cliente']  = $_POST['cliente'];
	$parms[':endereco']  = $_POST['endereco'];
	$parms[':situacao'] = 'Aberto';
	$res =  "INSERT INTO pedidosd (cliente, produto, quantidade, situacao,total,endereco) VALUES (:cliente, :produto, :quantidade,:situacao, :total,:endereco)";
	$stmt = $con-> prepare($res);
	$stmt->execute($parms);

	if($stmt){
		echo "Deu certo";
		header("Location:visualizar_pedido.php");
	}
	else{
		echo "não deu certo";
		header("Location:cadastrar_pedido.php");
	}
	
?>

	