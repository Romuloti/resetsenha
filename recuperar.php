<?php
//if(empty($_POST) or empty($_POST['email'])){
//	header('Location: index.php');
//	exit;
//}

session_start();

include("config.php");

$email = $_POST['email'];

$sql = "SELECT * FROM usuarios WHERE email='".$email."'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_assoc();

if($res->num_rows > 0){

	$mensagem = "https://arrisquemaisduas.000webhostapp.com/alterar.php?id=".$row["id"];
	$nome     = "Redefinição de Senha";
	$assunto  = "Redefinição de Senha";
	$email    = $row["email"];
	$to       = $row["email"];
	
	$headers   = 'MIME-Version: 1.0' . "\r\n";
	$headers  .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers  .= 'From: '.$nome.' <'.$email.'> ' . "\r\n" .
	'Reply-to: ' . $email . "\r\n".
	'X-Mailer: PHP' . phpversion();

	$enviou = mail($to, $assunto, $mensagem, $headers);
	
	if($enviou==true){
		print "Este e-mail foi enviado com sucesso! </br> Verifique seu e-mail $email para realizar a alteração de sua senha, Grato! :)";
	}else{
		print "Não enviou :(";
	}
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