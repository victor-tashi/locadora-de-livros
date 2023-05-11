<?php 
 
include_once 'conexao.php';

	$user   = isset($_POST['user'])   == true?$_POST['user']:"";
	$livro  = isset($_POST['livro'])  == true?$_POST['livro']:"";
	$praso   = isset($_POST['data'])   == true?$_POST['data']:"";

	$consultar = $conn->query("select * from usuario where id_user=$user");

	while ($dados = $consultar->fetch_assoc()) {

		$id_user = $dados['id_user'];
		$nome = $dados['nome'];
		
	};
	$consultar = $conn->query("select * from livros where id=$livro");

	while ($dados = $consultar->fetch_assoc()) {

		$id_livro = $dados['id'];
		$titulo = $dados['nome'];
		
	};
	$data = date('Y-m-d', strtotime("+$praso day"));



	//inserir dados no banco de dados.

	$sql = "INSERT INTO alugados (id_user, nome_user, id_livro, titulo_livro, data_entrega) VALUES ('$id_user', '$nome', '$id_livro', '$titulo', '$data')";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrarA.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

?>