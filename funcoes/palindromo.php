<div class="titulo">Desafio Palindromo</div>
<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

function verificaPalindromo($palavra){
    $palavra = strtoupper($palavra);
    $reverso = strrev($palavra);
    return  $palavra == $reverso ? "{$palavra} é um palidromo": "{$palavra} não é um palidromo";
 
}

    echo "<br>". verificaPalindromo("ana");