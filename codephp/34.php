<?php
    //files in php
    $filename="test.txt";
    $f=fopen($filename,"w");
    fwrite($f,"This is a test file");
    $file=fopen($filename,"r") or die("Unable to open file");
    echo fread($file,filesize($filename));
    fclose($file);
    echo "</br>";

    //file fucntions in php
    $filename="test.txt";
    $file=fopen($filename,"r") or die("Unable to open file");
    echo fread($file,filesize($filename));
    echo "</br>";

    //file_get_contents
    $filename="test.txt";
    echo file_get_contents($filename);
    echo "</br>";

    //file_put_contents
    $filename="test.txt";
    $txt="This is a test file";
    file_put_contents($filename,$txt);
    echo "</br>";

    //file_exists
    $filename="test.txt";
    if(file_exists($filename)){
        echo "File exists";
    }
    else{
        echo "File does not exists";
    }
    echo "</br>";

    //is_writable
    $filename="test.txt";
    if(is_writable($filename)){
        echo "File is writable";
    }
    else{
        echo "File is not writable";
    }
    echo "</br>";

    //is_readable
    $filename="test.txt";
    if(is_readable($filename)){
        echo "File is readable";
    }
    else{
        echo "File is not readable";
    }
    echo "</br>";

    //filesize
    $filename="test.txt";
    echo filesize($filename);
    echo "</br>";

    //unlink
    $filename="test.txt";
    if(unlink ($filename)){
        echo "File is deleted";
    }
    else{
        echo "File is not deleted";
    }
    echo "</br>";

    //copy
    $filename="test.txt";
    $filename2="test2.txt";
    if(copy($filename,$filename2)){
        echo "File is copied";
    }
    else{
        echo "File is not copied";
    }
    echo "</br>";

    //rename
    $filename="test.txt";
    $filename2="test2.txt";
    if(rename($filename,$filename2)){
        echo "File is renamed";
    }
    else{
        echo "File is not renamed";
    }
    echo "</br>";

    //mkdir
    $dirname="test";
    if(mkdir($dirname)){
        echo "Directory is created";
    }
    else{
        echo "Directory is not created";
    }
    echo "</br>";

    //rmdir
    $dirname="test";
    if(rmdir($dirname)){
        echo "Directory is deleted";
    }
    else{
        echo "Directory is not deleted";
    }
    echo "</br>";

    //chdir
    $dirname="test";
    if(chdir($dirname)){
        echo "Directory is changed";
    }
    else{
        echo "Directory is not changed";
    }
    echo "</br>";

    //getcwd
    $dirname="test";
    if(chdir($dirname)){
        echo "Directory is changed";
    }
    else{
        echo "Directory is not changed";
    }
    echo getcwd();
    echo "</br>";

    //opendir
    $dirname="test";
    $dir=opendir($dirname);
    echo readdir($dir);
    echo "</br>";

    //closedir
    $dirname="test";
    $dir=opendir($dirname);
    echo readdir($dir);
    closedir($dir);
    echo "</br>";

    //readdir
    $dirname="test";
    $dir=opendir($dirname);
    echo readdir($dir);
    closedir($dir);
    echo "</br>";

    //rewinddir
    $dirname="test";
    $dir=opendir($dirname);
    echo readdir($dir);
    rewinddir($dir);
    echo readdir($dir);
    closedir($dir);
    echo "</br>";

    //scandir
    $dirname="test";
    $dir=scandir($dirname);
    print_r($dir);
    echo "</br>";

    //glob
    $dirname="test";
    $dir=glob($dirname);
    print_r($dir);
    echo "</br>";

    //fileatime
    $filename="test.txt";
    echo fileatime($filename);
    echo "</br>";

    //filemtime
    $filename="test.txt";
    echo filemtime($filename);
    echo "</br>";

    //filectime
    $filename="test.txt";
    echo filectime($filename);
    echo "</br>";

    //fileowner
    $filename="test.txt";
    echo fileowner($filename);
    echo "</br>";

    //filegroup
    $filename="test.txt";
    echo filegroup($filename);
    echo "</br>";

    //fileperms
    $filename="test.txt";
    echo fileperms($filename);
    echo "</br>";

    //touch
    $filename="test.txt";
    echo touch($filename);
    echo "</br>";

    //clearstatcache
    $filename="test.txt";
    echo fileatime($filename);
    clearstatcache();
    echo fileatime($filename);
    echo "</br>";

    //file
    $filename="test.txt";
    print_r(file($filename));
    echo "</br>";



?>