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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover.php</title>
</head>
<body>
    <header> 
    <nav>
		<ul>
			<li><a href = "admin.php">Ver Clientes</a></li>
            <li><a href = "verUsers.php">Ver Users</a></li>
			<li><a href = "insertClient.php">Inserir Clientes</a></li>
            <li><a href = "removerCliente.php">Remover Cliente</a></li>
            <li><a href = "produtos.php"> ver Produtos</a></li>
            <li><a href = "InsertProduct.php">Inserir Produtos</a></li>
			<li><a class= active href = "removerProduct.php">Remover Produto</a></li>
			<li><a href="logout.php">Logout <?php echo $_SESSION['name']; ?></a></li>
		</ul>
	</nav>
    </header>
    <br>
    <table style="background-color: white;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Modelo</th>
                <th>Tipologia</th>
                <th>Fabricante</th>
                <th>Tipo de produto</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM produtos");
            $dados = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($dados as $produto)
            {
                echo "<tr>";
                echo "<td>".$produto["id"]."</td>";
                echo "<td>".$produto["nome"]."</td>";
                echo "<td>".$produto["modelo"]."</td>";
                echo "<td>".$produto["tipologia"]."</td>";
                echo "<td>".$produto["fabricante"]."</td>";
                echo "<td>".$produto["idTipoProdutos"]."</td>";
                echo "<td>".$produto["foto"]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
        <form name = "form" method = "post" action ="removerProductlogic.php">
        <h2>Remover Produto em Base de Dados</h2>
        <p>id do produto a remover: <input type ="text" name= "id">
        <p>Nome produto a remover: <input type = "text" name = "nome">
        <p>Modelo produto a remover: <input type = "text" name = "modelo">
        <p>Tipologia produto a remover: <input type = "text" name = "tipologia">
        <p>Fabricante produto a remover: <input type = "text" name = "fabricante"> 
        <p>Id Tipo de Produtos a remover: <input type = "text" name = "idTipoProdutos">
        <p><input type = "submit" Value = "REMOVER" class= active color=black;>
    </form>
    <script src="js/script.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
<?php 
}else{
     header("Location: indexstore.php");
     exit();
}
 ?>