<?php
$opcao = $_POST['opcao'];
$status = $opcao=='CONFIRMADO' ? 'CONFIRMADO':'DISPONIVEL';
$numeroRifa = $_POST['numero'];
$consulta = $conn->prepare("UPDATE rifa SET status='$status' WHERE numero='$numeroRifa'");
if($consulta->execute()){
  echo "<script>alert('Opção escolhida com sucesso!')</script>";
  echo '<script>window.location.href = "listaRifa.php";</script>';
}
?>