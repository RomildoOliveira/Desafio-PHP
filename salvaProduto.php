<?php
    
    $nomeProduto = $_POST["nomeProduto"];

    $descricao = $_POST["descricao"];

    $preco = $_POST["preco"];

    $produto = array($nomeProduto, $descricao, $preco);

    $produto_json = json_encode($produto);

    $fp = fopen("produto.json","a");

    $escreve = fwrite($fp, $produto_json);

    fclose($fp);
    
    include "createProduto.php";
?>