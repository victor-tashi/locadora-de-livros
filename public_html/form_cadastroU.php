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
					<form action="processaU.php" method="post" accept-charset="utf-8" class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" class="form-control" required>

						<label for="email">Email:</label>
						<input type="text" name="email" class="form-control" required>

						<label for="cell">telefone:</label>
						<input type="text" name="cell" class="form-control" required>

						<label for="rua">Rua:</label>
						<input type="text" name="rua" class="form-control" required>

						<label for="numero">Numero:</label>
						<input type="text" name="numero" class="form-control" required>

						<label for="bairro">Bairro:</label>
						<input type="text" name="bairro" class="form-control" required>

						<label for="cidade">Cidade:</label>
						<input type="text" name="cidade" class="form-control" required>
						<br>

						<label for="uf">UF:</label>
						<select name="uf" class="form-select form-select-sm" aria-label="form-select-sm example">
							<option selected>Open this select menu</option>
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
						<input type="text" name="cpf" class="form-control" value=" ">

						<br>
						<input type="submit" name="btn" value="Cadastrar" class="btn btn-success">

						<a href="mostrarU.php" class="btn btn-info">Consultar</a>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>