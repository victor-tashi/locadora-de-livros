<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from alugados");

	while ($dados = $consultar->fetch_assoc()) {

		$id     = $dados['id_aluga'];
		$user   = $dados['id_user'];
		$nome   = $dados['nome_user'];
		$livro  = $dados['id_livro'];
		$titulo = $dados['titulo_livro'];
		$data   = $dados['data_entrega'];

		echo "<tr>";
			echo "<td>$id<td>$nome<td>$titulo<td>$data<td>";
			echo "<td><a href='form_editarA.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='deleteA.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}
?>