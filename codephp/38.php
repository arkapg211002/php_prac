<?php
    echo "welcome to the world of cookies";
    echo "</br>";

    //syntax to set cookies
    echo time();
    echo "</br>";
    setcookie("category","books",time()+86400,"/");
    // setcookie("name","value",expire,path,domain,secure,httponly);
    
    //syntax to get cookies
    $cat=$_COOKIE["category"];
    echo "</br>";
    echo $cat;

?>