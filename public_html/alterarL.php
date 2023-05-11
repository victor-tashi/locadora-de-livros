<?php 
	
	include_once 'form_editarL.php';
	include_once 'conexao.php';

	$id = $_GET['id'];
	$nome  = isset($_POST['nome'])?$_POST['nome']:"";
	$data  = isset($_POST['data'])?$_POST['data']:"";
	$autor = isset($_POST['autor'])?$_POST['autor']:"";	
	$editora  = isset($_POST['editora'])?$_POST['editora']:"";
	$estoque  = isset($_POST['estoque'])?$_POST['estoque']:"";


	$alterar = $conn->query("update livros set nome ='$nome', data ='$data', autor ='$autor', editora ='$editora', estoque ='$estoque' where id='$id'");
	
	if(mysqli_affected_rows($conn) > 0){
		header("location: mostrarL.php");
	}
	
?>