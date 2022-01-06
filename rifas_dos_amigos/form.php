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
    $numeroRifa = $_GET['rifa'];
?>
<form action="add.php" method="POST">
    <label>Seu nome</label>
   <input type="text" name="nome"    placeholder="Seu nome">
   <br>
   <label>Numero da Rifa</label>
   <input type="text" name="numero" value="<?=$numeroRifa?>"  placeholder="Numero da rifa" readonly> 
   <br>
   <label>instagram</label>
   <input type="text" name="instagram"  placeholder="instagram">
   <br>
   <label>telefone</label>
   <input type="text" name="telefone" id="telefone" placeholder="Digite um número de telefone" maxlength="15" />
   <br>
   <input type ="submit">
</form>
    
</body>
</html>
