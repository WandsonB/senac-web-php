<?php

echo "<h1>Operadores Aritméticos</h1>";
$a = 2;
$b = 5;
echo $a . " e numero " . $b . "<br>";

$soma = $a + $b;
echo $soma . "<br>";
echo "$a + $b tera como resultado:" . $a + $b . "<br> <br>";

$subt = $a - $b;
echo $subt . "<br>";
echo "$a - $b tera como resultado:" . $a - $b . "<br> <br>";

$mult = $a * $b;
echo $mult . "<br>";
echo "$a * $b tera como resultado:" . $a * $b . "<br> <br>";

$div = $a / $b;
echo $div . "<br>";
echo "$a / $b tera como resultado:" . $a / $b . "<br> <br>";

echo "<h1>Operadores de Comparação</h1>";
if($a > $b){
    echo "$a é maior que $b". "<br> <br>";
}
if($a < $b){
    echo "$a é menor que $b". "<br> <br>";
}

$a = 5;
$b = 5;

if($a == $b){
    echo "$a é igual que $b". "<br> <br>";
}

$a = 5;
$b = "5";

if(($a === $b)){
    echo "$a é igual em valor e tipo a $b". "<br> <br>";
} else {
    echo "$a não é igual em valor e tipo a $b". "<br> <br>";
}

$a = 5;
$b = "5";

if(($a !== $b)){
    echo "$a é diferente em valor e tipo a $b". " <br> <br>";
} else {
    echo "$a não é diferente em valor e tipo a $b". "<br> <br>";
}

echo "<h1>Operadores Lógicos</h1> <br>";
$a = 5;
$b = "3";

$type = gettype($a);

if(($a === 5) && (gettype($a) === $type)){
    echo "a operação deu true <br> <br>";
} else {
    echo "a operação deu false <br> <br>";
}

$a = 5;
$b = "3";

$type = gettype($b);

if(($a === 3) || (gettype($a) === $type)){
    echo "a operação deu true <br> <br>";
} else {
    echo "a operação deu false <br> <br>";
}

echo "<h1Tipos de Dados</h1> <br>";

$a = 5;
$b = "3";
$c = true;

echo gettype($a). "<br>";
echo gettype($b). "<br>";
echo gettype($c). "<br>";

echo "<h1Operadores de Atribuição</h1> <br>";