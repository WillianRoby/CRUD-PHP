<?php
session_start();
include("conexao.php");

if(empty($nome = $_POST['nome']) || 
    empty($endereco = $_POST['endereco']) ||
    empty($telefone = $_POST['telefone']) ||
    empty($email = $_POST['email']) ||
    empty($data_nascimento = $_POST['data_nascimento'])){
      header('Location: telaCadastro.php');  
      $_SESSION['preencher_cadastro'] = true;
      exit();
  }
    if(isset($_POST['email'])){
      $validaEmail = $_POST['email'];
      $sql = mysqli_query($conexao, "SELECT * FROM pessoas WHERE email = '{$validaEmail}'");
      if(mysqli_num_rows($sql)>0){
        header('Location: telaCadastro.php');
        $_SESSION['email_existe'] = true;
        exit();
      }
      else{
          $sql = "INSERT INTO pessoas (nome, endereco, telefone, email, data_nascimento) VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento')";
          if(mysqli_query($conexao, $sql)){
          header('Location: telaCadastro.php');
          $_SESSION['sucess_cadastro'] = true;      
          exit();        
         }
      }
  }
?>