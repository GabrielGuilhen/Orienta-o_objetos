<?php

$pessoas = array();

for ($i = 0; $i < 4; $i++) {
    echo "Pessoa " . ($i + 1) . "\n";
    $nome = readline("Nome: ");
    $idade = intval(readline("Idade: "));
    $cidadeNatal = readline("Cidade Natal: ");
    $profissao = readline("Profissão: ");
    
    $dadosPessoa = array(
        "nome" => $nome,
        "idade" => $idade,
        "cidadeNatal" => $cidadeNatal,
        "profissao" => $profissao
    );
    
    $pessoas[] = $dadosPessoa;
}

$pessoaMaisVelha = null;
$idadeMaisVelha = 0;

foreach ($pessoas as $pessoa) {
    if ($pessoa["idade"] > $idadeMaisVelha) {
        $pessoaMaisVelha = $pessoa;
        $idadeMaisVelha = $pessoa["idade"];
    }
}

echo "\nPessoa mais velha:\n";
echo "Nome: " . $pessoaMaisVelha["nome"] . "\n";
echo "Idade: " . $pessoaMaisVelha["idade"] . "\n";
echo "Cidade Natal: " . $pessoaMaisVelha["cidadeNatal"] . "\n";
echo "Profissão: " . $pessoaMaisVelha["profissao"] . "\n";
