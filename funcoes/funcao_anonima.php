<div class="titulo">Funçoes Anomimas</div>

<?php

$soma = function ($a,$b){
    return $a+$b;
};

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a,$b) ?? 'Nada';
    echo " $a $op $b  = $resultado <br>";
}

executar(2,3, '+', $soma);

$multiplicacao = function ($a,$b){
    return $a * $b;
};

executar(2,3, '*', $multiplicacao);

function  divisao($a, $b){
    return $a / $b;
}

// executar(9,3, '/', divisao);
