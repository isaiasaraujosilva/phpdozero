<?php
    $x=10;
    echo $x."<a>-Global</a>";
    function teste(){
        $x=5;
        echo $x."<a>-Local</a>";
    }
    echo "<br>";
    teste();
?>