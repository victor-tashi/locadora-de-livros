<?php 
 
include_once 'conexao.php';

	$nome  = isset($_POST['nome']) == true?$_POST['nome']:"";
	$data  = isset($_POST['data']) == true?$_POST['data']:"";
	$autor = isset($_POST['autor']) == true?$_POST['autor']:"";	
	$editora  = isset($_POST['editora']) == true?$_POST['editora']:"";
	$estoque  = isset($_POST['estoque']) == true?$_POST['estoque']:"";

	//inserir dados no banco de dados.

	$sql = "INSERT INTO livros (nome, data, autor, editora, estoque, alugados) VALUES ('$nome', $data, '$autor', '$editora', $estoque, 0)";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrar.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

?>