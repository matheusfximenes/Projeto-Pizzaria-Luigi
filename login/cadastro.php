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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Sistema para pizzarias - Cliente, Luigi pizzaria.">
    <meta name="author" content="
                                Matheus Freitas Ximenes
                                Francisco Eron
                                ">

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
            <li class="active"><a href="login.php">Cliente</a></li>
            <li><a href="../info/sobre.php">Sobre</a></li>
            <li><a href="../info/contato.php">Contatos</a></li>
            <li><a href="../home.php">Voltar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
     </nav>

    <!-- Begin page content -->
    <div class="container">
      
    <br>
      <div class="page-header">
      </div>
      <div class="row">
            <div class="col-xs-12 col-md-12">
                <section>
                    <form method="POST" action="cadastrarCliente.php" >
                        <h3>Cadastrar</h3><br>
                        <label>Nome</label><br>
                        <input type="text" name="nome"/><br>

                        <label>Número do Telefone</label><br>
                        <input type="text" name="telefone"/><br>

                        <label>Endereço</label><br>
                        <input type="text" name="endereco"/><br>

                        <label>Email</label><br>
                        <input type="text" name="email"/><br>

                        <label>Senha</label><br>
                        <input type="password" name="senha"/><br><br>

                        <button class="btn btn-info" type="submit">Cadastrar</button>
                    </form><br>

                    <button <li><a href="login.php">Já possui login? Clique aqui!</a></li></button>

                </section>
            </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>