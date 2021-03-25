<?php
    session_start(); 
    require 'db_conn.php';

$nome=$_POST['nome'];
$modelo=$_POST['modelo'];
$tipologia=$_POST['tipologia'];
$fabricante=$_POST['fabricante'];
$idTipoProdutos = $_POST['idTipoProdutos'];
$id = $_POST['id'];

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
if (empty($nome)) {
    header("Location: InsertProduct.php?error=Nome em falta");
    exit();
}else if(empty($modelo)){
    header("Location: InsertProduct.php?error=Modelo em falta");
    exit();
}if (empty ($tipologia)){
    header("Location: InsertProduct.php?error=Tipologia em falta");
    exit();
}if(empty($fabricante)){
    header("Location: InsertProduct.php?error=Fabricante em falta");
    exit();
}if (empty($idTipoProdutos)){
    header("Location: InsertProduct.php?error=IdTipo de Produto em falta");
    exit();
}
    echo "<p><font face='Arial' size=18>Dados Removidos</p>";
    echo "Id Produto: ". $id . "<p>";
    echo "Mome Produto:". $nome . "</p>";
    echo "Modelo:". $modelo . "</p>";
    echo "Tipologia: ". $tipologia . "<p>";
    echo "Fabricante: ". $fabricante . "<p>";
    echo "Id Tipo de Produto: ". $idTipoProdutos . "<p>";
 
    echo "<a href = 'removerProduct.php'>Remover novo Produto </a>";

    $sql = "SELECT * FROM produtos WHERE nome = '$nome'";
    $resultado=mysqli_query($conn,$sql);
    $nr_antes=mysqli_num_rows($resultado);
    $remove="DELETE * FROM produtos WHERE nome = '$nome'";
    mysqli_query($conn,$remove);
    $sql1="SELECT * FROM produtos WHERE nome = '$nome'";
    $resultado1=mysqli_query($conn,$sql1);
    $nr_depois=mysqli_num_rows($resultado1);
    $removidos=$nr_antes-$nr_depois;
    if($remove==1){
        echo "<p><font face='Arial' color=#ff0000 size=18>Cliente Removido com sucesso</font> <p>";
    }else{
        echo "<p><font face='Arial' color=#ff0000 size=18> Dados não Removidos</font><p>";
    }
    
    mysqli_close($conn);
?>
