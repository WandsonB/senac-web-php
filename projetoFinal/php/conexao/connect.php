<?php
    // PRIMEIRO CRIAR AS VARIAVEIS QUE RECEBERAM AS INFORMAÇÕES DE ACESSO AO BD
        $servername = "localhost"; 
        $username = "Admin"; 
        $password = "https://algo.muito.bom/"; 
        $database = "atendimento";
    
    // COMANDO PARA FAZER A CONEXAO POR MEIO DA FERRAMENTA MYSQLI, PDO, ODBC, SQLSRV.
    $connect = mysqli($$servername, $username, $password, $database);

    //  VERIFICAR CONEXÃO
    if ($connect->connect_error) {
        die("Conexão falhou: " . $connect->connect_error);
    }
