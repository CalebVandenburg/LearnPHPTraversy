<?php
    $file = 'extras/users.txt';
    if(file_exists($file)) {
        echo $file;
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    }
    else {
        $handle = fopen($file, 'w');
        $contents = 'Brad' . PHP_EOL . 'Sam';
        fwrite($handle, $contents);
        fclose($handle);
    }