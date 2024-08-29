<?php

class Pessoa {
    private string $nome;
    private int $idade;
    private string $sobrenome;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;
        return $this;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function __toString() {
        return sprintf("%s %s, %d anos", $this->nome, $this->sobrenome, $this->idade);
    }
}

$cadastro = array();
$opcao = 0;

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Inserir\n";
    echo "2- Listar\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");

    switch ($opcao) {
        case 0:
            echo "Programa encerrado\n";
            break;
        
        case 1:
            $pessoa = new Pessoa();
            echo "================================_CADASTRO_==================================== \n";
            $nome = readline("Digite o nome que deseja cadastrar, por favor: ");
            $pessoa->setNome($nome);
            
            echo "-----------------------------------------------------------------------------\n";
            $sobrenome = readline("Digite o sobrenome, por favor: ");
            $pessoa->setSobrenome($sobrenome);
            
            echo "-----------------------------------------------------------------------------\n";
            $idade = readline("Digite a idade da pessoa cadastrada, por favor: ");
            $pessoa->setIdade($idade);
            
            echo "------------------------------------------------------------------------------\n";
            array_push($cadastro, $pessoa);
            break;

        case 2:
            echo "====================================_TODOS OS CADASTROS_=======================================\n";
            if (count($cadastro) > 0) {
                foreach ($cadastro as $cad) {
                    printf("Nome: %s | Sobrenome: %s | Idade: %d\n", 
                        $cad->getNome(), 
                        $cad->getSobrenome(), 
                        $cad->getIdade());
                }
            } else {
                echo "Nenhuma pessoa cadastrada até o momento.\n";
            }
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
