<div class="titulo">Argumentos & Retornos</div>
<?php

function obterMensagem(){
    return 'Seja Bem vindo(a)!';
}

$m = obterMensagem();

echo $m;
echo "<br>";

var_dump(obterMensagem());

function obriterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo "<br>";
echo obriterMensagemComNome("Elias Pacífico!");

function soma($a,$b){
    return $a+$b;
}

echo "<br>". soma(3,5);
echo "<br>". soma(32,73);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}


$variavel = 1;
trocaValor($variavel,3);

echo "<br>". $variavel;
trocarValorDeVerdade($variavel,300);

echo "<br>". $variavel;

