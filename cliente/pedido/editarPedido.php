<?php
	
	include("../../config/conecta.php");

	$parms[':situacao'] = $_POST['situacao'];
	$parms[':cliente'] = $_POST['cliente'];
	$parms[':produto'] = $_POST['produto'];
	$parms[':quantidade'] = $_POST['quantidade'];
	$parms[':endereco'] = $_POST['endereco'];
	

	var_dump($parms); exit();
	
	$con = new conecta();
	$sql = "UPDATE pedidosd 
							SET 
								situacao = :situacao,
								cliente = :cliente,
								produto = :produto,
								quantidade = :quantidade,
								endereco = :endereco
								
							WHERE cliente = :cliente";

	$stmt = $con->prepare($sql);
	
	$stmt->execute($parms);
	
	if($atualizar){
		header("Location:visualizar_pedido.php");
	}
	else{
		header("Location:visualizar_pedido.php");
	}