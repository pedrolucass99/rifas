<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Rifas sorteio</title>
<link rel="stylesheet" href="index.css">
</head>
<body>

    <?php
    include "conn.php";
    $numeros=$conn->prepare('SELECT * FROM rifa order by numero');
    $numeros->execute();
    $dados = $numeros->fetchAll(PDO::FETCH_OBJ);
    foreach($dados as $rs => $value){
      $numeroBloqueado ='';
      if($value->status != 'DISPONIVEL'){
        $numeroBloqueado = 'link_bloqueado';
      }
    ?>
    <a class="<?=$numeroBloqueado?>" href="form.php?rifa=<?=$value->numero?>">
      <input class="favorite styled <?=$value->status?>" type="button" value="<?= $value->numero ?>">
    </a>


   
  <?php
}
?>
    
</body>
</html>
