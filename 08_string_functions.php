<?php
    $string = 'Hello World';

    echo strlen($string);

    //Find the position of the first occurrence of a substring in a string
    echo strpos($string, 'o');

    //Find the position of the last occurrence of a substring in a string
    echo strrpos($string, 'o');

    echo strrev($string);

    echo strtolower($string);

    echo strtoupper($string);

    //Uppercase the first character of each word
    echo ucwords($string);

    echo str_replace('World', 'Everyone', $string);

    echo substr($string, 0, 5);
    //Outputs whatever is after the fifth char
    echo substr($string, 5);

    if(str_starts_with($string, 'Hello'))
    {
        echo 'YES';
    }

    if(str_ends_with($string, 'ld'))
    {
        echo 'YES';
    }

    //Convert special characters to HTML entities
    $string2 = '<script>alert(1)</script>';
    echo htmlspecialchars($string2);

    //Good for forms
    printf('%s likes to %s', 'Walt', 'cook');
    printf('1+1=%f', 1+1);
?>