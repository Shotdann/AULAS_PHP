<?php
if(is_int(5)){//true
    echo "É um numero inteiro<br>";
} 
if(is_int("Não é um nuemro inteiro")){//false
    echo "é um numero inteiro 2<br>";
}

$n=9;
if(is_int($n)){//true
    echo "é um numero inteiro variavel";
}

/* Checando numero inteiro 
podemos validar se um dado é inteiro com a
funçao is_int();
caso o numero seja inteiro, será retornado true 
(um outro tipo de dado) 
*/

?>