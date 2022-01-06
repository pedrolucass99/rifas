<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
<?php
  include 'templates/templateMenu.php';
?>
<div class="jumbotrom text-dark">
  <div class="row">
    <div class="col-5">
    <form action="login.php" method="POST">
        <h2>Login ADM</h2>
        <div class="form-group">
        <label>Seu nome</label>
          <input type="text" placeholder="Seu nome" name="nome" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="">Senha</label>
          <input type="password" name="senha"  placeholder="senha" class="form-control"> 
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