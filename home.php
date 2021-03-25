<?php 
session_start();
require 'db_conn.php';
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="js/script.js"></script>
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
						<a href="webstore.php" class="dropbtn">Loja Online</a>
							<div class="dropdown-content">
							<a class="active" href="webstore.php">Geral</a>
							<a href="webstore-guns.php">Armas</a>
							<a href="webstore-rifles.php">Espingardas</a>
							<a href="webstore-glasses.php">Oculos</a>
							<a href="webstore-helmts.php">Capacetes</a>
							<a href="webstore-items.php">Items</a>
							<a href="webstore-lights.php">Luzes</a>
							<a href="webstore-mags.php">Carregadores</a>
							<a href="websotre-sights.php">Miras</a>
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
			  <img src="imagens/full3D.jpg" alt="warrior3D"usemap="#warrior3D">
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
<h2>BEMVINDO, <?php echo $_SESSION['name']; ?>          
		<audio controls autoplay> 
		<source src="audios/soundtrack airsoft.mp3"type="audio/mpeg">
 			o seu browser não suporta o elemento áudio.
		</audio>
	</h2>
<hr>
<h2>WEBSTORE</h2>


<section id="Gallery">
		<div class="gallery">
		  <a target="_blank" href="webstore-guns.php">
		    <img src="imagens/Guns.jpg" alt="Pistolas" width="600" height="400">
		  </a>
		  <div class="desc">Pistolas</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-rifles.php">
				<img src="imagens/rifles.jpg" alt="Espingardas" width="600" height="400">
			</a>
			<div class="desc">Espingardas</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-items.php">
				<img src="imagens/greengas.jpg" alt="Gas" width="600" height="400">
			</a>
			<div class="desc">GreenGas&Co2</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-items.php">
				<img src="imagens/items.jpg" alt="bbs" width="600" height="400">
			</a>
			<div class="desc">bbs</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-items.php">
				<img src="imagens/mascaras.jpg" alt="Mask" width="600" height="400">
			</a>
			<div class="desc">Mascaras</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-items.php">
				<img src="imagens/pyro.jpg" alt="Items" width="600" height="400">
			</a>
			<div class="desc">Items</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-gloves.php">
				<img src="imagens/Luvas.jpg" alt="Luvas" width="600" height="400">
			</a>
			<div class="desc">Luvas</div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="webstore-helmts.php">
		    <img src="imagens/capacete.jpg" alt=" Capacetes" width="600" height="400">
		  </a>
		  <div class="desc">Capacetes</div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="webstore-mags.php">
		    <img src="imagens/Carregadores.jpg" alt="Carregadores" width="600" height="400">
		  </a>
		  <div class="desc">Carregadores</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-glasses.php">
				<img src="imagens/Oculos.jpg" alt="Oculos" width="600" height="400">
			</a>
			<div class="desc">Oculos</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-sights.php">
				<img src="imagens/Miras.jpg" alt="Miras" width="600" height="400">
			</a>
			<div class="desc">Miras e Opticas</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="webstore-lights.php">
				<img src="imagens/LanternaOlight.jpg" alt="Luzes" width="600" height="400">
			</a>
			<div class="desc">Luzes</div>
		</div>
</section>
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