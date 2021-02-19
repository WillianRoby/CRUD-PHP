<?php
session_start();
include ("conexao.php");

$id = $_POST['id'];
if(empty($nome = $_POST['nome']) || 
    empty($endereco = $_POST['endereco']) ||
    empty($telefone = $_POST['telefone']) ||
    empty($email = $_POST['email']) ||
    empty($data_nascimento = $_POST['data_nascimento'])){
        header('Location: cadastro_Edit.php');
        $_SESSION['preencher_cadastro'] = true;
        exit();
    }
    $sql = "UPDATE pessoas SET `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email',`data_nascimento` = '$data_nascimento' WHERE id = $id"; 
    if(mysqli_query($conexao, $sql)){
        header('Location: cadastro_Edit.php');  
        $_SESSION['sucess_cadastro'] = true;       
      }
?>