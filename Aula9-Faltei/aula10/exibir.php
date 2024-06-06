<?php

require_once "../conexao.php"; 

$comando_sql = "SELECT * FROM usuarios";
$result = $conn->query($comando_sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Lista de usuarios</h2>
        <button onclick="window.location.href='index.html'">Voltar</button>
    	<div id="user-list">
            <?php
                if ($result->num_rows > 0 ){
                    echo "<table>";
                    echo "<tr class='list-group list-group-horizontal'><th>ID</th><th>Name</th><th>Email</th><th>Ações</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='list-group list-group-horizontal'>";
                        echo "<td class='list-group-item'>" . $row['id'] . "</td>";
                        echo "<td class='list-group-item'>" . $row['nome'] . "</td>";
                        echo "<td class='list-group-item'>" . $row['email'] ."</td>";
                        echo "<td class='list-group-item'>";
                        echo "<button class='btn btn-primary' onclick=\"window.location.href='atualizar.php?id=" . $row['id'] . "'\">Atualizar</button>";
                        echo "<button class='btn btn-primary' onclick=\"window.location.href='deletar.php?id=" . $row['id'] . "'\">Atualizar</button>";
                        echo "</td>";
                        echo "</tr class='list-group list-group-horizontal'>";
                    }
                    echo "</table>";
                    } else {
                        echo "<p>Nenhum usuário encontrado.</p>";
                    }
                    echo "</table>";
                
            ?>
        </div>
    </div>
</body>
</html>