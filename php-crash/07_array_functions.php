<?php 
    $fruits = ['apple', 'orange', 'pear'];
    echo count($fruits);

    var_dump(in_array('apple', $fruits));

    $fruits[] = 'grape';
    array_push($fruits, 'blueberry', 'strawberry');
    array_unshift($fruits, 'mango');
    print_r($fruits);

    //takes off last value
    array_pop($fruits);
    //takes off beginning
    array_shift($fruits);
    //takes off specified
    $chunked_array = array_chunk($fruits,2);
    print_r($chunked_array);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);

    print_r($arr3);

    $combinedArray = array_combine($arr1, $arr2);
    print_r($combinedArray);

    $numbers = range(1, 20);
    print_r($numbers);

    $newNumbers = array_map(function($number){
        return "Number {$number}";
    }, $numbers);

    $sum = array_reduce($numbers, fn($carry,$number) => $carry + $number);
    var_dump($sum);

?>