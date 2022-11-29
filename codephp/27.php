<?php

    $servername="localhost:3307";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        echo "Connected successfully<br>";
    }
    //insert data into table
    $sql="INSERT INTO `dbarka2`.`table1` (`name`, `dest`) VALUES ('Arka', 'Kolkata');";
    //$sql .="INSERT INTO `dbarka2`.`table1` (`name`, `dest`) VALUES ('Arun', 'Mumbai');";

    $result=mysqli_multi_query($conn,$sql);
    if($result){
        echo "The data was inserted successfully<br>";
    }
    else{
        echo "The data was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }



?>