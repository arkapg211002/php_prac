<?php
    echo "Get connected to database<br>";
    /*ways to connect to msql database
        1.MySQLi extension
        2.PDO
    */
    
    //create a database connection
    $servername = "localhost:3307";//default
    //$servername="127.0.0.1:3307";//will also work
    $username = "root";
    $password = "";//this is default password of xampp
    //$database = "codephp";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password);

    //die if connection was not successful
    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }


?>