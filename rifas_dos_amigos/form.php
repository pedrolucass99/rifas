<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Rifas sorteio</title>
<link rel="stylesheet" href="index.css">


<script type="text/javascript">
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeyup = function(){
		mascara( this, mtel );
	}
}
</script>
 
</head>
<body>
<?php
include 'templates/templateMenu.php';
    $numeroRifa = $_GET['rifa'];
?>
<div class="jumbotrom text-dark">
  <div class="row">
    <div class="col-5">
    <form action="add.php" method="POST">
        <h2>Confirmar rifa</h2>
        <div class="form-group">
        <label>Seu nome</label>
          <input type="text" placeholder="Seu nome" name="nome" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="">Número da Rifa</label>
          <input type="text" placeholder="numero" name="numero" value="<?=$numeroRifa?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="">instagram</label>
          <input type="text" placeholder="instagram" name="instagram" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Telefone</label>
          <input type="text" name="telefone" id="telefone" placeholder="Digite um número de telefone" maxlength="15" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" name="acao" value="logar" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    </div>

 
  </div>
</div>
    
</body>
</html>
