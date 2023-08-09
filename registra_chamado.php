<?php 
    require_once "include.php";
    
    $txt = $_SESSION['id'] . '#'. $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;

    $arquivo = fopen('arquivo.txt', 'a');

    fwrite($arquivo, $txt);

    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>

