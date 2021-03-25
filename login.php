<?php 
session_start(); 
include "db_conn.php";

function validate($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
try
{
	if(!isset($_POST["uname"]) && !isset($_POST["password"]))
		throw new Exception("Formulário não foi recebido", 0);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	if(empty($uname))
		throw new Exception("Username missing", 1);
	if(empty($pass))
		throw new Exception("Password missing", 2);
	$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) != 1)
		throw new Exception("Incorrect username or password", 3);
	$row = mysqli_fetch_assoc($result);
	if($row["permissoes"] == 1)
		header("location: admin.php");
	else
		header("location: home.php");
	$_SESSION['user_name'] = $row['user_name'];
	$_SESSION['name'] = $row['name'];
	$_SESSION['id'] = $row['id'];
	$_SESSION['permissoes'] = $row["permissoes"];
	die();
}
catch(Exception $erro)
{
	switch($erro->getCode())
	{
		case 0:
			header("location: indexstore.php");
			break;
		case 1:
		case 2:
		case 3:
			header("location: indexstore.php?error=".$erro->getMessage());
			break;
	}
	die();
}
