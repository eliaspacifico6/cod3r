<div class="titulo">Função & Escopo</div>

<?php
    function imprimirMensagem(){
        echo "Olá!";
        echo "Ate Mais<br>";
    }

    imprimirMensagem();
    imprimirMensagem();
    imprimirMensagem();

    $variavel =1;
    
    function trocarValor(){
        $variavel = 2;
        echo "Durante a Função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";

    trocarValor();
    echo "Depois: $variavel <br>";


    function trocaValordeVerdade()
    {
        global $variavel ;
        $variavel = 3;
        
        echo "Durante a funcção: $variavel <br>";
    }
    trocaValordeVerdade();
    echo "Agora: $variavel";


    var_dump(trocaValordeVerdade());