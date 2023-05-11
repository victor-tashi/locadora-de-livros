<?php 
	
	include_once 'form_editarA.php';
	include_once 'conexao.php';

	$id = $_GET['id'];
	$user   = isset($_POST['user'])?$_POST['user']:"";
	$livro  = isset($_POST['livro'])?$_POST['livro']:"";
	$praso  = isset($_POST['data'])?$_POST['data']:"";


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



	$alterar = $conn->query("update alugados set id_user = $id_user, nome_user = '$nome', id_livro = $id_livro, titulo_livro = '$titulo', data_entrega = '$data' where id_aluga='$id'");
	
	if(mysqli_affected_rows($conn) > 0){
		header("location: mostrarA.php");
	}
	
?>