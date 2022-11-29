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

    //Updating records in php database
    $sql="UPDATE `contactus` SET `name`='Rahul' WHERE `sno`=1";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "We updated the record successfully";
    }
    else{
        echo "We could not update the record successfully because of this error ---> ".mysqli_error($conn);
    }


?>