<?php
    $name = 'Brad';
    echo $name;
    $age = 40;
    echo $age;
    $has_kids = true;
    echo $has_kids;
    echo var_dump($has_kids);
    $cash_on_hand = 20.75;
    var_dump($cash_on_hand);
    echo $name . ' is ' . $age;
    echo "{$name} is {$age}";
    echo '5' + '5';

    define('HOST', 'localhost');
    define('DB_Name', 'dev_db')
?>