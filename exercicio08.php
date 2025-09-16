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
Data: 15 de Setembro de 2025
Descritivo: 8.Crie um código que calcule a área de um círculo (πr²)
*******************************************************************************/

<?php
// Calcular a área de um círculo
$raio = 5;
$area = pi() * pow($raio, 2);

echo "<h3>Área de um círculo</h3>";
echo "Raio = $raio <br>";
echo "Área = " . round($area, 2) . "<br><br>";

?>