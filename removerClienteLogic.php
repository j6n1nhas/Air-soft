<?php
    session_start(); 
    require 'db_conn.php';


$uname=$_POST['uname'];
$password=$_POST['password'];
$nome=$_POST['nome'];
$id=$_POST['id'];
$morada=$_POST['morada'];
$contacto=$_POST['contacto'];
$codigoPostal=$_POST['codigoPostal'];
$nif=$_POST['nif'];
$email=$_POST['email'];

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
}else if (empty($nome)) {
	header("Location: removerCliente.php?error=Nome em falta");
	exit();
}if (empty($password)) {
	header("Location: removerCliente.php?error=Nome em falta");
	exit();
}if (empty($id)) {
	header("Location: removerCliente.php?error=Nome em falta");
	exit();
}if(empty($morada)){
	header("Location: removerCliente.php?error=Morada em falta");
	exit();
}if (empty($telefone)){
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
}else{

    $sql = "SELECT * FROM cliente WHERE nome = '$nome'";
    $resultado=mysqli_query($conexao,$sql);
    $nr_antes=mysqli_num_rows($resultado);
    $remove="DELETE * FROM cliente WHERE nome = '$nome'";
    mysqli_query($conexao,$remove);
    $sql1="SELECT * FROM cliente WHERE nome = '$nome'";
    $resultado1=mysqli_query($conexao,$sql1);
    $nr_depois=mysqli_num_rows($resultado1);
    $removidos=$nr_antes-$nr_depois;
	echo "<p><font face='Arial' color=#654321 size=16>Contacto Removido</font> <p>".$removidos;
    echo"<p>";
}
    mysqli_close($conn);
?>
