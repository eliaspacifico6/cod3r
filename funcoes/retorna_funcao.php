<div class="titulo">Retornando Função</div>
<pre> 
<?php

function soma($a ) {
    return  function($b) use($a) {
        return $a + $b;
    };
}

echo soma(3)(2);

$doisMais=Soma(2);

echo "<br>".$doisMais(10);
echo "<br>".$doisMais(18);
