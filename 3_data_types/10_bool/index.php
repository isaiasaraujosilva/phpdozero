<?php
    
    //check valor bool

    $numero=[0,false,"0",0.0, NULL];
    foreach($numero as $valor){
        if ($numero==false){
            echo "o $valor é considerado falso pelo php <br>";
        }else{
            echo"O $valor não é considerado falso pelo php <br>";
        }

    }
    
?>