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
    <title>AdministraçãoBD</title>
</head>
<body class="Admin">
<nav> 
    </div>
		<ul>
			<li><a class= active href = "admin.php">Ver Clientes</a></li>
            <li><a href = "verUsers.php">Ver Users</a></li>
            <li><a href = "insertClient.php">Inserir Clientes</a></li>
            <li><a href = "removerCliente.php">Remover Cliente</a></li>
            <li><a href = "produtos.php"> Ver Produtos</a></li>
            <li><a href = "InsertProduct.php">Inserir Produtos</a></li>
			<li><a href = "removerProduct.php">Remover Produto</a></li>
			<li><a href="logout.php">Logout <?php echo $_SESSION['name']; ?></a></li>
		</ul>
	</nav>
    <br><br>

    <?php
    require 'db_conn.php';
    $sql = mysqli_query($conn,'select * from cliente');
    $n_registos=mysqli_num_rows($sql);
    echo $n_registos . " <h2>Clientes encontrados</h2>";
    echo "<p>";
    while($registo = mysqli_fetch_array($sql)){
        echo "<i>Dados recebidos </i>";
        echo $registo['nome'];
        echo " - ";
        echo $registo['morada'];
        echo " - ";
        echo $registo['email'];
        echo " - ";
        echo $registo['contacto'];
        echo " - ";
        echo $registo['nif'];
        echo "<p>";
    }
    ?>
    <p id="navegador">Nome de Navegador</p>
    <br><br>
    <div class="relogio">
        <div class="horas">
            <div class="hr" id="hr"></div>
        </div>
        <div class="minutos">
            <div class="mn" id="mn"></div>
        </div>
        <div class="segundos">
            <div class="sc" id="sc"></div>
        </div>
    </div>
        <script type="text/javascript">
        const deg= 6;
        const hr= document.querySelector("#hr");
        const mn= document.querySelector("#mn");
        const sc= document.querySelector("#sc");
        setInterval(()=> {
            let day = new Date();
            let hh = day.getHours() * 30;
            let mm = day.getMinutes() * deg;
            let ss = day.getSeconds() * deg;
            hr.style.transform =`rotateZ(${hh+(mm/12)}
             deg)`;
            mn.style.transform = `rotateZ(${mm}deg)`;
            sc.style.transform = `rotateZ(${ss}deg)`;
        })
    </script>
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