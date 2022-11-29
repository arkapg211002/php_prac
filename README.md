# php_prac



Problems I faced and solutions which worked

1. mysql not starting - https://stackoverflow.com/questions/18177148/xampp-mysql-does-not-start <br>
2. php version on xampp - https://stackoverflow.com/questions/49463762/how-to-know-the-version-of-php-is-used-on-xampp <br>
3. phpmyadmin not working - https://stackoverflow.com/questions/52522461/i-changed-the-phpmyadmin-mysql-port-number-and-now-i-cant-log-in <br>

4. problem while connecting to databse:
> servername should be the server phpmyadmin is running . Make sure to include the port 3307(in case changed)
```php
<?php
    echo "Get connected to database<br>";
    /*ways to connect to msql database
        1.MySQLi extension
        2.PDO
    */
    
    //create a database connection
    $servername = "127.0.0.1:3307";//default
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
```

>adding port number after localhost is another way
```php
<?php
    echo "Get connected to database<br>";
    /*ways to connect to msql database
        1.MySQLi extension
        2.PDO
    */
    
    //create a database connection
    //$servername = "127.0.0.1:3307";
    $servername = "localhost:3307";
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
```
5. Deleting record from table using php and button - https://e-codec.blogspot.com/2021/05/how-to-delete-data-from-database-in-php.html
