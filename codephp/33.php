<?php
    //require and include in php
    include 'dbconnect.php';

    //require 'dbconnect.php';


    //create a database
    $sql="CREATE DATABASE `phptrip`";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "The database is created successfully";
    }
    else{
        echo "The database is not created successfully because of this error ---> ".mysqli_error($conn);
    }

    


?>