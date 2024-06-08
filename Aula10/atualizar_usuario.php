<?php
    require_once "conexao.php";

    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $sql = "UPDATE usuarios SET nome = '$name', email = '$email', id = '$id'";
        

        if($conn->query($sql) === TRUE){
            echo 'usuario atualizado com sucesso!';
        } else {
            echo 'Erro ao atualizar usuario: '. $conn->error;
        }


        $conn->close();
    }
?>