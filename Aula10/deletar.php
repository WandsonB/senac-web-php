<?php
    require_once "conexao.php";

    if(isset($_GET['id'])) { //verifica se o campo id nao esta vazio usando o metodo GET
        $id = $_GET['id'];
        $sql = "DELETE FROM usuarios WHERE id = $id";

        if ($conn->query($sql) === TRUE){
            echo 'Usuario deletado';
        } else {
            echo 'Usuario não encontrado'; 
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIO DELETADO</title>
</head>
<body>
    <a href="./exibir.php">Voltar</a><br>
</body>
</html>