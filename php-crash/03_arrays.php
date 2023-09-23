<?php
    $numbers = [1,2,3,4];
    $fruits = array('Apple','Orange');
    print_r($numbers);
    var_dump($fruits);
    echo $fruits[1];

    //associative array
    $colors = [
        1 => 'red',
        4 => 'green'
    ];
    echo $colors[4];

    $hex = [
        'blue' => '#0f0',
        'green' => '#00f'
    ];
    echo $hex['blue'];

    $multi_dimensional = [
        [
            'blue' => '#0f0',
            'green' => '#00f'],
        [
            1 => 'red',
            4 => 'green'
        ]
        ];
    echo $multi_dimensional[0]['blue'];
    var_dump(json_encode($multi_dimensional));
?>