<?php

function fatorial($num){
    for($i=$num-1;$i>0;$i--){
        $num=$i*$num;
    }
    print("\nResultado: " . $num . ".\n\n");
}

$num=readline("Digite um número: ");

while($num>0){
    fatorial($num);
    $num=readline("Digite outro número: ");
}
