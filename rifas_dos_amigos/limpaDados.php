<?php

include "conn.php";


$consulta = $conn->prepare("UPDATE rifa SET nome='', status='DISPONIVEL', instagram = '' 
, telefone = '' ");
if($consulta->execute()){
  echo json_encode("Dados zerados com sucesso!");
}else{
  echo json_encode("Não foi possível zerar os dados!");
}
?>