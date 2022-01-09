<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Rifas sorteio</title>
<?php include 'templates/templateChamada.php'?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="templates/menu.css">
</head>
<body>
  <?php include 'templates/templateMenu.php'?>
<div class="containerf">


    <?php
    include "conn.php";
    $numeros=$conn->prepare('SELECT * FROM rifa order by numero');
    $numeros->execute();
    $dados = $numeros->fetchAll(PDO::FETCH_OBJ);
    $cont = 0;
    foreach($dados as $rs => $value){
      $cont++;
      if($cont==10){
        $cont = 0;
      ?>
        <div class="break"></div>  
      <?php
      }
      $numeroBloqueado ='';
      if($value->status != 'DISPONIVEL'){
        $numeroBloqueado = 'link_bloqueado';
      }
    ?>
    <div class="flex-container ">


    <a class="<?=$numeroBloqueado?>" href="form.php?rifa=<?=$value->numero?>">
      <input class="favorite styled <?=$value->status?>" type="button" value="<?= $value->numero ?>">
    </a>

    </div>
   
  <?php
}
?>
    </div>
</body>
</html>
