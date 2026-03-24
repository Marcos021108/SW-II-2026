<?php
    function tabuada($num){
       for ($i=0; $i < 11 ; $i++) { 
        $resultado = $num * $i;
        echo "O resultado de $num x $i é: $resultado <br>";
       }
       echo "<hr>";
    }

    tabuada(24);
    tabuada(32);





?>