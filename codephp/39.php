<?php
    session_start();
    $_SESSION['username']="sachin";
    $_SESSION['favcat']="books";
    echo "welcome to the world of sessions";

    echo "</br>";
    echo $_SESSION['username'];
    echo "</br>";
    echo $_SESSION['favcat'];

    //destroy session
    session_unset();
    session_destroy();

    if(isset($_SESSION['favcat']))
    {
        echo "</br>";
        echo $_SESSION['favcat'];
    }
    else
    {
        echo "</br>";
        echo "session destroyed";
    }


?>