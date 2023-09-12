<?php
    $weigh = 70;
    $height = 1.9;
    $BMI = $weigh/$height;
    if($BMI>=40){
        echo '<h1>The person falls under the morbid obesity category </h1>';
    }else if($BMI<40){
        echo '<h1>The person falls under the severely obese category</h1>';
    }else if($BMI<35){
        echo '<h1>The person falls under the obesity category</h1>';
    }else if($BMI<30){
        echo '<h1>The person falls under the overweight category</h1>';
    }else if($BMI<25){
        echo '<h1>The person falls under the normal category</h1>';
    }else{
        echo '<h1>The person falls under the underweight category</h1>';
    }
?>