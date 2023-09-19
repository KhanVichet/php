<?php

    include('math.php');

    // echo 'Hello world<br>';
    // echo 'Hello world<br>';
    // echo 'My name is boo';

    // $name= 'Lina';
    // $address = "Phom Penh";
    // echo '<h1>Hello '.$name.'</h1>';
    // echo "<h1>Address $address </h1>";

    // $fullname = 'Khan Vichet';
    // $gender = 'Male';
    // $age = 21;
    // $degree = 'Web front-end';
    // $department = 'IT';
    // $goal = 'Web development';



    // echo 'My name is : '.$fullname.'<br>';
    // echo 'Gender is :'.$gender.'<br>';
    // echo 'I am '.$age.'<br>';
    // echo 'Degree :'.$degree.'<br>';
    // echo 'Department :'.$department.'<br>';
    // echo 'Goal "'.$goal.'';

    $Score = new score();
    

    echo $Score->sum(10,20,20);

    $Salary = new salary();
    echo $Salary->salaryWithinTax(300);
?>