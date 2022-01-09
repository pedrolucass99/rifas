<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<link rel="stylesheet" href="templates/menu.css">
  <?php
  include 'templates/templateChamada.php';
?>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<?php
  include 'templates/templateMenu.php';
?>
<div id="position">
<div id="lista">
<div id="box">
	<div id="user">

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<?php
        include "conn.php";
        include "verificaSessao.php";
			$sql=' SELECT * FROM rifa order by numero asc';
			$result = $conn->query($sql);
		?>
		<div id="table">


			<div id="table">
		
          
    
				<div id="table">


					<table class='table'>
						<thead>
							<tr>
								<!-- <th>Escopo</th> -->
								<th>Nome</th>
								<th>Rifa</th>
								<th>satatus</th>
								<th>Ações</th>	                
								<th><button  onclick="limparDados()" class="btn btn-success">Limpar tudo</button></th>	                
							</tr>
						</thead>
						<tbody>							
								<?php while($res = $result->fetch(PDO::FETCH_ASSOC)) { ?>
								<tr>
									<td><?= $res['nome'] ?></td>
									<td><?= $res['numero'] ?></td>
									<td><?= $res['status'] ?></td>
									<td><a onclick="confirmarRifa('<?= $res['numero'] ?>','CONFIRMADO')" class="btn btn-primary">Confirmar<i class="fa fa-edit"></i></a></td>
                  <td><a onclick="confirmarRifa('<?= $res['numero'] ?>','negar')" class="btn btn-danger">Negar<i class="fa fa-edit"></i></a></td>
								</tr> 
								<?php } ?>

						</tbody>
					</table>

				</div>


			</div>


			</div>
</div>
</div>
</div>	
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script>
  function confirmarRifa(numero, opcao){
    $.ajax({
				url:'confirmaRifa.php', //Server script to process data
				type: 'POST',
				data: {
          numero, opcao
				},
				success : function (result){
          alert(result);      
          location.reload();
        }
  });
}

function limparDados(){
	$.ajax({
				url:'limpaDados.php', //Server script to process data
				type: 'POST',
				success : function (result){
          alert(result);      
          location.reload();
        }
  });	
}
</script>
</body>
</html> 