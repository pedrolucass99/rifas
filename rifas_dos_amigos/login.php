<?php
include 'conn.php';
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $query=$conn->prepare("SELECT * FROM usuario WHERE nome='$nome' and senha='$senha'");
  $query->execute();
  $dados = $query->fetchAll(PDO::FETCH_OBJ);
  if(count($dados)){
    header('Location: index.php');
  }
  else{
    echo "<script>alert('Usuário ou senha incorretos')</script>";
    echo '<script>window.location.href = "loginForm.php";</script>';
  }
?>