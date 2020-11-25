<?php
if(empty($_POST) or empty($_POST['id']) or empty($_POST['senha'])){
	header('Location: index.php');
	exit;
}

session_start();

include("config.php");

$id = $_POST['id'];
$senha = $_POST['senha'];

$sql = "UPDATE usuarios SET senha = '" . MD5($senha) . "' WHERE usuarios.id = " . $id;

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_assoc();

if($res->num_rows > 0){

	print "Senha alterada com sucesso. Props man!";
//	$_SESSION["usuario"] = $usuario;
//	$_SESSION["nivel"] = $row["nivel"];
//	header('Location: painel.php');
} else {
//	unset($_SESSION["usuario"]);
//	unset($_SESSION["nivel"]);
//	header('Location: index.php?aut=err');
	print "Não enviou :( Confira seu e-mail.";
}
?>