<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizzaria Luigi </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
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
    	window.location.href=('cliente.php');
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
            <li class="active"><a href="cliente.php">Cliente</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
          </ul>
        </div>
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
            <div class="row">
            <div class="col-xs-12 col-md-12">
                <section>
                    <form method="POST" action="cadastrarCliente.php" >
                        <h3>Cadastrar Cliente</h3><br>
                        <label>Nome</label><br>
                        <input type="text" name="nome"/><br>

                        <label>Número do Telefone</label><br>
                        <input type="text" name="telefone"/><br>

                        <label>Endereço</label><br>
                        <input type="text" name="endereco"/><br>

                        <label>Email</label><br>
                        <input type="text" name="email"/><br>

                        <label>Senha</label><br>
                        <input type="password" name="nascimento"/><br><br>

                        <button class="btn btn-info" type="submit">Cadastrar</button>
                    </form><br>

                    <button class="btn btn-danger" onclick="voltar();">Cancelar</button>

                </section>
            </div>
        </div>
        </div>
    
    <footer class="footer">
      <div class="container"></div>
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