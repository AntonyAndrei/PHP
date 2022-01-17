<?php

//Condicional Ternaria (IF ELSE de uma linha)
$idade = 90;
$MenorDeIdade = ($idade < 18) ? true : false;

if ($MenorDeIdade) {
    echo "Menor";
} else {
    echo "Maior";
}

echo "<br/><br/>";///////////////////////////////////////////////////////////////////////////
//Condicional NULL CAO
//Como fazer para evitar erro se um variavel nao existir?

$nome = "Antony";
//$sobrenome = "Santos";

$nomeCompleto = $nome;
//Se a variavel sobrenome existir use ela, senao, nao coloque nada
$nomeCompleto .= isset($sobrenome) ? $sobrenome : "";
//Com o NULL CAO faz isso de forma mais simples
$nomeCompleto .= ($sobrenome) ?? "";
//IMPORTANTE usar duas interrogacoes para "ativar" o NULL CAO
echo $nomeCompleto;
 
echo "<br/><br/><br/>";
/////////////////////////////////////////////////////////////////////////////////////////////
//Foreach do PHP
$ingredientes = [
    'acucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em po'
];

foreach ($ingredientes as $key => $value) {
    echo "item: " . ($key + 1) . ": " . $value . "<br/>";
}






?>

