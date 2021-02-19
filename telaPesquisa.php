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

    <title>Pesquisa</title>
  </head>
  <body>

  <?php
    $pesquisa = $_POST['busca'] ?? '';
    include "conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conexao, $sql);
  ?>

  <div class="container">
    <div class="row">
      <div class="col">
       <h1>Pesquisar</h1>
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
           <form class="d-flex" action="telaPesquisa.php" method="POST">
            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
            <button class="btn btn-success" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>
      <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Endereço</th>
          <th scope="col">Telefone</th>
          <th scope="col">E-mail</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">Funções</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
        while($linha = mysqli_fetch_assoc($dados)){
          $id = $linha['id'];
          $nome = $linha['nome'];
          $endereco = $linha['endereco'];
          $telefone = $linha['telefone'];
          $email = $linha['email'];
          $data_nascimento = $linha['data_nascimento'];

          echo "<tr>
                  <th scope='row'>$nome</th>
                  <td>$endereco</td>
                  <td>$telefone</td>
                  <td>$email</td>
                  <td>$data_nascimento</td>
                  <td width=150px>
                    <a href='cadastro_Edit.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                    <a href='' class='btn btn-danger btn-sm'>Excluir</a>
                  <td>
                </tr>";
        }
      ?>
      </tbody>
    </table>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>