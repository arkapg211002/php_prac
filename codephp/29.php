<?php
    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="contacts";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    //$conn=mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
    }
    echo "</br>";

    
    $sql="SELECT * FROM contactus";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    echo $num." records found in the database";
    //mysqli_close($conn);

    echo "</br>";
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            echo var_dump($row);
            echo "</br>";
        }
    }


?>