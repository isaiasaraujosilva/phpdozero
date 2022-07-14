<?php
    function semStatic(){
        $a=0;
        $a++;
        echo $a."<br>";
    }
    
    semStatic();
    semStatic();
    semStatic();

    function comStatic(){
        static $a=0;
        $a++;
        echo $a."<br>";
    }

    comStatic();
    comStatic();
    comStatic();

    //o escopo estatico (static) guarda o valor da varial dentro da função para ser utilizado por outras funções
?>