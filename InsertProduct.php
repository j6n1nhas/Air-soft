<?php 
session_start();
require 'db_conn.php';
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login&register.css">
    <script src="js/script.js"></script>
    <title>Inserir Produto em Database</title>
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
            <li><a class= active href = "InsertProduct.php">Inserir Produtos</a></li>
			<li><a href = "removerProduct.php">Remover Produto</a></li>
			<li><a href="logout.php">Logout <?php echo $_SESSION['name']; ?></a></li>
		</ul>
	</nav>
    </header>
	    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         <br>
    <form name="form" method="post" action="insertProductLogic.php" enctype="multipart/form-data">
    <h2>Inserir Produto em Base de Dados</h2>
        Nome Produto: <input type = "text" name = "nome">
        <p>Modelo: <input type = "text" name = "modelo">
        <p>Tipologia: <input type = "text" name = "tipologia">
        <p>Fabricante: <input type = "text" name = "fabricante"> 
        <p>Id Tipo de Produtos:
        <select id="idTipoProdutos" name="idTipoProdutos"></select>
        <p>
              <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" style="display:none">
              <input type="hidden" name="MAX_FILE_SIZE" id="MAX_FILE_SIZE" value="2000000">
              <button id="fileSelect">Adicionar foto</button>
        <p><input type = "submit" Value = "INSERIR" class= "active" color="black">
    </form>
    <br>
    <footer>
				&copy;by Acosta@Airsoftportugal.pt 
				<?php 
				 echo date("F d Y H:i:s")
				?>	
    </footer>
    <script type="text/javascript">
        const e = document.getElementById("idTipoProdutos");

        // Procedimento para criar e carregar os tipos de produtos
        fetch("insertProductLogic.php")
        .then(response =>
        {
            return response.json();
        }).then(obj =>{
            for(let el=0; el<obj.length; el++)
            {
                const o = document.createElement("option");
                o.value = obj[el]["id"];
                o.label = obj[el]["nome"];
                e.appendChild(o);
            }
        });
        fileSelect.addEventListener("click", function (event)
        {
            const validade = fileSelect.checkValidity();
            if (!validade)
            {
                event.preventDefault();
                fileToUpload.click();
            }
        }, false);

        // A validação do ficheiro como imagem
        const fileSelect = document.getElementById("fileSelect");
        const fileToUpload = document.getElementById("fileToUpload");
        fileSelect.validity = false;
        fileSelect.setCustomValidity("Não tens nenhum ficheiro selecionado");
        fileToUpload.onchange = ((e)=>
        {
            const fileTypes = [
                "image/apng",
                "image/bmp",
                "image/gif",
                "image/jpeg",
                "image/pjpeg",
                "image/png",
                "image/svg+xml",
                "image/tiff",
                "image/webp",
                "image/x-icon",
            ];
            const maxsize = document.getElementById("MAX_FILE_SIZE").value;
            if(fileToUpload.files.length === 0)
            {
                fileSelect.setCustomValidity("Não tens nenhum ficheiro selecionado");
                fileSelect.validity = false;
                return;
            }
            else
            {
                const ficheiro  = fileToUpload.files[0];
                if(!fileTypes.includes(ficheiro.type))
                {
                    fileSelect.setCustomValidity("O ficheiro selecionado não é uma imagem");
                    fileSelect.validity = false;
                    return;
                }
                if(ficheiro.size > maxsize)
                {
                    fileSelect.setCustomValidity(`O tamanho (${ficheiro.size}) do ficheiro selecionado (${ficheiro.name}) excede o tamanho permitido: ${maxsize}`);
                    fileSelect.validity = false;
                    return;
                }
            }
            fileSelect.setCustomValidity("");
        });
    </script>
</body>
</html>
<?php 
}else{
     header("Location: indexstore.php");
     exit();
}
 ?>