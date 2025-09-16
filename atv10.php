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
Data: 15 de Setembro de 2025
Descritivo: Escreva um script que converta minutos em horas e minutos
*******************************************************************************/

<?php
// Converter minutos em horas e minutos
$minutos = 135;
$horas = intdiv($minutos, 60);
$restoMin = $minutos % 60;

echo "<h3>Converter minutos em horas e minutos</h3>";
echo "$minutos minutos = $horas horas e $restoMin minutos <br>";

?>

