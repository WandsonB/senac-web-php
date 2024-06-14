<?php
    // PRIMEIRO CRIAR AS VARIAVEIS QUE RECEBERAM AS INFORMAÇÕES DE ACESSO AO BD
        $servername = "localhost"; 
        $username = "SuperAdm"; 
        $password = "./SuperAdm67"; 
        $database = "atendimento";
    
    // COMANDO PARA FAZER A CONEXAO POR MEIO DA FERRAMENTA MYSQLI, PDO, ODBC, SQLSRV.
    $connect = new mysqli($servername, $username, $password, $database);

    //  VERIFICAR CONEXÃO
    if ($connect->connect_error) {
        die("Conexão falhou: " . $connect->connect_error);
    }
