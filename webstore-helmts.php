<?php 
session_start();
require 'db_conn.php';
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/styles.css"type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<script src="js/script.js"></script>
		<title>Capacetes</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Airsoft Promotion">
		<meta name="keywords" content="Airsoft,Aeg,Gbb,Gbbr">
		<meta name="author" content="AirsoftPT,Acosta">
		<meta charset="utf-8">
	</head>
	<body>
    <header>
			<h1>Airsoft Portugal</h1>
			<nav>
					<ul>
						<li><a href="index.php">Main Page</a></li>
						<li><a href="Eventos.php">Eventos</a></li>
						<li><a href="equipa.php">Nossa Equipa</a></li>
						<li><a href="contactos.php">Contactos</a></li>
						<li><a href="galeria.php">Galeria</a></li>
	          			<li><a href="Links.php">Links</a></li>
						  <li><a href="logout.php">Logout</a></li>
						<li class="dropdown">
						<a href="home.php" class="dropbtn">Loja Online</a>
						<div class="dropdown-content">
							<a href="home.php">Geral</a>
							<a href="webstore-guns.php">Armas</a>
							<a href="webstore-rifles.php">Espingardas</a>
							<a href="webstore-glasses.php">Oculos</a>
							<a class="active" href="webstore-helmts.php">Capacetes</a>
							<a href="webstore-items.php">Items</a>
							<a href="webstore-lights.php">Luzes</a>
							<a href="webstore-mags.php">Carregadores</a>
							<a href="webstore-sights.php">Miras</a>
							<a href="webstore-gloves.php">Luvas</a>
							<a href="webstore-gas.php">Green Gas</a>
							<a href="webstore-bbs.php">BBs</a>
							<a href="webstore-masks.php">Mascaras</a>
	        			</div>
					</ul>
				</nav>
    </header>
    <section>
			<div id="photolinks">
			  <img src="imagens/full3D.jpg" alt="warrior3D" height="100%" width="100%"usemap="#warrior3D">
			  <map name="warrior3D">
			    <area shape="poly" coords="144,528,571,543,649,485,761,513,1517,563,1517,688,1004,658,984,776,774,794,747,693,460,633,166,771" alt="gun" href="webstore-rifles.php">
			    <area shape="poly" coords="296,416,607,216,604,345,579,420,496,489,309,566" alt="glasses" href="webstore-glasses.php">
			    <area shape="poly" coords="94,113,219,0,437,0,591,182,523,285,296,395,64,289" alt="helmet" href="webstore-helmts.php">
			    <area shape="poly" coords="397,800,561,702,794,710,753,837,672,916,469,949" alt="luvas" href="webstore-gloves.php">
			    <area shape="poly" coords="829,796,982,782,1023,1008,868,1008" alt="magazine" href="webstore-mags.php">
			    <area shape="poly" coords="904,395,1070,399,1070,531,895,531" alt="scopes" href="webstore-sights.php">
			    <area shape="poly" coords="1301,689,1413,694,1398,876,1322,873" alt="itens" href="webstore-items.php">
			    <area shape="poly" coords="1256,471,1482,480,1482,568,1256,555" alt="itens" href="webstore-lights.php">
			  </map>
			</div>
		</section>
		<hr>
		<h2>BEMVINDO, <?php echo $_SESSION['name']; ?></h2>
		<h1>Capacetes</h1>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "id16025034_airsoftstore";
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
				die("Connection failed" . $conn->connect_error);
			}

			$sql = "SELECT * FROM produtos where idTipoProdutos = 12";
			$result = $conn->query($sql);

			if ($result->num_rows <= 0) {
				echo "0 results";
			} else {
				while ($row = $result->fetch_assoc()) {
					echo "<div class='row'>";
					echo "<div class='col-xs-3'>" . $row["nome"] . "</div>";
					echo "<div class='col-xs-3'>" . $row["modelo"] . "</div>";
					echo "<div class='col-xs-3'> <img src=\"imagens/" . $row["nome"] . ".jpg\"" . " width=\"600" .  "height=\"400" . "></div>";
					echo "</div>";
				}
			}

			$conn->close();
		?>
	  <hr>
	<section id="footbanner">
	<img src="imagens/bannerairsoft.jpg" alt="banner footer"height="50%" width="100%" >
	</section>
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