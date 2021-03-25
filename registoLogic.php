<?php
session_start(); 
include "db_conn.php";

$nome=$_POST['nome'];
$uname=$_POST['uname'];
$morada=$_POST['morada'];
$password=$_POST['password'];
$codigoPostal=$_POST['codigoPostal'];
$contacto=$_POST['contacto'];
$nif = $_POST['nif'];
$email=$_POST['email'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
			  '(\r+)',
			  '(\t+)',
			  '(%0A+)',
			  '(%0D+)',
			  '(%08+)',
			  '(%09+)'
			  );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
	{
	return true;
  }
  else
	{
	return false;
  }
}

//Validate first
if (empty($uname)){
	header("Location: removerCliente.php?error=user em falta");
	exit();
}if (empty($nome)) {
	header("Location: removerCliente.php?error=Nome em falta");
	exit();
}else if(empty($morada)){
	header("Location: removerCliente.php?error=Morada em falta");
	exit();
}if (empty ($telefone)){
	header("Location: removerCliente.php?error=Telefone em falta");
	exit();
}if(empty($email)){
	header("Location: removerCliente.php?error=email em falta");
	exit();
}if (empty($id)){
	header("Location: removerCliente.php?error=Id de Cliente em falta");
	exit();
}if (empty($nif)){
	header("Location: removerCliente.php?error=Nif em falta");
	exit();
}if(empty($uname)||empty($password)||empty ($morada) || empty($email)|| empty($password)|| empty($nif) || empty($codigoPostal)) 
{
	echo "Os dados são de preenchimento obrigatórios!";
    exit;
}

if(IsInjected($email))
{
	echo "Bad email value!";
    exit;
}

$arquivo = "
  <html>
	<table width='500' border='1' cellpadding='1' cellspacing='1'>
		<tr>
			<td>Nome:<b>$nome</b></td>
		</tr>
        <tr>
			<td>Nome:<b>$uname</b></td>
		</tr>
		<tr>
			<td>Nome:<b>$password</b></td>
		</tr>
		<tr>
			<td>E-mail:<b>$email</b></td>
		</tr>
		<tr>
			<td>Telefone:<b>$contacto</b></td>
		</tr>
		<tr>
			<td>Morada:<b>$morada</b></td>
		</tr>
		<tr>
			<td>Morada:<b>$codigoPostal</b></td>
		</tr>
		<tr>
			<td>Morada:<b>$nif</b></td>
		</tr>
		<tr>
			<td><b>Obrigado. <p>". 
			"Agradeçemos a sua inscrição, já pode usufruir da nossa Webstore.</b></td>
		</tr>
		<tr>
		  	<td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
		</tr>
	</table>
  </html>
";

// É necessário indicar que o formato do e-mail é html
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: fccgestao@gmail.com';
//$assunto = 'Confirmação de pedido de contacto por formulário';
//mail($email, $assunto, $arquivo, $headers);

echo "Dados recebidos <p>";
echo "User Name:". $uname . "</p>";
echo "Password:". $password . "</p>";
echo "Nome: ".$nome . "<p>";
echo "Morada: ".$morada . "<p>";
echo "Telefone: ".$contacto . "<p>";
echo "Codigo Postal: ".$codigoPostal . "<p>";
echo "Email: ".$email . "<p>";
echo "Email: ".$nif . "<p>";

$sql = "insert into cliente (nome, morada, codigoPostal, email, contacto, nif) values 
	('$nome','$morada','$codigoPostal','$email','$contacto','$nif')";
$insere=mysqli_query($conn,$sql);

$sql = "insert into users (user_name, password, name ) values 
	('$uname' ,'$password' ,'$nome')";
$insere1=mysqli_query($conn,$sql);

if($insere==1){
	echo "<p><font face='Arial' color=#654321 size=8>Contacto inserido</font> <p>";
}else{
	echo "<p> Dados não inseridos";
}

mysqli_close($conn);


?>
