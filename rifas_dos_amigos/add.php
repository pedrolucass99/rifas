<?php

include "conn.php";
$status = 'AGUARDANDO';
$nome = $_POST['nome'];
$numero = $_POST['numero'];
$instagram = $_POST['instagram'];
$telefone = $_POST['telefone'];

$consulta = $conn->prepare("UPDATE rifa SET nome='$nome', status='$status', instagram = '$instagram' 
, telefone = '$telefone' 
WHERE numero='$numero'");
if($consulta->execute()){
  echo "<script>alert('Número escolhido com sucesso!')</script>";
  echo '<script>window.location.href = "pix.html";</script>';
}



?>