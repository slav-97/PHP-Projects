<?php
    $x = -5;
    switch (gettype($x)) {
        case 'string':
            $result = 'x - это строка';
            break;
        case 'integer':
            $result = 'x - это целое число';
            break;
        case 'boolean':
            $result = 'x - это булевский тип';
            break;
        default:
            $result = 'x - это неизвестный тип';
    }
    echo $result.'<br />';
    $x = false;
    $result = match(gettype($x)) {
        'string' => 'x - это строка',
        'integer' => 'x - это целое число',
        'boolean' => 'x - это булевский тип',
        default => 'x - это неизвестный тип'
    };
    echo $result.'<br />';
    
    if (5 > 0) $a = 10;
    else $a = 15;
    
    $a = (5 > 0)? 10 : 15;
    
    switch ('1') {
        case 1:
            echo '1';
            break;
        default:
            echo '0';
    }
    echo '<br />';
    echo match('1') {
        1 => '1',
        default => '0'
    }
?>