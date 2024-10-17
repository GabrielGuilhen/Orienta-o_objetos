<?php
require_once("modelo/Circulo.php");
require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");


echo "Escolha uma forma geometrica\n";
echo "\n1-Circulo\n";
echo "2-Retangulo\n";
echo "3-Quadrado\n";

$opcao = readline("Informe a forma desejada:");
$forma = null;
if ($opcao == 1) {
    $forma = new Circulo();
    $forma->setRaio(readline("\nInforme o raio"));
} elseif ($opcao == 2) {
    $forma = new Retangulo();
    $forma->setAltura(readline("Informe a Altura:"));
    $forma->setBase(readline("Informe a base"));
} elseif ($opcao == 3) {
    $forma = new Quadrado();
    $forma->setLado(readline("Informe o lado:"));
}

echo "Área: " . $forma->getArea() . "\n";
echo "Desenho: " . $forma->getDesenho() . "\n";
