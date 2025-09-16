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
Data:01/09/2025
Descritivo: Crie uma condição que verifique se um triângulo é válido
*******************************************************************************/

<?php
$a = 3;
$b = 4;
$c = 5;
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Triângulo válido\n";
} else {
    echo "Triângulo inválido\n";
}
?>
