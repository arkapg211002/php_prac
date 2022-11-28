<?php
    //multidimensional array
    $months = array(
        "January" => array(
            "Days" => "31",
            "Days in Leap Year" => "31"
        ),
        "February" => array(
            "Days" => "28",
            "Days in Leap Year" => "29"
        ),
        "March" => array(
            "Days" => "31",
            "Days in Leap Year" => "31"
        ),
        "April" => array(
            "Days" => "30",
            "Days in Leap Year" => "30"
        ),
        "May" => array(
            "Days" => "31",
            "Days in Leap Year" => "31"
        ),
        "June" => array(
            "Days" => "30",
            "Days in Leap Year" => "30"
        ),
        "July" => array(
            "Days" => "31",
            "Days in Leap Year" => "31"
        ),
        "August" => array(
            "Days" => "31",
            "Days in Leap Year" => "31"
        ),
        "September" => array(
            "Days" => "30",
            "Days in Leap Year" => "30"
        ),
        "October" => array(
            "Days" => "31",
            "Days in Leap Year" => "31"
        ),
        "November" => array(
            "Days" => "30",
            "Days in Leap Year" => "30"
        ),
        "December" => array(
            "Days" => "31",
            "Days in Leap Year" => "31"
        )
    );
    //loop through the array
    foreach($months as $month => $days){
        echo "There are $days[Days] days in $month";
        echo "</br>";
    }
    echo "</br>";
    echo "</br>";




?>