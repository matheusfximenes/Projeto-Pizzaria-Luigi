



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
    <script src="js/ie-emulation-modes-warning.js"></script>

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
          <a class="navbar-brand" href="#">PIzzaria Luigi</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../index.php">Principal</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="sair.php" >Sair</a></li>
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
              <img src="../img/cliente.png" alt="Clientes" >
            </div>
            <div class="col-xs-11">
              <h2>Cliente</h2>
            </div>
          </div>
        </div>
        

        <!-- Sistema --> 
        <!-- Cliente ações   -->
        
        <div class="row">
          <div class="col-xs-6 col-md-3" >
            <a href="buscar_cliente.php"  class="thumbnail" >
             <h5>Buscar Cliente</h5>
              <img src="../img/buscar_cliente.png" alt="Clientes" >
            </a>
          </div>
          
         
          <div class="col-xs-6 col-md-3">
            <a href="cadastrar_cliente.php"  class="thumbnail" >
             <h5>Adicionar Cliente</h5>
              <img src="../img/adicionar_cliente.png" alt="Clientes" >
            </a>
          </div>

          <!--Cliente-->
       
          <div class="col-xs-6 col-md-3">
            <a href="buscar_cliente.php"  class="thumbnail" >
             <h5>Editar Cliente</h5>
              <img src="../img/editar_cliente.png" alt="Clientes" >
            </a>
          </div>
        
          <div class="col-xs-6 col-md-3" >
            <a href="buscar_cliente.php"  class="thumbnail" >
             <h5>Remover Cliente</h5>
              <img src="../img/remover_cliente.png" alt="Clientes" >
            </a>
          </div>


          <div class="col-xs-6 col-md-3" >
            <a href="visualizar_cliente.php"  class="thumbnail" >
             <h5>Visualizar Cliente</h5>
              <img src="../img/cliente.png" alt="Clientes" >
            </a>
          </div>

        </div>
    </div>

    <footer class="footer">
      <div class="container">
        <hr>
        <p class="text-muted">
          <center> </br></center>
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
