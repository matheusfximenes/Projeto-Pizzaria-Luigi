<?php
	
	include("../../../config/conecta.php");

	$nome = $_POST['nome'];



?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  

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

  </head>

  <body>

    <!-- Fixed navbar -->
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
            <li class="active"><a href="produto.php">Produto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
     </nav>

    <!-- Begin page content -->
    <div class="container">
      
    <br>
        <div class="page-header">
          <div class="row">
            <div class="col-xs-1 topo">
              <img src="../img/pizza.png" alt="Produtos" >
            </div>
            <div class="col-xs-11">
              <h2>Produtos</h2>
            </div>
          </div>
        </div>
            <div class="row">
            <div class="col-xs-12 col-md-12">
                <section>
                    <form method="post" action="#">
                        <h3>Buscar Produto</h3><br>
                        
                        <label>Nome Produto</label><br>
                        <input type="text" name="nome"><br><br>
                        
                        <button class="btn btn-primary" type="submit">Buscar</button> <button class="btn btn-danger" type="submit">Cancelar</button>
                    </form>
                </section>
            </div>
            <div class="col-md-12">
            	<table class="table">
            		<thead>
            			<th>Nome</th>
            			<th>Descrição</th>
            			<th>Preço</th>
                  <th>Tamanho</th>
            			<th style="color:orange;">Editar</th>
            			<th style="color:red;">Excluir</th>
            		</thead>
            		<tbody>
            			<?php
            
                  $con = new conecta();;
                  $parms = [':nome' => $nome];
            			$query = "SELECT  * FROM produtos WHERE nome =  :nome";
                  $stmt = $con->prepare($query); //consulta sql
	                $stmt->execute($parms);

            			$consultas = $stmt->fetchAll();
                  foreach( $consultas as $consulta){
            				print "<td>$consulta[nome]</td>";
            				print "<td>$consulta[descricao]</td>";
            				print "<td>$consulta[preco]</td>";
                    print "<td>$consulta[tamanho]</td>";
            				print "<td><a href='editar_produto.php?nome=$consulta[nome]' class='btn btn-warning'>Editar</a></td>";
            				print "<td><a href='editar_produto.php?nome=$consulta[nome]' class='btn btn-danger'>Excluir</a></td>";
            				print "</tbody>";
            			}
            		?>
            	</table>
            </div>
        </div>
        </div>
    
    <footer class="footer">
      <div class="container">
        <hr>
        <p class="text-muted">
          <center> </br> </center>
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