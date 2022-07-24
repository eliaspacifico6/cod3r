<div class="titulo">Argumentos Padrão</div>
<?php

function saudacao($nome = 'Senhor(a)', $sobrenome= 'Cliente'){
    return "bom vindo, $nome $sobrenome! <br>";
}

echo saudacao();
echo saudacao(null,);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água'){
    return "Para comer: $comida <br>
        Para beber: $bebida <br>";
}


echo anotarPedido('Hamburger');
echo anotarPedido('Pizza', 'Refrigerante');