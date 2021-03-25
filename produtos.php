<?php 
session_start();
require 'db_conn.php';
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login&register.css">
    <script src="js/script.js"></script>
    <title>ProdutosBD</title>
</head>
<body class="Admin">
    <nav>
		<ul>
			<li><a href = "admin.php">Ver Clientes</a></li>
            <li><a href = "verUsers.php">Ver Users</a></li>
			<li><a href = "registo.php">Inserir Clientes</a></li>
            <li><a href = "removerCliente.php">Remover Cliente</a></li>
            <li><a class= active href = "produtos.php"> ver Produtos</a></li>
            <li><a href = "InsertProduct.php">Inserir Produtos</a></li>
			<li><a href = "removerProduct.php">Remover Produto</a></li>
			<li><a href="logout.php">Logout<?php echo $_SESSION['name']; ?></a></li>
		</ul>
	</nav>
    <hr>
    <?php
    require 'db_conn.php';
    $sql = mysqli_query($conn,'select * from produtos');
    $n_registos=mysqli_num_rows($sql);
    echo $n_registos . "<h2>Produtos encontrados</h2>";
    echo "<p>";
    while($registo = mysqli_fetch_array($sql)){
        echo "<i>Dados recebidos </i>";
        echo $registo['nome'];
        echo " - ";
        echo $registo['modelo'];
        echo " - ";
        echo $registo['tipologia'];
        echo " - ";
        echo $registo['fabricante'];
        echo " - ";
        echo $registo['idTipoProdutos'];
        echo "<p>";
    }
    ?>
    <br>
    <footer>
				&copy;by Acosta@Airsoftportugal.pt 
				<?php 
				 echo date("F d Y H:i:s")
				?>	
    </footer>
</body>
</html>
<?php 
}else{
     header("Location: indexstore.php");
     exit();
}
 ?>
 