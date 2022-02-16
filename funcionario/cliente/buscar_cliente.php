<?php
	
	if(count($_POST) == 0){
		$telefone = 0;
	}
	else{
		$telefone  = $_POST['telefone'];
	}
	
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizzaria Luigi </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style type="text/css">
    .topo{
      height: 100px;
    }

     a:link{
        text-decoration: none;
      }
    </style>

    <script type="text/javascript">
    function voltar () {
    		window.location.href=('index.php');
    }
    </script>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pizzaria Luigi</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="cliente.php">Cliente</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
          </ul>
        </div>
      </div>
     </nav>

    <!-- Começo da pagina -->
    <div class="container">
      
    <br>
        <div class="page-header">
          <div class="row">
            <div class="col-xs-1 topo">
              <img src="../img/cliente.png" alt="Clientes" >
            </div>
            <div class="col-xs-11">
              <h2>Cliente</h2>
            </div>
          </div>
        </div>
            <div class="row">
            <div class="col-xs-12 col-md-12">
                <section>
                    <form method="POST" action="#">
                        <h3>Buscar Cliente</h3><br>
                        
                        <label>Número do Telefone</label><br>
                        <input type="text" name="telefone" placeholder="ex: 88 9999-9999"><br><br>
                        
                        <button class="btn btn-primary" type="submit">Buscar</button> <button class="btn btn-danger" onclick="voltar()">Cancelar</button>
                    </form>
                </section>
                <hr>
            </div>
        </div>
        </div>
    
    <footer class="footer">
      <div class="container">
      	<table class="table">
      		<thead>
      			<th>Nome</th>
      			<th>Telefone</th>
      			<th>Endereco</th>
      			<th>Email</th>
      			<th>Senha</th>
            <th style="color:orange;">Editar*</th>
            <th style="color:red;">Excluir*</th>
      		</thead>

      		<tbody>
      		<?php

				include('../config/conecta.php');
				$con = new conecta();
        $parms = [':telefone' => $telefone];
        $query = "SELECT nome, telefone, endereco, email, senha FROM clientes WHERE telefone = :telefone";
				$stmt = $con->prepare($query); //consulta sql
	      $stmt->execute($parms);

	      $consultas = $stmt->fetchAll();
        
      			foreach( $consultas as $consulta){
      				print "<td>$consulta[nome]</td>";
      				print "<td>$consulta[telefone]</td>";
      				print "<td>$consulta[endereco]</td>";
      				print "<td>$consulta[email]</td>";
      				print "<td>$consulta[senha]</td>";
              print "<td><a  class='btn btn-warning' href='editar_cliente.php?telefone=$consulta[telefone]'>Editar</a></td>";
              print "<td><a  class='btn btn-danger' href='excluir_cliente.php?telefone=$consulta[telefone]'>Excluir</a></td>";
	      			print "</tbody>";
      			}

      			print "</table>";
      		?>
      	
        <hr>
        <p class="text-muted">
          
        </p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>