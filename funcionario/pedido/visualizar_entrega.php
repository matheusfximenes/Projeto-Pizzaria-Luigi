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

      .cor{
        background-color: #FF7D03;
        color: white;
        font-size: 18px;
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
            <li class="active"><a href="pedido.php">Pedido</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
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
              <img src="../img/pedido.png" alt="pedido" >
            </div>
            <div class="col-xs-11">
              <h2>Pedido</h2>
            </div>
          </div>
        </div>
            <div class="row">
              <div class="col-md-12">
                  <table class="table table-hover">
                    <thead>
                      <th style="background-color:#9461FA;">Nº Pedido</th>
                      <th style="background-color:#FA616D;">Entregador</th>
                      <th style="background-color:#61FAE3;">Total</th>
                      <th style="background-color:#7BF855;">Status</th>
                      <th style="background-color:#FF7D03;">Editar</th>
                      
                    </thead>
                    <tbody>
                      <?
                        
                        include("../config/conecta.php");
                        $sql = "SELECT *  FROM pedidos WHERE status != 'finalizado'";
                        $resultado = mysql_query($sql, $conecta);

                        while ($consulta = mysql_fetch_assoc($resultado)) {
                           print"<td>$consulta[pedidos]</>";
                           print"<td>$consulta[entregador]</>";
                           print"<td style='color:#7861FA'>R$ $consulta[total]</>";
                           print"<td style='color:green'>$consulta[status]</>";
                           print"<td><a href='editar_pedido.php?pedidos=$consulta[pedidos]' class='btn cor'>Editar</a></td>";
                           print "</tbody>";
                        }
                      ?>
                    
                  </table>
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