<?php
    if (true) {
        $x = 5;
    }
    echo $x.'<br />';
    
    for ($i = 0; $i < 10; $i++);
    
    echo $i.'<br />';
    
    function func() {
        // echo $x; // Ошибка
        $a = 10;
        $x = 3;
    }
    
    function testGlobal() {
        /*global $x;
        $x++;
        foreach ($GLOBALS as $key => $value) {
            if (!is_array($value)) echo "$key = $value<br />";
        }
        */
        $GLOBALS['x']++;
    }
    
    function getCount() {
        static $count = 0;
        $count++;
        return $count;
    }
    
    func();
    // echo $a; // Ошибка
    echo $x.'<br />';
    testGlobal();
    echo $x.'<br />';
    
    echo getCount().'<br />';
    echo getCount().'<br />';
    echo getCount().'<br />';
?>