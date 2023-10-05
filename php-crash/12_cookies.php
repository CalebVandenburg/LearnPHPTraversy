<?php
//set cookie to expire 1 day
    setcookie('name', 'Brad', time() + 86400);
    if(isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];

    }
    //unsets cookie
    setcookie('name', '', time() - 86400);