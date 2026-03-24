<?php
    //  FUNÇÃO COM PARÂMETROS E SEM RETORNO

    function calcula_quadrado($a){
        $x =$a * $a;

        echo "$x <br>";
       
    }

     calcula_quadrado(5);
     calcula_quadrado(6);
     calcula_quadrado(7);
     calcula_quadrado(9);
     calcula_quadrado(4);
     calcula_quadrado(2);
     calcula_quadrado(1);
     calcula_quadrado(8);
     calcula_quadrado(1000);
     calcula_quadrado(15);
     calcula_quadrado(600000);
    
    echo "<hr>";

    function soma($x,$y){
        $soma =$x + $y;

        echo "A soma é: $soma  <br>";
       
    }

     soma(5,4);
     soma(6,6);
     soma(7,9);
     soma(9,10);
     soma(4,10000000);
     soma(2, 10000);
     soma(1,500000);
     soma(8,383838383);
     soma(1000,23783437891346);
     soma(15,2763498372);
     soma(600000,8572146);
?>