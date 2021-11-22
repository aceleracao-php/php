<?php

interface Servicos{
    public function calculaSalario(int $diasTrabalhados, String $cargo):float;
    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String
$valorGravacao);

}

class Funcionarios implements Servicos{

    public function calculaSalario(int $diasTrabalhados, String $cargo):float{
        $salario = 6.500;
        $salarioDia = $salario / 30;

        $porcentagem = 0.30;
        if($diasTrabalhados >= 15){
            echo "Salario Completo <br>";
            echo "Valor dia: R$". $salarioDia;
            return $salarioDia;
        }else{
            echo "Salario Com Desconto <br>";
            $valorSalarioComDesconto = $salario - ($salario * $porcentagem);
            echo "Valor dia: R$". $valorSalarioComDesconto;
            return $valorSalarioComDesconto;
        }
    }

    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String $valorGravacao){
        $salario = 4.970;
        $salarioDia = $salario / 30;

        $porcentagem = 0;
        if($diasTrabalhados > 9){
            echo "Salario Completo + 50%<br>";
            $porcentagem = 0.50;
            echo "Valor dia: R$". $salarioDia + ($salarioDia * $porcentagem);
        }else{
            echo "Salario Completo + 20%<br>";
            $porcentagem = 0.20;
            echo "Valor dia: R$". $salarioDia + ($salarioDia * $porcentagem);
        }
    }
    
}

$funcionario = new Funcionarios();

echo "Funcionario na modalidade Gratificação:  <br>";
echo $funcionario->calculaSalarioMaisGratificacao(15, "Analista de Software Jr");
echo "<br>";
echo $funcionario->calculaSalarioMaisGratificacao(5, "Analista de Software Jr");
echo "<br>";
echo "Funcionario na modalidade sem Gratificação:  <br>";
echo $funcionario->calculaSalario(15, 100);
echo "<br>";
echo $funcionario->calculaSalario(5, 50);
?>