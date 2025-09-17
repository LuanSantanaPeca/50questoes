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
Descritivo: Crie uma condição que verifique se um triângulo é válido
*******************************************************************************/
<?php
function classificarTriangulo($lado1, $lado2, $lado3) {
    // Verifica se os lados formam um triângulo válido
    if ($lado1 <= 0 || $lado2 <= 0 || $lado3 <= 0) {
        return "Os lados devem ser positivos.";
    }
    if ($lado1 + $lado2 <= $lado3 || $lado1 + $lado3 <= $lado2 || $lado2 + $lado3 <= $lado1) {
        return "Os lados não formam um triângulo.";
    }

    // Classificação do triângulo
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        return "Equilátero";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        return "Isósceles";
    } else {
        return "Escaleno";
    }
}

// Exemplo de uso
$lado1 = 5; // Insira aqui o valor do primeiro lado
$lado2 = 5; // Insira aqui o valor do segundo lado
$lado3 = 5; // Insira aqui o valor do terceiro lado

$classificacao = classificarTriangulo($lado1, $lado2, $lado3);
echo "O triângulo é: " . $classificacao;
?>
