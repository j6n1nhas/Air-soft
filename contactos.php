<!DOCTYPE html>
	<html lang="pt-PT" dir="ltr">
	<head>
			<link rel="stylesheet" type="text/css" href="css/styles.css">
			<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
			<script src="js/script.js"></script>
		<title>Contactos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="autor" content="">
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
						<li><a class="active" href="contactos.php">Contactos</a></li>
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
    <section id="contacto">
			<form action="#" method="POST" >
				<div class="form">
				<h2 class="form">Entre em Contacto</h2>
				<label for="name">Nome</label>
				<input type="text" name="name">
				</div>
				<div class="form">
					<label for="email">Email</label>
					<input type="text" name="email">
				</div>
				<div class="form">
					<label for="message">Mensagem</label><br>
					<textarea name="message" rows="10" cols="20"></textarea>
				</div>
						 <input type="submit" value="Send Message">
			</form>
    </section>
		<hr>
<section id="Questionário">
	<h1>Questionário a Cliente</h1>

<form>
<label for="nome">Primeiro Nome:</label><br>
<input type ="text" id="nome" name="nome"><br>
<label for="apelido">Apelido:</label><br>
<input type="text" id="apelido" name="apelido">
<br><br>

<label for="adulto">Idade:</label><br>
<input type="radio" id="adultoSim" name="adulto" Value="sim">
<label for="adultoSim">+18 anos</label><br>
<input type="radio" id="adultoNao" name="adulto" value="Não">
<label for="male">-18 anos</label>
<br><br>

<label for="ADP">ADP:</label><br>
<input type="radio" id="ADPSim" name="ADP" Value="sim"><label for="ADP">Sim</label><br>
<input type="radio" id="ADPNao" name="ADP" value="Não"><label for="ADP">Não</label>
<br><br>

<label for="ADP">ADP'S:</label><br>
<input list="ADP">
<datalist id="ADP">
	<option value="Lusitana">
	<option value="APMairsoft">
	<option value="ADAPT">
	<option value="FEDAP">
	<option value="APMA">
	<option value="ANA">
</datalist><br>

<br>

<label for="Gameplay">Tipo de jogo favorito:</label><br>
<input type="checkbox" id="CQB" name="CQB" value="CQB">
<label for="male">CBK</label><br>
<input type="checkbox" id="Milsim" name="Milsim" value="Milsim">
<label for="Milsim">Milsim</label><br>
<input type="checkbox" id="Survival" name="Survival" value="Survival">
<label for="Survival">Survival</label><br>
<input type="checkbox" id="Lastmanstanding" name="Lastmanstanding" value="Lastmanstanding">
<label for="Lastmanstanding">Lastmanstanding</label><br>
<input type="submit" value="submeter">
<br><br>

<label for="Marcafavorita">Marca Favorita:</label><br>
<input type="checkbox" id="Novritsch" name="Novritsch" value="Novritsch">
<label for="male">Novritsch</label><br>
<input type="checkbox" id="TokioMarui" name="TokioMarui" value="TokioMarui">
<label for="TokioMarui">Tokio Marui</label><br>
<input type="checkbox" id="Umarex" name="Umarex" value="Umarex">
<label for="Umarex">Umarex&EliteForce</label><br>
<input type="checkbox" id="G&G" name="G&G" value="G&G">
<label for="G&G">G&G</label><br>
<input type="submit" value="submeter">

<br><br>

<label for="Tipodearma">Tipo de Arma Favorita:</label><br>
<input type="checkbox" id="AEG" name="AEG" value="AEG">
<label for="AEG">AEG</label><br>
<input type="checkbox" id="GBB" name="GBB" value="GBB">
<label for="GBB">GBB</label><br>
<input type="checkbox" id="ActionBolt" name="ActionBolt" value="ActionBolt">
<label for="ActionBolt">ActionBolt</label><br>
<input type="checkbox" id="GBBE" name="GBBR" value="GBBR">
<label for="GBBR">GBBR</label><br>
<input type="submit" value="submeter">
</form>
</section>
<hr>
<section id="footbanner">
<img src="imagens/bannerairsoft.jpg" alt="banner footer">
</section>
<section id="Audio">
		  <audio controls autoplay> 
			<source src="audios/soundtrack airsoft.mp3"type="audio/mpeg">
 			o seu browser não suporta o elemento áudio.
		</audio>
</section>
<footer>
		&copy;by Acosta@Airsoftportugal.pt
		<?php 
			echo date("F d Y H:i:s")
		?>	
</footer>

	</body>
	</html>
