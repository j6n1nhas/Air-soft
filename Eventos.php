<!DOCTYPE html>
<html lang="pt-PT" dir="ltr">
<head>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<script src="js/script.js"></script>
	<title>Eventos Airsoft Portugal</title>
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
						<li><a class="active" href="Eventos.php">Eventos</a></li>
						<li><a href="equipa.php">Nossa Equipa</a></li>
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
	<br><br>
    <section>
			<article id="eventos">
		  <img src="imagens/Eventosairsoft.jpg" alt="Eventosairsoft">
		  <h1>Eventos Airsoft em Portugal</h1>
		  <b>Eventos a realizar até ao final de 2021</b>
		  </article>

		<hr>

		  <Article id="eventocinel">
		    <img src="imagens/Camoflagem.jpg" alt="Sniper evento2">
				<h2>Eventos Março</h2>
		    <a href="EventoCinel.php">
		    <p> Evento Snipper Cinel</p>
				<p>22/03/2021</p>
				<p>Evento nas instalações do Teams virtual</p>
		    <p>Evento Snipper, a decorrer nas instalações virtuais do Cinel</p>
				</a>
		  </article>
		<hr>
		  <Article id="Abril">
		    <h2 >Eventos Abril</h2>
		    <p onclick="changeText(this)">Eventos a decorrer no mês de Abril</p>
		  </article>
		<hr>
		  <Article id="Maio">
		    <h2 >Eventos Maio</h2>
		    <p onclick="changeText(this)">Eventos a decorrer no mês de Maio</p>
		  </article>
		<hr>
		  <Article id="Junho">
		    <h2 >Eventos Junho</h2>
		    <p onclick="changeText(this)">Eventos a decorrer no mês de Junho</p>
		  </article>
		  <hr>
		  <div class="row">
   			 <div class="column">
      		 <img src="imagens/SniperImage.jpg" alt="Sniper evento"style="float: left" height="400" width="50%">
    		 </div>
    		 <div class="column">
      		 <img src="imagens/woods fight.jpg" alt="woods"  height="400" width="50%">
    		 </div>
    		 <div class="column">
      		 <img src="imagens/airsoftpanther.jpg" alt="panther" style="float:right;" height="400"  width="50%">
			 <div class="column">
      		 <img src="imagens/airsoft-panther2.jpg" alt="panther"  height="400" width="50%">
    		</div>
			<div class="column">
      		 <img src="imagens/Gilliesniper.jpg" alt="panther" style="float:right;" height="400" width="50%">
    		</div>
			<div class="column">
      		 <img src="imagens/full3D.jpg" alt="panther"  height="400" width="50%">
    		</div>
 		 </div>
		  <hr>
		<section id="Audio">
		 	 <audio controls> 
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
