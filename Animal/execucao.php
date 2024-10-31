<?php
require_once("modelo/Animal.php");
require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");

$cachorro = new Cachorro();
$cachorro->setNome("Pulguinha\n");
$cachorro->setRaca("Vira-Lata\n");
$cachorro->getDados();
echo $cachorro->getDados();
echo $cachorro->latir();

$cachorro2 = new Cachorro();
$cachorro2->setNome("Marley \n");
$cachorro2->setRaca("Shitzu \n");
$cachorro2->getDados();
echo $cachorro2->getDados();
echo $cachorro2->latir();


$gato = new Gato();
$gato->setNome("Rivelino \n");
$gato->setRaca("Brasileira \n");
$gato->getDados();
echo $gato->getDados();
echo $gato->miar();

$gato2 = new Gato();
$gato2->setNome("Romario \n");
$gato2->setRaca("Espanhol \n");
$gato2->getDados();
echo $gato2->getDados();
echo $gato2->miar();







