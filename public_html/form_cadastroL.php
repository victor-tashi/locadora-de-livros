<?php 
	include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading display-4 text-center">CADASTRO DE DADOS</div>
    					<form action="processaL.php" method="post" accept-charset="utf-8" class="form-group">
    						<label for="nome">Nome:</label>
    						<input type="text" name="nome" class="form-control" required>
    						
    						<label for="data">ano de lançamento:</label>
    						<input type="text" name="data" class="form-control" required>

    						<label for="autor">autor(a):</label>
    						<input type="text" name="autor" class="form-control" required>

							<label for="editora">editora:</label>
    						<input type="text" name="editora" class="form-control" required>
    						
    						<label for="estoque">estoque:</label>
    						<input type="text" name="estoque" class="form-control" required>

    						<br>
    						<input type="submit" name="btn" value="Cadastrar" class="btn btn-success">

    						<a href="mostrarL.php" class="btn btn-info">Consultar</a>

   						</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>