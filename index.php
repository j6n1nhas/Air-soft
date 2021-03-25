<!DOCTYPE html>
	<html lang="pt-PT" dir="ltr">
	<head>
		<link rel="stylesheet" type="text/css" href="css/styles.css">	
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<script src="js/script.js"></script>
		<title>Airsoft Portugal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Airsoft Promotion">
		<meta name="keywords" content="Airsoft,Aeg,Gbb,Gbbr">
		<meta name="author" content="AirsoftPT,Acosta">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	</head>
	<body>
    <header>
			<h1>Airsoft Portugal</h1>
				<nav>
					<ul>
						<li><a class="active"href="index.php">Main Page</a></li>
						<li><a href="Eventos.php">Eventos</a></li>
						<li><a href="equipa.php">Nossa Equipa</a></li>
						<li><a href="contactos.php">Contactos</a></li>
						<li><a href="galeria.php">Galeria</a></li>
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
		<section>
			<div id="photolinks">
			  <img src="imagens/full3D.jpg" alt="warrior3D">
			</div>
		</section>
		<section>
			<div id="missao">
			  <img src="imagens/comandosrifle.jpg" alt="snipper image">
			  <button onclick="myFunction()" >Clica Aqui</button>
				<p id="demo">clica aqui para nos dizes quem és!</p>
			<script>
				function myFunction() {
  				var txt;
  				var person = prompt("Por favor insira o seu nome:", " ");
  					if (person == null || person == "") {
   					txt = "Até já...";
  					} else {
    				txt = "Bem-vindo " + person + " ao Mundo Airsoft";
  					}
  					document.getElementById("demo").innerHTML = txt;
					}
			</script>
			<p id="demo"></p>
			<h1>A Nossa Missão</h1>
			<p>A nossa missão passa por trazer aos consumidores, informação actualizada, relativamente ao mundo Airsoft em Portugal.
			Comprometemo-nos a entregar informação, açerca dos produtos mais actuais no mercado, seja a nivel de equipamentos,
			ou a nivel de novas gameplays e novidades inerentes a este desporto.
			Valorizamos o rigor na informação que apresentamos, sendo para nós importante que a clareza do conteudo seja de facil precepção
			por parte do consumidor, sendo que a mesma está em constante evolução assim como o mundo Airsoft.</p>
			</div>
			<h3>Patrocionadores</h3>
			<p id="elemento1"><img src="imagens/Umarex.png" alt="Umarex"><span style="display: none;">UMAREX</span></p>
        	<p id="elemento2"><img src="imagens/swiss arms.png" alt="Umarex"></p>
        	<button type="button" 
            	onclick="esconderElemento('elemento1')">
            	Esconder Foto 1
       		</button>
        	<button type="button" 
            	onclick="mostrarElemento('elemento1')">
            	Mostrar Foto 1
        	</button>
        	<button type="button" 
            	onclick="esconderElemento('elemento2')">
            	Esconder foto 2
        	</button>
        	<button type="button" 
            	onclick="mostrarElemento('elemento2')">
            	Mostrar foto 2
        	</button>
		</section>
			<audio controls autoplay> 
      					<source src="audios/soundtrack airsoft.mp3"type="audio/mpeg">
       			 		o seu browser não suporta o elemento áudio.
    		</audio>
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
