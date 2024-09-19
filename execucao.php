<?php 

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$estado1 = new Estado();
$estado1->setNome("Santa Catarina");
$estado1->setSigla("SC");

$estado2 = new Estado();
$estado2->setNome("Paraná");
$estado2->setSigla("PR");

$cidade1 = new Cidade();
$cidade1->setNome("Florianópolis");
$cidade1->setEstado($estado1);
$cidade1->setQtdHabitantes("2");
$cidade1->setAltitude(500);

$cidade2 = new Cidade();
$cidade2->setNome("Blumenau");
$cidade2->setEstado($estado1);
$cidade2->setQtdHabitantes("20");
$cidade2->setAltitude(300);

$cidade3 = new Cidade();
$cidade3->setNome("Foz do Iguaçu");
$cidade3->setEstado($estado2);
$cidade3->setQtdHabitantes("50");
$cidade3->setAltitude(400);

$cidade4 = new Cidade();
$cidade4->setNome("Cascavel");
$cidade4->setEstado($estado2);
$cidade4->setQtdHabitantes("10000");
$cidade4->setAltitude(200);

$cidade = array($cidade1, $cidade2, $cidade3, $cidade4);

foreach ($cidade as $c ) {
    print("\nA cidade de " . $c->getNome() . " se localiza no estado de " . $c->getEstado()->getNome() ." ". $c->getEstado()->getSigla(). " possui ". $c->getQtdHabitantes() . " habitantes e uma altitude de ". $c->getAltitude(). " metros\n");
}








