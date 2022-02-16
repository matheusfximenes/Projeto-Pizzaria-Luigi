<?
	include("../config/conecta.php");

	$parms[':cliente']  = $_POST['cliente'];
	$parms[':produto']= $_POST['produto'];
	$parms[':quantidade'] = $_POST['quantidade'];
	$parms[':situacao'] = $_POST['situacao'];
	
	$con = new conecta();
	$res = "SELECT preco FROM produtos WHERE nome = ':produto'";
	$stmt = $con->prepare($res);
    $stmt->execute();
    $consultas = $stmt->fetchAll();
	foreach($consultas as $consulta){
		$valor = $consulta['preco'];
	}

	
	$total = ($valor * $quantidade);
	$parms [':total'] = $_POST['total'];
	
	$res =  "INSERT INTO pedidos (cliente, produto, quantidade, total) VALUES (:cliente, :produto, :quantidade, :total)";
	$stmt = $con-> prepare($res);
	$stmt->execute($parms);
	if($stmt){
		echo "Deu certo";
		header("Location:c_pedido.php");
	}
	else{
		echo "não deu certo";
		header("Location:c_pedido.php");
	}
	
?>

	