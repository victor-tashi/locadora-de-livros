<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from livros");

	while ($dados = $consultar->fetch_assoc()) {


		$estoque  = $dados['estoque'];
		$alugados = $dados['alugados'];
		$id 	  = $dados['id'];	
		$nome 	  = $dados['nome'];
		$ano	  = $dados['data'];
		$autor	  = $dados['autor'];
		$editora  = $dados['editora'];


		echo "<tr>";
			echo "<td>$id<td>$nome<td>$ano<td>$autor<td>$editora<td>$estoque";
			echo "<td><a href='form_editarL.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='deleteL.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}

?>