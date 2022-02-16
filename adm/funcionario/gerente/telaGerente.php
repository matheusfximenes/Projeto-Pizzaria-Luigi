
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

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
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
            <li><a href="../../../sair.php" >Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      

        <div class="page-header">
          </br><h1>Área Administrativa - Gerente</h1>
        </div>
        
        <!-- Sistema --> 

        <!--Cliente-->
        <div class="row">
              <div class="col-xs-6 col-md-3">
                <a href="cliente/cliente.php" class="thumbnail" >
                 <h5>Cliente</h5>
                  <img src="img/cliente.png" alt="Clientes" >
                </a>
              </div>


              <!--Produto-->
              <div class="col-xs-6 col-md-3">
                <a href="produto/produto.php" class="thumbnail">
                <h5>Produto</h5>
                  <img src="img/pizza.png" alt="Produtos" >
                </a>
              </div>

              <!--Pedido-->
              <div class="col-xs-6 col-md-3">
                <a href="pedido/pedido.php" class="thumbnail">
                <h5>Pedido</h5>
                  <img src="img/pedido.png" alt="Pedidos" >
                </a>
              </div>
              
              <!--Relatorio-->
               <div class="col-xs-6 col-md-3">
                <a href="relatorio/relatorio.php" class="thumbnail">
                <h5>Relatorio de Vendas</h5>
                  <img src="img/editar_pedido.png" alt="Relatorio" >
                </a>
              </div>

        </div>
    </div>

    <footer class="footer">
      <div class="container">
        <hr>
        <p class="text-muted">
          <center></br> </center>
        </p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
