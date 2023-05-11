<?php 

	include_once 'conexao.php';

	$id = $_GET['id'];

	$deletar = $conn->query("delete from usuario where id_user='$id'");

	if (mysqli_affected_rows($conn) > 0) {

		header("Location:mostrarU.php");
	}
?>