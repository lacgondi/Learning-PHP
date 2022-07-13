<?php
    $numbers = [1,22,72,62,58];
    $fruits = array('apple','orange', 'pear');

    //print_r($numbers);
    //var_dump($numbers);

    //echo $fruits[1];

    //Associative array
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    //echo $colors[4];

    $hex= [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    //echo $hex['blue'];

    $person= [
        'first_name' => 'László',
        'last_name' => 'Gondi',
        'email' => 'laszlo@gmail.com'
    ];

    //echo $person['first_name'];

    $people =[
        [
            'first_name' => 'László',
            'last_name' => 'Gondi',
            'email' => 'laszlo@gmail.com'
        ],
        [
            'first_name' => 'Steve',
            'last_name' => 'Baller',
            'email' => 'he_be_ballin@gmail.com'
        ],
        [
            'first_name' => 'Walter',
            'last_name' => 'White',
            'email' => 'weneed_tocook@gmail.com'
            ]
        ];

        //echo $people[2]['email'];

        var_dump(json_encode($people));
?>
