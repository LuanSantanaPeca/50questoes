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
Descritivo: Escreva um código que calcule o IMC e calcule o resultado
*******************************************************************************/
<?php
$altura = 1.90;
$peso = 120;

$imc = $peso / ($altura ** 2);

$dicionario = [
    18.5 => "Abaixo do peso",
    24.9 => "Peso normal",
    29.9 => "Sobrepeso",
    34.9 => "Obesidade grau 1",
    39.9 => "Obesidade grau 2",
];

foreach($dicionario as $key => $value){
    //Se a chave for menor que 40, então testa os valores de acordo com o IMC. 
    if($key < 40.0){
        if($imc <= $key){
            echo PHP_EOL."$value";
            break;
        }
    }else{ //Se a chave for maior ou igual a 40
        echo PHP_EOL."$value";
    }
}
?>
