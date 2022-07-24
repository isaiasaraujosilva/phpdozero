<?php
   # criar operador de igualdade entre os operadores / == /===-

   $a = 1;
   $b = "1";

   if($a == $b){
        echo "<br>";
        echo "Operador de comparação '==' ";
   }
   if($a === $b){
        echo "<br>";
        echo "operador de comparação '==='";
   }

   if($a !== $b){
        echo "<br>";
        echo "operador de diferença '!=='"; 
   }
   if($a ===! $b){
        echo "<br>";
        echo "operador de diferença '!==='";
   
    }
?>