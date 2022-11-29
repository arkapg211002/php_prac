<?php
    //create table
    $servername ="localhost:3307";
    $username = "root";
    $password = "";

    //create connection
    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
    }

    $sql = "CREATE TABLE `dbarka2`.`table1` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`))";
    $result = mysqli_query($conn,$sql);
    //check for the table creation success
    if($result){
        echo "The table was created successfully<br>";
    }
    else{
        echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
    }



?>