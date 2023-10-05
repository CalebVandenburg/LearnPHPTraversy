<?php
    function registerUser($email) {
        echo $email . " User registered";
    }

    function sum($n1 = 1, $n2 = 2) {
        return $n1 + $n2;
    }
    registerUser("test@mail.com");
    $num = sum(5,5);
    echo $num;
    $num = sum();
    echo $num;

    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo $multiply(4,5);
?>