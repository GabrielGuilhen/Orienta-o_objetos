<?php

require_once ("modelo/Balde.php");
require_once ("modelo/Livro.php");
require_once("modelo/Computador.php");
require_once("modelo/Produto.php");

$produto = new Produto;
$produto->setDescricao("Carregador 33W");
$produto->setUnidadeMedida("Unidade");

$livro = new Livro;
$livro->setDescricao("Brasileirinhas");
$livro->setUnidadeMedida("Unidade");
$livro->setAutor("Gabule");

$computador = new Computador;
$computador->setDescricao("Samsung");
$computador->setProcessador("I9-13260k");
$computador->setMemoria("1TB");
$computador->setUnidadeMedida("Unidade");

$balde = new Balde;
$balde->setCapacidade("20Litros");
$balde->setDescricao("Bosch");
$balde->setUnidadeMedida("Litros");

$produto->getDados();
$computador->getDados();
$livro->getDados();
$balde->getDados();



