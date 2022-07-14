<?php
    $teste="abs";
    
    echo "<br>";
    echo $teste;
    //Variaveis dentro do if estão no escopo global
    if(true){
        $teste="sba";
    }

    echo "<br>";
    echo $teste;
?>