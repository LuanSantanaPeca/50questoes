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
 25142481-2 - Isabelli Azevedo da Silva
 25356591-2 - Sadrak Araújo Leopoldino
Data:14/09/2025
Descritivo: Escreva um script que determine o maior entre três números
*******************************************************************************/
<?php

$num1 = 2;

$num2 = 4;

$num3 = 3;

$maior = $num1;

$menor = $num1;

$meio = 0;

if($num2 > $maior){

$maior = $num2;

}

if($num3 > $maior){

$maior = $num3;

}

if($num2 < $menor){

$menor = $num2;

}

if($num3 < $menor){

$menor = $num3;

}

if($num1 != $maior && $num1 != $menor){

$meio = $num1;

}

if($num2 != $maior && $num2 != $menor){

$meio = $num2;

}

if($num3 != $maior && $num3 != $menor){

$meio = $num3;

}

echo $maior . '   ' . $meio . '   ' . $menor;
?>
