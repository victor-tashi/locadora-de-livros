<?php 

	include_once 'conexao.php';

	$id = $_GET['id'];

	$deletar = $conn->query("delete from livros where id='$id'");

	if (mysqli_affected_rows($conn) > 0) {

		header("Location:mostrarL.php");
	}
?>