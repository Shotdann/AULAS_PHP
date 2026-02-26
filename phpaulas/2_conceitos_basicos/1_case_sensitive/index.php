<?php
//nao é case sensitive
echo "teste<br>";
echo "testando 2<br>";
ECHO " testando3 <br>";

//é case sensitive
$nome="Enzo Colati";
$NOME="TESTE";

echo $nome;
echo "<br>";
echo $NOME;
echo "<br>";
$valor = 10; // Saída 10
$Valor = 20; // Saída 20
echo $valor;
echo $Valor;

function Minhafuncao() { return "Olá"; }
echo Minhafuncao(); // Saída: Olá (funciona sem diferenciar)

?>