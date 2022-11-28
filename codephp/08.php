<?php
    //String functions
    $name='Arkapratim';
    echo "My name is $name<br>";
    echo strlen($name);
    echo "<br>";
    echo "Name is"." $name ".strlen($name);
    echo str_word_count($name);
    echo "</br>";
    echo strrev($name);
    echo "</br>";
    echo strpos($name,"A");
    echo "</br>";
    echo str_replace("A","a",$name);
    echo "</br>";
    echo str_repeat($name,5);
    echo "</br>";
    echo strtoupper($name);
    echo "</br>";
    echo strtolower($name);
    echo "</br>";
    echo ucwords($name);
    echo "</br>";
    echo ucfirst($name);
    echo "</br>";
    echo str_shuffle($name);
    echo "</br>";
    echo substr($name,0,3);
    echo "</br>";
    
    //Math functions
    echo pi();
    echo "</br>";
    echo min(1,2,3,4,5,6,7,8,9,10);
    echo "</br>";
    echo max(1,2,3,4,5,6,7,8,9,10);
    echo "</br>";
    echo abs(-100);
    echo "</br>";
    echo sqrt(100);
    echo "</br>";
    echo round(4.6);
    echo "</br>";
    echo ceil(4.1);
    echo "</br>";
    echo floor(4.9);
    echo "</br>";
    echo rand(1,100);//Random number between 1 and 100
    echo "</br>";
    echo mt_rand(1,100);//more secure
    echo "</br>";

    /*
    //Array functions
    $list = array(1,2,3,4,5,6,7,8,9,10);
    echo count($list);
    echo "</br>";
    echo max($list);
    echo "</br>";
    echo min($list);
    echo "</br>";
    echo sort($list);
    echo "</br>";
    print_r($list);//Prints the array
    echo "</br>";
    echo implode(" ",$list);//Converts array to string
    echo "</br>";
    echo explode(" ",implode(" ",$list));//Converts string to array
    echo "</br>";
    echo in_array(1,$list);//Checks if 1 is in the array
    echo "</br>";
    echo array_sum($list);
    echo "</br>";
    echo array_product($list);
    echo "</br>";
    echo array_reverse($list);
    echo "</br>";
    print_r(array_reverse($list));
    echo "</br>";
    echo array_search(1,$list);
    echo "</br>";
    echo array_rand($list);
    echo "</br>";
    print_r(array_rand($list,2));
    echo "</br>";
    echo array_unique($list);
    echo "</br>";
    print_r(array_unique($list));
    echo "</br>";
    echo array_merge($list,$list);
    echo "</br>";
    print_r(array_merge($list,$list));
    echo "</br>";
    echo array_shift($list);
    echo "</br>";
    print_r($list);
    echo "</br>";
    echo array_pop($list);
    echo "</br>";
    print_r($list);
    echo "</br>";
    echo array_unshift($list,0);
    echo "</br>";
    print_r($list);
    echo "</br>";
    echo array_push($list,11);
    echo "</br>";
    print_r($list);
    echo "</br>";
    echo array_slice($list,0,3);
    echo "</br>";
    print_r(array_slice($list,0,3));
    echo "</br>";
    echo array_splice($list,0,3);
    echo "</br>";
    print_r($list);
    echo "</br>";
    echo array_combine($list,$list);
    echo "</br>";
    print_r(array_combine($list,$list));
    echo "</br>";
    echo array_flip($list);
    echo "</br>";
    print_r(array_flip($list));
    echo "</br>";
    echo array_keys($list);
    echo "</br>";
    print_r(array_keys($list));
    echo "</br>";
    echo array_values($list);
    echo "</br>";
    print_r(array_values($list));
    echo "</br>";
    echo array_diff($list,$list);
    echo "</br>";
    print_r(array_diff($list,$list));
    echo "</br>";
    echo array_intersect($list,$list);
    echo "</br>";
    print_r(array_intersect($list,$list));
    echo "</br>";
    echo array_sum($list);
    echo "</br>";
    print_r(array_sum($list));
    echo "</br>";
    echo array_product($list);
    echo "</br>";
    print_r(array_product($list));
    echo "</br>";
    echo array_chunk($list,3);
    echo "</br>";
    print_r(array_chunk($list,3));
    echo "</br>";
    echo array_pad($list,10,0);
    echo "</br>";
    print_r(array_pad($list,10,0));
    echo "</br>";
    echo array_fill(0,10,0);
    echo "</br>";
    print_r(array_fill(0,10,0));
    echo "</br>";
    echo array_fill_keys($list,0);
    echo "</br>";
    print_r(array_fill_keys($list,0));
    echo "</br>";
    echo array_filter($list);
    echo "</br>";
    print_r(array_filter($list));
    echo "</br>";

    */










?>