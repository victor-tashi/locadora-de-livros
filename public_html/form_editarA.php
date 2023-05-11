

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php 

		include_once 'conexao.php';

		$id = $_GET['id'];
		echo($id);
	?>

	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading text-center display-4">ALTERAR DADOS</div>

    				<form action="alterarA.php?id=<?php echo $id;?>"
    						 method="post" accept-charset="utf-8" class="form-group">

    					<label for="nome">usuario:</label>
						<select class='form-select' name="user" aria-label='Default select example'>
							<?php
							$consultar = $conn->query("select * from usuario");

							while ($dados = $consultar->fetch_assoc()) {

								$id = $dados['id_user'];
								$nome = $dados['nome'];
								echo "<option value='$id'>$nome</option>";
							}
							echo ""
							?>
						</select>
						<br>
						<label for="livro">ano de lançamento:</label>
						<select class='form-select' name="livro" aria-label='Default select example'>
							<?php
							$consultar = $conn->query("select * from livros");

							while ($dados = $consultar->fetch_assoc()) {

								$id = $dados['id'];
								$nome = $dados['nome'];
								echo "<option value='$id'>$nome</option>";
							}

							?>
						</select>

						<br>

						<label for="data">data:</label>
						<select class='form-select' name="data" aria-label='Default select example'>
							<?php
							$cont = 1;
							while ($cont <= 30) {

								echo "<option value='$cont'>$cont</option>";
								$cont = $cont + 1;
							}
							;

							?>
						</select>
						
						<br>
    					<input type="submit" name="btn" value="ALTERAR" class="btn btn-success">
    					<a href="mostrarA.php" class="btn red">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>