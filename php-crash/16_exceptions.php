<?php
    function inverse($x) {
        if(!$x) {
            throw new Exception('Division by 0');
        }
        return 1/$x;
    }

    try {

        echo inverse(1);
        echo inverse(0);
    }
    catch(Exception $e){
        echo 'Caught';
        echo $e->getMessage();
    }
?>