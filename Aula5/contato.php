<?php
    if ($_SERVER["SERVER_METHOD"] == "POST"){
        $firstname = $_POST("firstname")
        $lastname = $_POST("lastname")
        $email = $_POST("email")
        $celular = $_POST("celular")
        $messagem = $_POST("messagem")

        echo "$firstname <br>";
        echo "$lastname <br>";
        echo "$email <br>";
        echo "$celular <br>";
        echo "$messagem <br>";
    }
?>