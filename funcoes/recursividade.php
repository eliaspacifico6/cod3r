<div class="titulo">Recursividade</div>
<?php

function somaUmAte($numero){
    $soma = 0;
    for ($i=1; $i <= $numero ; $i++) { 
        $soma += $i;
    }
    return $soma;
}

function somaRecursiva($numero){
    return $numero === 1 ? 1
        : $numero somaRecursiva($numero-1);
} 



echo somaUmAte(10);