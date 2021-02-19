<?php
session_start();
include ("conexao.php");
$id = $_POST['id'];
$nome = $_POST['nome'];

    $sql = "DELETE from pessoas WHERE id = $id"; 
    if(mysqli_query($conexao, $sql)){
        header('Location: telaPesquisa.php');     
      }
?>