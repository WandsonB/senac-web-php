<?php
    require_once "conexao.php";

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2>Atualizar usuario</h2>
        <form action="./atualizar_usuario.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo htmlspecialchars($nome);?>">
            </div>
        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo htmlspecialchars($email);?>">
            </div>


            <a href="./exibir.php">Voltar</a><br>
            <button type="submit" class="btn btn-primary">Atualizar</button>

        </form>
    </div>
</body>
</html>