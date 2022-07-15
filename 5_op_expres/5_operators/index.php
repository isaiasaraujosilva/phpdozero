<?php
    function som($a,$b){
        $r=$a+$b;
        return $r;
    }
    function div($a,$b){
        $r=$a/$b;
        return $r;
    }
    function sub($a,$b){
        $r=$a-$b;
        return $r;
    }
    function mul($a,$b){
        $r=$a*$b;
        return $r;
    }

    function mod($a,$b){
        $r=$a%$b;
        return $r;
    }

echo som(1,1)."<br>";
echo div(1,1)."<br>";
echo sub(1,1)."<br>";
echo mul(1,1)."<br>";
echo mod(10,2)."<br>";