<?php 

	include_once 'conexao.php';

	$id = $_GET['id'];

	$deletar = $conn->query("delete from alugados where id_aluga='$id'");

	if (mysqli_affected_rows($conn) > 0) {

		header("Location:mostrarA.php");
	}
?>