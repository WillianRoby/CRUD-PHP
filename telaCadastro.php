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

    <title>CRUD</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col">
            <h1>Cadastro</h1>
            <form action="cadastro.php" method="POST">
            <?php
            if(isset($_SESSION['preencher_cadastro'])):
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Atenção!</strong> Preencha os dados corretamente!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            endif;
            unset($_SESSION['preencher_cadastro']);
            ?>
            <?php
            if(isset($_SESSION['sucess_cadastro'])):
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Cadastrado com sucesso! <a href="#" class="alert-link">Clique aqui</a> para fazer o login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            endif;
            unset($_SESSION['sucess_cadastro']);
            ?>
            <?php
            if(isset($_SESSION['email_existe'])):
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                O E-mail digitado já está cadastrado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            endif;
                unset($_SESSION['email_existe']);
            ?>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-3">
                    <label for="endereço" class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
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