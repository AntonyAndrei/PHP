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

echo "<br/><br/><br/>";
/////////////////////////////////////////////////////////////////////////////////////////////
//Passando apenas a variavel $soma por referencia e nao seu valor 0, utilizando o &
function somar ($n1, $n2, &$total) {
    $total = $n1 + $n2;
}

$x = 3;
$y = 2;
$soma = 0;

//apos a execucao da funcao, a $soma tera o valor de $total
somar($x, $y, $soma);

echo $x . " + " . $y . " = " . $soma;
//se remover o & da funcao somar, o valor de $soma seria 0

echo "<br/><br/><br/>";
/////////////////////////////////////////////////////////////////////////////////////////////
//Funcoes anonimas
$dizimo = function (float $valor) {
    return $valor * 0.1;
};

echo $dizimo(956.60) . "<br/>";
//outra forma de fazer o mesmo com ArrowFunction,
//porem o VS Code nao reconhece e ira tratar como erro mesmo funcionando normalmente
$dizimo2 = fn($valor2) => $valor2 * 0.1;
echo $dizimo2(956.60);




?>

