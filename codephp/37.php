<?php
    //writing and appending files in php
    $filename="test.txt";
    $f=fopen($filename,"a");
    fwrite($f,"This is a test file");
    $file=fopen($filename,"r") or die("Unable to open file");
    echo fread($file,filesize($filename));
    fclose($file);
    echo "</br>";

    
?>