<?php
    $teste="abs";
    
    echo "<br>";
    echo $teste;
    //Variaveis dentro do if estão no escopo global
    if(true){
        $teste="sba";
        echo " Alterando a variavel dentro de um bloco if";
    }

    echo "<br>";
    echo $teste;
    //função global

    function testeGlobal(){
        global $teste;
        echo " variavel dentro da função --$teste--";
    }

    testeGlobal();
?>