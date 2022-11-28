<?php


    function processmarks($marksarr)
    {
        $total = 0;
        foreach ($marksarr as $value) {
            $total += $value;
        }
        return $total;
    }

    $marks = array(65, 70, 75, 80, 85, 90, 95, 100);
    $totalmarks = processmarks($marks);
    echo "Total marks obtained: $totalmarks";
    echo "</br>";

    $arr=array(98,99,56,78,90,100,45,67,89,100);
    $totalmarks = processmarks($arr);
    echo "Total marks obtained: $totalmarks";
    echo "</br>";




?>