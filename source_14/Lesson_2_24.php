<?php
    $arr = [1, 3, 5, 7];
    print_r($arr);
    echo '<br />';
    //foreach ($arr as $v) echo $v.' ';
    $arr = [
        [
            'key_1' => 1,
            'key_2' => 2
        ],
        [
            'key_1' => 3,
            'key_2' => 4
        ],
        [
            'key_1' => 5,
            'key_2' => 6
        ]
    ];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    
    $r = print_r($arr, true);
    echo $r;
    
    var_dump($arr, 5, true);
    
    echo '<br />';
    var_export($arr);
    
    echo '<br />';
    $numbers = array ( 0 => array ( 'key_1' => 1, 'key_2' => 2, ), 1 => array ( 'key_1' => 3, 'key_2' => 4, ), 2 => array ( 'key_1' => 5, 'key_2' => 6, ), );
    print_r($numbers);
?>