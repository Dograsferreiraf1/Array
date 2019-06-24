<?php

//Criado um variavel que contenha um array.
$alunos = array("Brian","Camila","Ana","Douglas");

//Mostrando os valores do array conforme o valor do indice:
    echo $alunos[0]; // Mostra Brian
    echo "<br />";
    echo $alunos[1]; // Mostra Camila
    echo "<br />";
    echo $alunos[2]; // Mostra Ana
    echo "<br />";
    echo $alunos[3]; // Mostra Douglas

// Adiciona um item ao array:
    $aluno[] = "Elisa";

// NOVO: função var_dump para descobrir o que há dentro de uma variavel:
echo "<hr />"; //Apenas para criar uma linha seprando os dados de cima.  

var_dump($alunos);

echo "<hr />";

$logins = array( array("aluno","123"),
                 array("tiago", "etec"),
                 array("user", "pass")
                );

var_dump($logins);

?>