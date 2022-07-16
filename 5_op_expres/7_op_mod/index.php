<?php
    function res($a,$b){
        $r = $a % $b;
        return $r;
    }
    function ePar($a){
        if ($a%2==0){
            echo  "o Valor $a é par";
        }else{
            echo "o Valor $a é impar";
        }

    }
    echo res(10,10)."<br>";
    ePar(9);
?>