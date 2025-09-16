/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25164713-2 - Luan Enrico Santana Peça
 25161143-2 - Gabriel Hikari Uchida Requião 
 25356144-2 - Lucas Teixeira da Silva
 25001132-2 - Cauã Chaerki Bobato
 25068539-2 - Guilherme Costa Ferreira
 25324764-2 - Gabriel Eduardo Diniz
 25016187-2 - Michel Bueno Chacon
 25001459-2 - Eduardo Gritten dos Santos Spohr
 25142481-2 - 
 25356591-2 - Sadrak Araújo Leopoldino
Data: 10 de Setembro de 2025
Descritivo: Crie uma calculadora simples com switch case
*******************************************************************************/

<?php
$num1 = 10;
$num2 = 5;
$operacao = "+"; // +, -, *, /

switch ($operacao) {
    case "+":
        $resultado = $num1 + $num2;
        break;
    case "-":
        $resultado = $num1 - $num2;
        break;
    case "*":
        $resultado = $num1 * $num2;
        break;
    case "/":
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Erro: divisão por zero";
        }
        break;
    default:
        $resultado = "Operação inválida";
}

echo "Resultado: $resultado\n";
?>

