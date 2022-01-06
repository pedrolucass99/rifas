<?php
include 'conn.php';
$opcao = $_POST['opcao'];
$status = $opcao=='CONFIRMADO' ? 'CONFIRMADO':'DISPONIVEL';
$numeroRifa = $_POST['numero'];
if($status=='CONFIRMADO'){
  $msg = 'Rifa confirmada com sucesso!';
}else{
  $msg = 'Rifa descartada e voltará a ficar disponível para outros jogadores';
}

$consulta = $conn->prepare("UPDATE rifa SET status='$status' WHERE numero='$numeroRifa'");
if($consulta->execute()){
  echo json_encode($msg);
}else{
  echo json_encode('Não foi possível executar ação');
}
?>