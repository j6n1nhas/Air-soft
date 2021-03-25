<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login&register.css">
    <script defer src="js/script.js"></script>
    <title>Registo</title>

</head>
<body>
    <form class="registo" action="registoLogic.php" method="post" name="form">   
     	<h2>Registro de Cliente</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
      
         <div id="error"></div>
     	   <label>User Name</label>
     	   <input type="text" name="uname" placeholder="User Name"><br>

         <div id="error"></div>
     	   <label>Password</label>
     	   <input type="password" name="password" placeholder="Password"><br>

         <div id="error"></div>
         <label>Nome Completo</label>
         <input type="text" name="nome" placeholder="nome">

         <div id="error"></div>
         <label>Email</label>
     	   <input type="text" name="email" placeholder="email"><br>
        
         <div id="error"></div>
         <label>Morada</label>
     	   <input type="text" name="morada" placeholder="morada"><br>

         <div id="error"></div>
         <label>Codigo Postal</label>
         <input type="text" name="codigoPostal" placeholder="codigoPostal">

         <div id="error"></div>
         <label>Nif</label>
         <input type="text" name="nif" placeholder="nif">

         <div id="error"></div>
         <label>Contacto</label>
         <input type="text" name="contacto" placeholder="contacto">
        
         <label for="APD">Associação Promotora do Desporto :</label><br>
         <input list="APD">
         <datalist id="APD">
            <option value="Não tenho">
	         <option value="Lusitana">
	         <option value="APMairsoft">
	         <option value="ADAPT">
	         <option value="FEDAP">
	         <option value="APMA">
	         <option value="ANA">
        </datalist>
        <br>     
     	<button type="submit">Register</button>
    </form>
    <br>
    <footer>
				&copy;by Acosta@Airsoftportugal.pt 
				<?php 
				 echo date("F d Y H:i:s")
				?>	
    </footer>
</body>
</html>