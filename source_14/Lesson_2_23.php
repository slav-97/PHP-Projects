<?php
    function generator1() {
        echo 1;
        yield 'a';
        echo 2;
        yield 'b';
        echo 3;
        yield 'c';
    }
    
    foreach (generator1() as $value) {
        echo " - $value<br />";
    }
    
    function generator2($from, $to) {
        for ($i = $from; $i < $to; $i++) {
            echo "$i - ";
            yield $i;
        }
    }
    
    foreach (generator2(1, 10) as $value) {
        echo 'Возведём в квадрат: '.($value ** 2).'<br />';
    }
    
    function getGenerator($arr, $callback) {
        foreach ($arr as $v) yield $callback($v);
    }
    
    $arr = [1, 2, 3, 4, 5, 6];
    $generator = getGenerator($arr, function($v) {return $v * 2;});
    
    echo gettype($generator).'<br />'; // $generator - это НЕ массив!!!
    
    foreach ($generator as $value) echo "$value ";
    
    echo '<br />';
    $generator = getGenerator($arr, fn($v) => $v * 3);
    foreach ($generator as $value) echo "$value ";
    
    function generator3($arr, $callback) {
        foreach ($arr as $k => $v) {
            yield $k => $callback($v);
        }
    }
    
    echo '<br />';
    $arr = ['Alex' => 35, 'Igor' => 18];
    $generator = generator3($arr, function($age) {return ($age < 23)? 'student' : 'worker';});
    foreach ($generator as $key => $value) {
        echo "$key - $value<br />";
    }
    
    /* Генераторы - это отличная возможность сэкономить память */
    $count = 1000000;
    $arr = [];
    for ($i = 0; $i < $count; $i++) $arr[] = $i;
    $s = 0;
    foreach ($arr as $v) $s += $v;
    echo "Result: $s<br />";
    echo memory_get_usage().'<br />';
    unset($arr);
    echo memory_get_usage().'<br />';
    
    function generator4($count) {
        for ($i = 0; $i < $count; $i++) yield $i;
    }
    $s = 0;
    foreach (generator4($count) as $v) $s += $v;
    echo "Result: $s<br />";
    echo memory_get_usage().'<br />';
?>