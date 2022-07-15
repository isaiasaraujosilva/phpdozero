<?php
    
    function div($a,$b){
        try{
            $r = $a/$b;
        }catch(DivisionByZeroError $r){
        }   
        return $r;
    }

    echo div(2,2);