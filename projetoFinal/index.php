<?php
    require_once "./php/conexao/connect.php";

    $comando_sql = "SELECT * FROM servicos";
    $result = $connect->query($comando_sql);

    $connect->close(); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/padroes.css">

    <title>PerfectCar</title>
</head>
<body>
    <header>
        <div class="logo">
            <h2>PerfectCar</h2>
        </div>

        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Agendamento</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="./contact.html">Contato</a></li>
                <li class="scale-up-center"><a href="./pages/servicos/addServiços.html">cadastrar serviço</a></li>
            </ul>
        </nav>
    </header>

    <main>
            <?php
                if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_assoc()) {
                        echo "<section class='card' style='width: 18rem;'>"; 
                            echo "<img src='" . $row['imgLink'] . "'class='card-img-top' alt='Futura iumagem do prato'>"; 
                            echo "<div class='card-body'>"; 
                                echo "<h5 class='card-title'>" . $row['tipo'] . "</h5>"; 
                                echo "<p class='card-text'>" . $row['descricao'] . "</p>"; 
                                echo "<a href='#' class='btn btn-primary'>Agende agora</a>"; 
                            echo "</div>"; 
                        echo "</section>";
                    }
                    } else {
                        echo "<p>Nenhum resultado encontrado.</p>";
                    }
            ?>

            <p></p>

        
        <!-- <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Espelhamento de pintura</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section>

        <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Vitrificação</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section>

        <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Limpeza de A/C</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section>

        <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Higienização interna</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section>

        <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Martelinho de ouro</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section>

        <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Polimento de faróis</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section>

        <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Hidratação de bancos de couro</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section>
        
        <section class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/fundo-de-pedra-cinza_24972-1659.jpg" class="card-img-top" alt="Futura iumagem do prato">
            <div class="card-body">
                <h5 class="card-title">Detalhamento</h5>
                <p class="card-text">Descrição do Serviço</p>
                <a href="#" class="btn btn-primary">Agende agora</a>
            </div>
        </section> -->

    </main>
    
    <footer>
        <p>2024 restaurantes. todos os direitos reservados</p>
        <p>Politica de privacidade / termo de uso</p>
    </footer>
</body>
</html>