<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <button class="btn_submit">Voltar</button><br>

    <?php 
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "primeiro numero: $num1 <br> segundo numero: $num2 <br>";

            if (isset($_POST['somar'])) {
                $resultado = $num1 + $num2;
                echo "o resultado da soma dos numeros $num1, $num2 foi: $resultado <hr>";
            } 
            elseif (isset($_POST['subtrair'])) {
                $resultado = $num1 + $num2;
                echo "o resultado da subtração dos numeros $num1, $num2 foi: $resultado <hr>";
            } 
            elseif (isset($_POST['dividir'])) {
                $resultado = $num1 + $num2;
                echo "o resultado da divisão dos numeros $num1, $num2 foi: $resultado <hr>";
            } 
            elseif (isset($_POST['multiplicar'])) {
                $resultado = $num1 + $num2;
                echo "o resultado da multiplicão dos numeros $num1, $num2 foi: $resultado <hr>";
            }

            
        }
    ?>
</body>
</html>

