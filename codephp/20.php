<?php
    //scope of variables
    $x = 10;//global scope
    function myFunction(){
        $x = 5;//local scope
        echo $x;
    }
    echo "</br>";
    myFunction();
    echo "</br>";
    echo $x;




?>