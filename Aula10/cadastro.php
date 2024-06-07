<?php

    require_once "conexao.php"; 

    $name = $_POST["name"];
    $email = $_POST["email"];
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Contato adicionado com sucesso";
    } else {
        echo "Erro ao adicionar contato: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();

    echo "<button><a href='./index.html'>Voltar</a></button>"
?>
