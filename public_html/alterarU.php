<?php 
	
	include_once 'form_editarU.php';
	include_once 'conexao.php';

	$id     = $_GET['id'];
	$nome   = isset($_POST['nome'])?$_POST['nome']:"";
	$email  = isset($_POST['email'])?$_POST['email']:"";
	$cell   = isset($_POST['cell'])?$_POST['cell']:"";	
	$rua    = isset($_POST['rua'])?$_POST['rua']:"";
	$numero = isset($_POST['numero'])?$_POST['numero']:"";
	$bairo  = isset($_POST['bairro'])?$_POST['bairro']:"";
	$cidade = isset($_POST['cidade'])?$_POST['cidade']:"";
	$uf     = isset($_POST['uf'])?$_POST['uf']:"";	
	$cpf    = isset($_POST['cpf'])?$_POST['cpf']:"";


	$alterar = $conn->query("update alugados set nome= '$nome', email = '$email', cell ='$cell' , rua = '$rua', numero = '$numero', bairo = '$bairo', cidade = '$cidade', uf = '$uf' ,cpf = '$cpf' where id_user = '$id' ");
	
	if(mysqli_affected_rows($conn) > 0){ 
		header("location: mostrarU.php");
	}
	
?>