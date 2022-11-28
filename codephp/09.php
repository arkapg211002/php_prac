//operators in php

<?php

    //Arithmetic operators
    $a=10;
    $b=20;
    echo $a+$b;
    echo "</br>";
    echo $a-$b;
    echo "</br>";
    echo $a*$b;
    echo "</br>";
    echo $a/$b;
    echo "</br>";
    echo $a%$b;
    echo "</br>";
    echo $a**$b;
    echo "</br>";
    echo $a++;
    echo "</br>";
    echo $a--;
    echo "</br>";
    echo ++$a;
    echo "</br>";
    echo --$a;
    echo "</br>";
    echo $a+=$b;
    echo "</br>";
    echo $a-=$b;
    echo "</br>";
    echo $a*=$b;
    echo "</br>";
    echo $a/=$b;
    echo "</br>";
    echo $a%=$b;
    echo "</br>";
    echo $a**=$b;
    echo "</br>";
    echo $a=$b;
    echo "</br>";

    //Comparison operators
    $a=10;
    $b=20;
    echo $a==$b;
    echo "</br>";
    echo $a!=$b;
    echo "</br>";
    echo $a>$b;
    echo "</br>";
    echo $a<$b;
    echo "</br>";
    echo $a>=$b;
    echo "</br>";
    echo $a<=$b;
    echo "</br>";
    echo $a<=>$b;
    echo "</br>";
    echo $a===$b;//identical operator checks for both value and type
    echo "</br>";
    echo $a!==$b;//not identical operator checks for both value and type
    echo "</br>";

    //Increment/Decrement operators
    $a=10;
    $b=20;
    echo $a++;
    echo "</br>";
    echo $a--;
    echo "</br>";
    echo ++$a;
    echo "</br>";
    echo --$a;
    echo "</br>";


    //Logical operators
    $a=10;
    $b=20;
    echo $a and $b;//and operator returns true if both the operands are true
    echo "</br>";
    echo $a or $b;//or operator returns true if any of the operands are true
    echo "</br>";
    echo $a xor $b;
    echo "</br>";
    echo $a && $b;
    echo "</br>";
    echo $a || $b;
    echo "</br>";
    echo !$a;
    echo "</br>";

    //String operators
    $a="Hello";
    $b="World";
    echo $a.$b;//concatenation operator is used to join two strings
    echo "</br>";
    echo $a.=$b;//concatenation assignment operator is used to join two strings
    echo "</br>";

    //Array operators
    $a=array(1,2,3,4,5);
    $b=array(6,7,8,9,10);
    echo $a+$b;//union operator is used to join two arrays  
    echo "</br>";
    echo $a==$b;//equality operator is used to check if two arrays are equal
    echo "</br>";
    echo $a===$b;//identical operator is used to check if two arrays are identical
    echo "</br>";
    echo $a!=$b;//inequality operator is used to check if two arrays are not equal
    echo "</br>";
    echo $a<>$b;//inequality operator is used to check if two arrays are not equal
    echo "</br>";
    echo $a!==$b;//not identical operator is used to check if two arrays are not identical
    echo "</br>";

    //Conditional assignment operator
    $a=10;
    $b=20;
    echo $a=$b;//conditional assignment operator is used to assign a value to a variable if it is not already set
    echo "</br>";

    //Execution operator
    $a=10;
    $b=20;
    echo $a=$b;//execution operator is used to execute a string as PHP code
    echo "</br>";


    




?>