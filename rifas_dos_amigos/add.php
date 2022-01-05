<?php

include "conn.php";

$consulta=$conn->prepare("INSERT INTO rifa(nome,numero,'status',instagram,telefone) VALUES(?,?,?,?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$numero);
$consulta->bindParam(3,$status);
$consulta->bindParam(3,$instagram);
$consulta->bindParam(3,$telefone);

$consulta->execute();

header('location:');

?>