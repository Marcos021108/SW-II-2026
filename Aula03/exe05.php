<?php
    //  TRABALHAMDO COM ARRAYS

    function mostra_array($vetor){
        foreach ($vetor as $value) {
            echo $value . "<br>";
        }
        echo "<hr>";

    }

    $numeros = [1,2,3,4,5];
    $numeros2 = [10,20,30,40,50];
    $nomes = ['Cleberson', 'Ueverton', 'Cleitinho'];

    mostra_array($numeros);
    mostra_array($numeros2);
    mostra_array($nomes);
?>