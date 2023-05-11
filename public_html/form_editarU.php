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
	echo ($id);

	$consultar = $conn->query("select * from alugados where id_user='$id'");

	while ($dados = $consultar->fetch_assoc()) {
		$nome = $dados['nome'];
		$email = $dados['email'];
		$cell = $dados['cell'];
		$rua = $dados['rua'];
		$numero = $dados['numero'];
		$bairro = $dados['bairo'];
		$cidade = $dados['cidade'];
		$uf = $dados['uf'];
		$cpf = $dados['cpf'];
	}
	?>

	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading text-center display-4">ALTERAR DADOS</div>

					<form action="alterarU.php?id=<?php echo $id; ?>" method="post" accept-charset="utf-8"
						class="form-group">

						<label for="nome">Nome:</label>
						<input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control">

						<label for="email">Email:</label>
						<input type="text" name="email" value="<?php echo $email;?>" class="form-control" required>

						<label for="cell">telefone:</label>
						<input type="text" name="cell" value="<?php echo $cell;?>" class="form-control" required>

						<label for="rua">Rua:</label>
						<input type="text" name="rua" value="<?php echo $rua;?>" class="form-control" required>

						<label for="numero">Numero:</label>
						<input type="text" name="numero" value="<?php echo $numero;?>" class="form-control" required>

						<label for="bairro">Bairro:</label>
						<input type="text" value="<?php echo $bairro;?>" name="bairro" class="form-control" required>

						<label for="cidade">Cidade:</label>
						<input type="text" name="cidade" class="form-control" value="<?php echo $cidade;?>" required>
						<br>

						<label for="uf">UF:</label>
						<select name="uf" class="form-select form-select-sm" value="<?php echo $uf;?>" aria-label="form-select-sm example">
							<option selected value="<?php echo $uf;?>"><?php echo $uf;?></option>
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SC">SC</option>
							<option value="SP">SP</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
						</select>
						<br>
						<label for="cpf">CPF:</label>
						<input type="text" name="cpf" class="form-control" value="<?php echo $cpf;?>">
						<br>
						<input type="submit" name="btn" value="ALTERAR" class="btn btn-success">
						<a href="mostrarU.php" class="btn red">Cancelar</a>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>