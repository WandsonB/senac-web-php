<?php 
    require_once "../../php/conexao/connect.php";

    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $descricao = $_POST["descricao"];
    $imgLink = $_POST["imgLink"];
    
    $postSv = "INSERT INTO servicos (tipo, valor, descricao,imgLink) VALUES ('$tipo','$valor','$descricao','$imgLink')";
    

    if ($connect->query($postSv) === TRUE) {
        echo "Serviço Cadastrado";
    } else {
        echo "Erro ao adicionar contato: " . $connect->error;
    }

