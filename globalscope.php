<?php
    $x = 10;
    echo "Outside the function 1 the result is : ";
    echo "$x <br>";
    function myTest(){
        echo 'In the function 1 result is :';
        // echo $x;
        echo '<br>';
        echo 'In the function 2 result is : ';
        global $x;
        echo $x;
        echo '<br>';
        $x += 2;
    }
    myTest();
    echo 'Outside the function 2 the result is :';
    echo $x;
?>