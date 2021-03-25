<?php 
session_start();
require 'db_conn.php';
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/login&register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/script.js"></script>
    <title>RemoverCliente.php</title>
</head>
<body>
    <header> 
    <nav>
		<ul>
			<li><a href = "admin.php">Ver Clientes</a></li>
            <li><a href = "verUsers.php">Ver Users</a></li>
			<li><a href = "insertClient.php">Inserir Clientes</a></li>
            <li><a class = active href = "removerCliente.php">Remover Cliente</a></li>
            <li><a href = "produtos.php"> ver Produtos</a></li>
            <li><a href = "InsertProduct.php">Inserir Produtos</a></li>
			<li><a href = "removerProduct.php">Remover Produto</a></li>
			<li><a href="logout.php">Logout <?php echo $_SESSION['name']; ?></a></li>
		</ul>
	</nav>
    </header>
    <br>
    <form name = "form" method = "post" action ="removerClienteLogic.php">
            <h2>Remover Cliente e User em Base de Dados</h2>
                <p>Username: <input type = "txt" name = "user_name">
                <p>Password: <input type = "txt" name = "password">
                <p>Nome: <input type = "txt" name = "nome">
                <p>Id: <input type = "txt" name = "id">
                <p>Morada: <input type = "txt" name = "morada">
                <p>Telefone: <input type = "txt" name = "contacto">
                <p>Codigo Postal: <input type = "txt" name = "codigoPostal">
                <p>Email: <input type = "txt" name = "email"> 
                <p>Nif: <input type = "txt" name = "nif">
                <p><input type = "submit" Value = "REMOVER" class= active color=black;>
            </form>
</body>
</html>
<?php 
}else{
     header("Location: indexstore.php");
     exit();
}
 ?>
 