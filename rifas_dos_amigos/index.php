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
       
    ?>

    <input class="favorite styled"
       type="button"
       value="<?= $value->numero ?>">

   
  <?php
}
?>
    
</body>
</html>
