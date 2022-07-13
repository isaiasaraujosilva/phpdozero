<?php
    class pessoa{
        var $nome;
        var $idade;
        
        function falar(){
            echo "Olá Mundo";
        }

    }

$isaias=new pessoa();
$isaias->nome="isaias";
$isaias->falar();
