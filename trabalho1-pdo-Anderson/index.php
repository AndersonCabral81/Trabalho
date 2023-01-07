
<!--?php
  Require 'conexao.php';

  if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])): ?> -->

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Empresa</title>
  </head>
  <body>
      
      <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="display-4">Cadastro de Produtos</h1>
                        <p class="lead">Sistema de Cadastro</p>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="cadastro.php" role="button">Cadastrar</a>
                        <a class="btn btn-primary btn-lg" href="pesquisa.php" role="button">Pesquisar</a>
                        <a class="btn btn-primary btn-lg" href="usuario.php" role="button">Cadastrar Usuario</a>
                    </div>
                      <div class=""><a href="logout.php">Sair</a></div>
                    
                </div>
            </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
 <!-- ?php else: header("location: login.php"); endif; ?> -->