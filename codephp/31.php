<?php
    $servername="localhost:3307";
    $username="root";
    $password="";
    $db="contacts";
    $conn=mysqli_connect($servername,$username,$password,$db);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
    }
    echo "</br>";

    //Deleting records in php database
    $sql="DELETE FROM `contactus` WHERE `sno`=1";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "We deleted the record successfully";
    }
    else{
        echo "We could not delete the record successfully because of this error ---> ".mysqli_error($conn);
    }
    





?>