<?php
include 'conn.php';
session_start();
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $query=$conn->prepare("SELECT * FROM usuario WHERE nome='$nome' and senha='$senha'");
  $query->execute();
  $dados = $query->fetchAll(PDO::FETCH_OBJ);
  if(count($dados)){
    $_SESSION['idUsuario'] = $dados[0]->id;
    header('Location: listaRifa.php');
  }
  else{
    echo "<script>alert('Usuário ou senha incorretos')</script>";
    echo '<script>window.location.href = "loginForm.php";</script>';
  }
?>