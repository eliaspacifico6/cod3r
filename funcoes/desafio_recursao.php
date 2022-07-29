<div class="titulo">Desafio Recursividade</div>
<pre> 
<?php 

/* 
$array = [1,2,[3,4,5],6,[7,[8,9]],10];
>1
>2
>>3
>>4
>>5
>6
>>7
>>>8
>>>9
>10
*/

$array = [1,2,[3,4,5],6,[7,[8,9]],10];
// var_dump($array);

function desmembrar($array,$nivel=1 )  {
    foreach ($array as $key => $value) {       
        if (!is_array($value)) {           
            echo str_repeat(">", $nivel) . " $value .<br>";            
        }else{
             desmembrar($value, $nivel + 1);
        }            
    }    
}
desmembrar($array);