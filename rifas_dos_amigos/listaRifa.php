<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de apostadores</title>
</head>
<body>
  <?php
    include 'verificaSessao.php';
    include 'conn.php';
    $numeros=$conn->prepare("SELECT * FROM rifa WHERE status='AGUARDANDO' order by numero");
    $numeros->execute();
    $dados = $numeros->fetchAll(PDO::FETCH_OBJ);
    var_dump($dados);
  ?>
</body>
</html>