<?php
class Escola{
    private string $nome;
    private string $endereco;
    private int $qtdAlunos;

  
    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco():string
    {
        return $this->endereco;
    }

 
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

  
    public function getQtdAlunos():string
    {
        return $this->qtdAlunos;
    }

 
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}
$escolas = array();
for ($i=0; $i!=4 ; $i++) { 
    $escola = new Escola();
    $nome = readline("Informe o nome: ");
    $endereco = readline("Informe o endereço: ");
    $qtdAlunos = readline("Informe a quantidade de alunos: ");

    $escola->setNome($nome);
    $escola->setEndereco($endereco);
    $escola->setQtdAlunos($qtdAlunos);

    array_push($escolas, $escola);
}
foreach ($escolas as $esc) {
    echo"Nome da escola é " . $escola->getNome() .", o endereço é " . $escola->getEndereco() . " e a quantidade de alunos é " . $escola->getQtdAlunos() . ".\n";
}
$escolaMaisAluno = $escolas[0];
foreach ($escolas as $esc) {
    if ($esc->getQtdAlunos() > $escolaMaisAluno->getQtdAlunos()) 
        $escolaMaisAluno = $esc;   
}
echo"\nEscola com mais alunos: ";

$escolaMaisAluno->getNome() ,$escolaMaisAluno->getEndereco() ,$escolaMaisAluno->getQtdAlunos()
