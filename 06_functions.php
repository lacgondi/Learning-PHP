<?php
    $y=10;

    function registerUser($email)
    {
        // global $y;
        // echo $y;
        // $x=10;
        echo "$email registered";
    }

    // registerUser('baller@gmail.com');

    function sum($n1=2, $n2=4)
    {
        return $n1+$n2;
    }

    $number = sum();
    // echo $number;

    $subtract = function($n1, $n2)
    {
        return $n1-$n2;
    };

    // echo $subtract(10,5);

    $multiply = fn($n1,$n2)=>$n1*$n2;

    echo $multiply(10,5);
?>