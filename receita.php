  <?php

class Receita{

private string $descricao;
private float $valor;


public function getDescricao(): string
{
return $this->descricao;
}


public function setDescricao(string $descricao): self
{
$this->descricao = $descricao;

return $this;
}


public function getValor(): float
{
return $this->valor;
}


public function setValor(float $valor): self
{
$this->valor = $valor;

return $this;
}

}

class Despesa{

private string $descricao;
private float $valor;




public function getDescricao(): string
{
return $this->descricao;
}

public function setDescricao(string $descricao): self
{
$this->descricao = $descricao;

return $this;
}

public function getValor(): float
{
return $this->valor;
}

public function setValor(float $valor): self
{
$this->valor = $valor;

return $this;
}

}

$receitas = array();
$despesas = array();

$opcao = 0;
do {
    echo "1- ADICIONAR RECEITA: \n";
    echo "2- ADICIONAR DESPESA: \n";
    echo "3- LISTAR RECEITAS: \n";
    echo "4- LISTAR DESPESAS: \n";
    echo "5- SUMARIZAR: \n";
    echo "0- SAIR DO PROGRAMA: \n";

    $opcao = readline( "Informe a opcão:\n");
    

    switch ($opcao) {
        case 1:
            echo "\nAdicionando receita... \n";
            $receita = new Receita();
            $receita->setDescricao(descricao: readline(prompt: "Digite a descrição da receita:"));
            $receita->setValor(valor: readline(prompt: "Digite o valor da receita:"));
            array_push($receitas,$receita);
            echo"Receita adicionado com sucesso! \n\n";
            break;

        case 2:
            echo "\nAdicionando despesa... \n";
            $despesa = new Despesa();
            $despesa->setDescricao(descricao: readline(prompt: "Digite a descrição da despesa:"));
            $despesa->setValor(valor: readline(prompt: "Digite o valor da despesa:"));
            array_push($despesas, $despesa);
            echo"Despesa adicionado com sucesso! \n\n";
            break;  
            
        case 3:
            echo "\nListando receitas...\n";
            $num = 1;   
            foreach ($receitas as $r) {
                echo"Descrição da receita " .  $num . ": " . $r->getDescricao() . "\nValor da receita " . $num . ": " . $r->getValor() . "\n";
                $num++;
            }
            break;    

        case 4:
            echo "\nListando despesas...\n";
            $num = 1;   
            foreach ($despesas as $d) {
                echo"\nDescrição da despesa " .  $num . ": " . $d->getDescricao() . "\nValor da despesa " . $num . ": " . $d->getValor() . "\n";
                $num++;
                }
            break; 
        
        case 5:
            $totalReceita=0;
            foreach ($receitas as $r) {
                $totalReceita += $r->getValor();
            }
            $totalDespesa=0;
            foreach ($despesas as $d) {
                $totalDespesa += $d->getValor();
            }
            $saldo = $totalReceita - $totalDespesa;

            echo "Saldo:R$ " . $saldo . "\n";
            echo "Receita Total:R$ " . $totalReceita . "\n";
            echo "Despesa Total:R$ " . $totalDespesa . "\n";
            
            break;    
        
        default:
            echo "Opção Invalida...\n";
            break;
    }
    
} while ($opcao != 0);

