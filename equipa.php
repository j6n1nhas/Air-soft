<!DOCTYPE html>
	<html lang="pt-PT" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="autor" content="">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="js/script.js"></script>
			<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    			integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    			crossorigin=""/>
    		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    			integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    			crossorigin=""></script>
			<link rel="stylesheet" type="text/css" href="css/styles.css">
			<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<title> A Nossa Equipa </title>
	</head>
	<body>
		<header>
			<h1>Airsoft Portugal</h1>
				<nav>
					<ul>
						<li><a href="index.php">Main Page</a></li>
						<li><a href="Eventos.php">Eventos</a></li>
						<li><a class="active" href="equipa.php">Nossa Equipa</a></li>
						<li><a href="contactos.php">Contactos</a></li>
						<li><a href="galeria.php">Galeria</a></li>
						<li><a href="Links.php">Links</a></li>
						<li class="dropdown">
							<a href="indexstore.php" class="dropbtn">Loja Online</a>
							<div class="dropdown-content">
							<a href="indexstore.php">Entrar</a>
							<a href="registar.php">Nova Conta</a>
							</div>
					</ul>
				</nav>
		</header>
		<hr>
		<br>
		<br>
<article id="team">
 <h1>A Nossa Equipa</h1>
 <br>
<p>Somos uma empresa  Portuguesa fundada no ano de 2020.</p>
<p>Com loja online e armazêns em Lisboa, especializada no comercio de artigos militares e airsoft na venda de armas de classe G (airsoft).</p>
<p>Organizamos eventos de Airsoft em Portugal, do Norte ao Sul do País, nos melhores (fields) campos que o no nosso País tem para oferecer.</p>
<p>Somos uma equipa dinâmica e jovem que preza a rapidez nas suas entregas e a satisfação total do cliente!
</p>
 <img src="imagens/NossaEquipa.jpg" alt ="Nossa Equipa">
 <br><br>
 <h2>A nossa sede, veja a sua localização</h2>
      <p id="coordenadas"></p>
      <button onclick="obterLocalizacao()">Obter a minha localização</button>
      <div id="idmapa"></div>
</article>
	<br><br>
	<br><br>
	<br><br>
		<section id="Audio">
		 	<audio controls autoplay> 
				<source src="audios/soundtrack airsoft.mp3"type="audio/mpeg">
 				o seu browser não suporta o elemento áudio.
			</audio>
		</section>
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
