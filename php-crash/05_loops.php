<?php
    
    for($x = 0; $x <= 10; $x++) {
        echo $x;
    }
    $num_array = [1,2,3,4,5,6,7];
    foreach($num_array as $index => $num) {
        echo $num;
        echo $index;
    }
    $x = 1;
    while($x < 15) {
        echo 'Number ' . $x;
        $x++;
    }
        
    $x = 16;
    do {
        echo 'Number ' . $x;
        $x++;
    } while($x < 15);


    $hex = [
        'blue' => '#0f0',
        'green' => '#00f'
    ];
    foreach($hex as $index => $num) {
        echo $num;
        echo $index;
    }

?>