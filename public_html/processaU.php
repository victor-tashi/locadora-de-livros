<?php 
 
include_once 'conexao.php';

	$nome   = isset($_POST['nome'])   == true?$_POST['nome']:"";
	$email  = isset($_POST['email'])  == true?$_POST['email']:"";
	$cell   = isset($_POST['cell'])   == true?$_POST['cell']:"";	
	$rua    = isset($_POST['rua'])    == true?$_POST['rua']:"";
	$numero = isset($_POST['numero']) == true?$_POST['numero']:"";
	$bairo  = isset($_POST['bairro']) == true?$_POST['bairro']:"";
	$cidade = isset($_POST['cidade']) == true?$_POST['cidade']:"";
	$uf     = isset($_POST['uf'])     == true?$_POST['uf']:"";	
	$cpf    = isset($_POST['cell'])   == true?$_POST['cell']:"";
	echo($nome);




	//inserir dados no banco de dados.

	$sql = "INSERT INTO usuario (nome, email, cell, rua, numero, bairo, cidade, uf, cpf) VALUES ('$nome', '$email', '$cell', '$rua', '$numero','$bairo','$cidade', '$uf', $cpf)";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrarU.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

?>