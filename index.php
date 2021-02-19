<?php
session_start();
?>
<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Início</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">CRUD</h1>
            <p class="lead">CRUD desenvolvido para estudo.</p>
            <hr class="my-4">
            <p>Selecione o que deseja fazer:</p>
            <a class="btn btn-primary btn-lg" href="telaCadastro.php" role="button">Cadastrar</a>
            <a class="btn btn-primary btn-lg" href="telaPesquisa.php" role="button">Pesquisar</a>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>