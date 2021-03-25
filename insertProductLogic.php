<?php
  session_start(); 
  require 'db_conn.php';

  // Excerto para receber um get da página quando carrega e devolver os tipos de produtos na base de dados
  // para serem carregados no elemento select que introduzi no formlulário  
  if(isset($_GET) && empty($_POST))
  {
    $query = "SELECT * FROM tipoprodutos";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $result = json_encode($result);
    echo($result);
    die();
  }

  foreach($_POST as $elemento)
    $elemento = mysqli_real_escape_string($conn, $elemento);
  $nome=$_POST['nome'];
  $modelo=$_POST['modelo'];
  $tipologia=$_POST['tipologia'];
  $fabricante=$_POST['fabricante'];
  $idTipoProdutos = $_POST['idTipoProdutos'];
  $fileToUpload = $_FILES["fileToUpload"]["name"];

  // Função para gravar o ficheiro no disco
  function save_file($nome, $modelo, $tipologia, $fabricante, $idTipoProdutos)
  {
    define("fileTypes",array(
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
    ));
    $dirdestino = "bd/fotos/";
    $checkdir = is_dir($dirdestino) ? true : mkdir($dirdestino, 0777);
    try
    {
      if(!isset($_FILES))
          throw new Exception("Não foi enviado nenhum ficheiro");
      if(!isset($_FILES["fileToUpload"]) && trim($_FILES["fileToUpload"]["name"]) == "")
          throw new Exception("Não há nenhum ficheiro para processar");
      $maxsize = 2000000;
      $ficheiro = $_FILES["fileToUpload"];
      $finalfile = $nome."-".$modelo."-".$tipologia."-".$fabricante."-".$idTipoProdutos;
      if(!in_array($ficheiro["type"], fileTypes))
          throw new Exception("O ficheiro não é uma imagem permitida");
      if(filesize($ficheiro["tmp_name"]) > $maxsize)
          throw new Exception("O ficheiro escolhido ultrapassa o tamanho máximo permitido");
      $filename = strtolower($finalfile) . "." . pathinfo($ficheiro["name"], PATHINFO_EXTENSION);
      $file_full_path = $dirdestino . $filename;
      $dir = dir("bd/fotos/");
      while(false != ($entry = $dir->read()))
      {
          if(strtolower($finalfile) == pathinfo($entry, PATHINFO_FILENAME))
            throw new Exception("Já existe uma foto para esse produto");
              //unlink($dirdestino.$entry);
      }
      if(!move_uploaded_file($ficheiro["tmp_name"], $file_full_path))
          throw new Exception("Ocorreu um erro no processo de gravação do ficheiro");
      return $file_full_path;
    }
    catch(Exception $erro)
    {
      header("location: InsertProduct.php?error=".$erro->getMessage());
      exit();
    }
  }


  // Function to validate against any email injection attempts
  function IsInjected($str)
  {
    $injections = array('(\n+)',
          '(\r+)',
          '(\t+)',
          '(%0A+)',
          '(%0D+)',
          '(%08+)',
          '(%09+)'
          );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  //Validate first
  if(empty($nome))
  {
      header("Location: InsertProduct.php?error=Nome em falta");
      exit();
  }
  else if(empty($modelo))
  {
      header("Location: InsertProduct.php?error=Modelo em falta");
      exit();
  }
  if(empty ($tipologia))
  {
      header("Location: InsertProduct.php?error=Tipologia em falta");
      exit();
  }
  if(empty($fabricante))
  {
      header("Location: InsertProduct.php?error=Fabricante em falta");
      exit();
  }
  if(empty($idTipoProdutos))
  {
      header("Location: InsertProduct.php?error=IdTipo de Produto em falta");
      exit();
  }
  if(empty($fileToUpload))
  {
    header("location: InsertProduct.php?error=Foto em falta");
    exit();
  }

  echo "<p><font face='Arial' size=18>Dados recebidos</p>";
  echo "Nome Produto: ". $nome . "</p>";
  echo "Modelo: ". $modelo . "</p>";
  echo "Tipologia: ".$tipologia . "<p>";
  echo "Fabricante: ".$fabricante . "<p>";
  echo "Id Tipo de Produto: ".$idTipoProdutos . "<p>";
  echo "Foto: ".$fileToUpload."<p>";
  echo "<a href = 'InsertProduct.php'> Inserir Novo Produto </a>";
  $ficheiro = save_file($nome, $modelo, $tipologia, $fabricante, $idTipoProdutos);
  $ficheiro = mysqli_real_escape_string($conn, $ficheiro);
  $sql = "INSERT INTO produtos (id, nome, modelo, tipologia, fabricante, idTipoProdutos, foto) VALUES 
    (default, '$nome', '$modelo', '$tipologia', '$fabricante', '$idTipoProdutos', '$ficheiro')";
  $insere = mysqli_query($conn, $sql);
  if($insere)
    echo "<p><font face='Arial' color=#ff0000 size=18>Produto inserido</font> <p>";
  else
    echo "<p><font face='Arial' color=#ff0000 size=18>Dados não inseridos</font><p>";
  mysqli_close($conn);
  ?>