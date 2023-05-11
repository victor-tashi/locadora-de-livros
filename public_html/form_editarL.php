

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
	
		$consultar = $conn->query("select * from livros where id='$id'");

		while($dados = $consultar->fetch_assoc()){
			$nome 	  = $dados['nome'];
			$data	  = $dados['data'];
			$autor	  = $dados['autor'];
			$editora  = $dados['editora'];
			$estoque  = $dados['estoque'];
		}
	?>

	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading text-center display-4">ALTERAR DADOS</div>

    				<form action="alterarL.php?id=<?php echo $id;?>"
    						 method="post" accept-charset="utf-8" class="form-group">

    					<label for="nome">Nome:</label>
    					<input type="text" name="nome" value="<?php echo $nome;?>" class="form-control">
    						
    					<label for="data">Ano de lançamento:</label>
    					<input type="text" name="data" value="<?php echo $data;?>" class="form-control">

    					<label for="autor">Autor:</label>
    					<input type="text" name="autor" value="<?php echo $autor;?>" class="form-control">

						<label for="editora">Editora:</label>
    					<input type="text" name="editora" value="<?php echo $editora;?>" class="form-control">

						<label for="estoque">Estoque:</label>
    					<input type="text" name="estoque" value="<?php echo $estoque;?>" class="form-control">

    					<br>
    					<input type="submit" name="btn" value="ALTERAR" class="btn btn-success">
    					<a href="mostrarL.php" class="btn red">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>