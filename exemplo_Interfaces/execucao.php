<?php

require_once("modelo/radioPortatil.php");
require_once("modelo/RadioRelogio.php");

$tipo = "RP";
$radio = null;
if ($tipo == "RP") {
    $radio = new RadioPortatil();
    $radio->setCor("Preto");
    $radio->setMarca("Livstar");
} elseif ($tipo == "RR") {
    $radio = new RadioRelogio();
    $radio->setCorTela("Vermelho");
}
$radio->ligarRadio();
$radio->desligarRadio();
if($radio instanceof IRelogio)
   $radio->mostrarHoras();
