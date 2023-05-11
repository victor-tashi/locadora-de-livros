<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>alugar</title>
</head>

<nav class="navbar navbar-expand-lg " id="bg-verde">
    <div class="container">
      <img src="Logo.png" alt="" class=" rounded d-block" id="pdr-5" height="50">
      <a class="navbar-brand p" href="#">Biblioteca Publica</a>
      <button class="navbar-toggler text-sucess" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="menu.html">menu</a>
          <a class="nav-link" href="mostrarA.php">alugar</a>
          <a class="nav-link" href="#">Livros</a>
          <a class="nav-link" href="mostrarU.php">user</a>
        </div>
      </div>
    </div>
  </nav>
  
<div class="row">
	<div class="container col-sm-6">
		<h1 class="display-4 text-center">Consulta de Registro</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th >ID</th>
					<th>Nome</th>
					<th>Ano de lançamento</th>
					<th>Autor</th>
					<th>editora</th>
					<th>estoque</th>
				</tr>
			</thead>

			<tbody>
							
				<?php include_once 'consultarL.php'?>
				<tr>
					<a href="form_cadastroL.php" class="btn">Tela Cadastro</a>
				</tr>

			</tbody>

		</table>
	</div>		
</div>	