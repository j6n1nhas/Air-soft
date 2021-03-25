<!DOCTYPE html>
	<html lang="pt-PT" dir="ltr">
 <head>

	  	<link rel="stylesheet" href="css/styles.css" type="text/css">
			<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="">
			<meta name="keywords" content="">
			<meta name="autor" content="">
			<meta charset="utf-8">
			<script src="js/script.js"></script>
		<title>Galeria</title>
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
						<li><a class="active" href="galeria.php">Galeria</a></li>
						<li><a href="Links.php">Links</a></li>
						<li class="dropdown">
						<a href="indexstore.php" class="dropbtn">Loja Online</a>
							<div class="dropdown-content">
								<a href="indexstore.php">Entrar</a>
								<a href="registo.php">Nova Conta</a>
						</div>
					</ul>
				</nav>
  </header>
<section id="Album">
		<div class="gallery">
		  <a target="_blank" href="imagens/Duplas.jpg">
		    <img src="imagens/Duplas.jpg" alt="Dupla" width="600" height="400">
		  </a>
		  <div class="desc">Dupla em Acção</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="imagens/Snow.jpg">
				<img src="imagens/Snow.jpg" alt="Neve" width="600" height="400">
			</a>
			<div class="desc">Evento na Neve</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="imagens/Snowsmoke.jpg">
				<img src="imagens/Snowsmoke.jpg" alt="snow" width="600" height="400">
			</a>
			<div class="desc">granadas fumo</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="imagens/Range.jpg">
				<img src="imagens/Range.jpg" alt="Range" width="600" height="400">
			</a>
			<div class="desc">Campo de Tiro</div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="imagens/Duplawoods.jpg">
		    <img src="imagens/Duplawoods.jpg" alt=" Doble Forest" width="600" height="400">
		  </a>
		  <div class="desc">Combate em Floresta</div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="imagens/airsoftpanther.jpg">
		    <img src="imagens/airsoftpanther.jpg" alt="Panther" width="600" height="400">
		  </a>
		  <div class="desc">Phanter Camoflage</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="imagens/camoflagem.jpg">
				<img src="imagens/camoflagem.jpg" alt="camoflage" width="600" height="400">
			</a>
			<div class="desc">Another Type of Camoflage</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="imagens/comandosrifle.jpg">
				<img src="imagens/comandosrifle.jpg" alt="Comandos" width="600" height="400">
			</a>
			<div class="desc">Comandos</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="imagens/fields.jpg">
				<img src="imagens/fields.jpg" alt="Campos" width="600" height="400">
			</a>
			<div class="desc">Campos</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="imagens/Gilliesniper.jpg">
				<img src="imagens/Gilliesniper.jpg" alt="Gillie" width="600" height="400">
			</a>
			<div class="desc">Camoflagem com Gillie Suit</div>
		</div>
		<div class ="gallery">
			<div class="desc">     </div>
		</div>
		<div class ="gallery">
			<div class="desc">     </div>
		</div>
		<div class ="gallery">
			<div class="desc">     </div>
		</div>
		<div class ="gallery">
			<div class="desc">     </div>
		</div>
		<div class ="gallery">
			<div class="desc">     </div>
		</div>
		</section>
		
		<video id="myVideo" width="100%" height="720" controls autoplay loop>
  		<source src="videos/Swamp Sniper.mp4" type="video/mp4">
  		<source src="videos/Swamp Sniper.ogg" type="video/ogg">
  		Your browser does not support HTML5 video.
		</video>

  <section id="footbanner">
    <img src="imagens/bannerairsoft.jpg" alt="banner footer">
  </section>
      <footer>
    				&copy;by Acosta@Airsoftportugal.pt
					<?php 
				 echo date("F d Y H:i:s")
				?>	
      </footer>
</body>
</html>
