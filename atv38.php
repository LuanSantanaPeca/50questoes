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
Data:02/09/2025
Descritivo: Faça um programa que converta temperatura entre Celsius e Fahrennheit baseado em uma escolha
*******************************************************************************/
<?php
$temperatura = 30;
$tipo = "C"; // "C" para Celsius para Fahrenheit, "F" para Fahrenheit para Celsius

if ($tipo == "C") {
    $resultado = $temperatura * 9 / 5 + 32;
    echo "$temperatura °C = $resultado °F\n";
} elseif ($tipo == "F") {
    $resultado = ($temperatura - 32) * 5 / 9;
    echo "$temperatura °F = $resultado °C\n";
} else {
    echo "Tipo inválido\n";
}
?>
