<?php
    $age =20;

    /*if ($age >=18) {
        echo 'You are old enough to vote';
    }
    else{
        echo 'Sorry you are not old enought to vote';
    }*/

    $t = date("H");

    if ($t<12) {
        //echo 'Good Morning';
    }
    elseif ($t<17) {
        //echo 'Good afternoon';
    } else {
       //echo 'Good evening';
    }


    $posts = ['First post'];

    // if(!empty($posts))
    // {
    //     echo $posts[0];
    // }
    // else{
    //     echo 'No posts';
    // }

    // echo !empty($posts) ? $posts[0] : 'No posts';

    // $firstPost = !empty($posts) ? $posts[0] : 'No posts';
    // $firstPost = !empty($posts) ? $posts[0] : null;

    $firstPost = $posts[0] ?? null;

    // echo $firstPost;
    

    $favcolor = 'red';

    switch ($favcolor) {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';    
            break;
        case 'green':
            echo 'Your favorite color is green';    
            break;    
        default:
            echo 'Your favorite color is not red, green or blue';
            break;
    }
?>