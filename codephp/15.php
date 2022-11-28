<?php
    //for each loop
    $a=array("a","b","c","d","e");
    foreach($a as $value)
    {
        echo $value;
        echo "</br>";
    }
    $b=array("a"=>"apple","b"=>"ball","c"=>"cat","d"=>"dog","e"=>"elephant");
    foreach($b as $key=>$value)
    {
        echo $key;
        echo "</br>";
        echo $value;
        echo "</br>";
    }

    

?>