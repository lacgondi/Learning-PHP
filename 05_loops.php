<?php

// for ($i=0; $i <= 10; $i++) { 
//     echo 'Number ' . $i .'<br>';
// }

$x=1;

// while ($x<=15) {
//     echo 'Number '. $x. '<br>';
//     $x+=1;
// }

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x<=5);

$posts= ['First post', 'Second post', 'Third post'];

// for ($i=0; $i < count($posts); $i++) { 
//     echo $posts[$i].'<br>';
// }

// foreach ($posts as $post) {
//     echo $post;
// }


// foreach ($posts as $index => $post) {
//     echo $index .'-'. $post.'<br>';
// }

$person = [
    'first_name'=>'László',
    'last_name'=>'Gondi',
    'email'=>'laszlo@gmail.com'
];

foreach ($person as $key => $value) {
    echo "$key - $value<br>";
}










?>