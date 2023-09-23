<?php
    $age = 20;
    if($age >= 18) {
        echo 'You are able to vote';
    }
    else {
        echo 'Sorry you are not old enough to vote';
    }
    $t = '';//date("H")'';
    if(!empty($t)) {        
        var_dump($t);
        if($t < 12) {
            echo 'Good Morning';
        }
        else if($t > 12 and $t < 24 ) {
            echo 'Good Afternoon';
        }
        else if($t == 12) {
            echo 'Good Noon';
        }
        else if($t == 24) {
            echo 'Good Midnight';
        }
    }
    else {
        echo 'Could not get hour';
    }
    echo $age >= 18 ? 'You are able to vote' : 'Sorry you are not old enough to vote';
    $fav_color = "red";
    switch($fav_color) {
        case 'red':
            echo 'red';
            break;
        case 'blue':
            echo 'blue';
            break;
        default:
            echo 'unknonw';
            break;
        
    }
?>