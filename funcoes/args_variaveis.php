<div class="titulo">Argumentos Variaveis</div>

<?php

function soma($a, $b){
    return $a +$b;
}

echo Soma(4, 5, )."<br>";
echo Soma(2, 5, 8, 4)."<br>";

function somaCompleta(...$numeros){
    $soma = 0;
    foreach ($numeros as $key => $numero) {
        $soma += $numero; 
    }

    return $soma;
}

echo somaCompleta(1,2,3,4,5). "<br>";

$array = [6,7,8];
echo somaCompleta(...$array). "<br>";


echo somaCompleta(1,2,3,...$array). "<br>";
