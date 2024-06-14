<?php
    require_once "../../php/conexao/connect.php";

    if(isset($_GET['id'])) { //verifica se o campo id nao esta vazio usando o metodo GET
        $id = $_GET['id'];
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $nome = $row['nome'];
            $email = $row['email'];
        } else {
            echo 'Usuario não encontrado'; 
        }

        $conn->close();
    }
?>