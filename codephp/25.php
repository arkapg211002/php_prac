<?php
    //echo "Get connected to database<br>";
    
    //create a database connection
    $servername = "localhost:3307";//default as I have changed port initially
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




    //create a database
    $sql = "CREATE DATABASE dbarka2";
    //mysqli_query($conn,$sql);//creating only db

    $result = mysqli_query($conn,$sql);
    //check for the database creation success
    if($result){
        echo "The db was created successfully<br>";
    }
    else{
        echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
    }



    


?>