<?php
    function hello() {
        echo 'hello<br />';
    }
    hello();
    hello();
    sep();
    
    function sep() {
        echo '<br />--------------------<br />';
    }
    
    function helloCount($count = 5) {
        if (!is_int($count)) {
            echo 'Ошибка в параметра, count должен быть целым!<br />';
            return;
        }
        for ($i = 0; $i < $count; $i++) hello();
        sep();
    }
    
    function summa($a, $b, $return = false) {
        if ($return) return ($a + $b);
        echo "$a + $b = ".($a + $b);
    }
    
    function getSumma($a, $b) {
        $summa = $a + $b;
        return $summa;
    }
    
    function noChange($x) {
        $x++;
    }
    
    function change(&$x) {
        $x++;
    }
    
    function summaN(...$numbers) {
        //echo gettype($numbers);
        if (count($numbers) == 0) {
            echo 'Необходимы параметры!';
            return;
        }
        $summa = 0;
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                echo 'Параметры должны быть числами!';
                return;
            }
            $summa += $number;
        }
        return $summa;
    }
    
    function sub(int $a, int $b) : int {
        return $a - $b;
    }
    
    function test($a = 1, $b = 2, $r = false) {
        if ($r) return $a + $b;
        echo $a + $b;
    }
    
    helloCount(2);
    helloCount('2');
    helloCount();
    summa(3, 4);
    echo '<br />';
    echo summa(3, 4, true);
    
    sep();
    $summa = getSumma(10, 5);
    echo $summa;
    
    sep();
    $a = 3;
    noChange($a);
    echo $a.'<br />';
    change($a);
    echo $a.'<br />';
    
    sep();
    echo summaN(3, 4, 7, '4');
    echo '<br />';
    echo summaN();
    echo '<br />';
    echo summaN(5, 7, 'asdf');
    
    sep();
    echo sub(10, 5).'<br />';
    echo sub(6.1, 5.8).'<br />';
    echo sub(true, 2).'<br />';
    echo sub('15', true).'<br />';
    // echo sub(10, [1, 2, 3]).'<br />'; // Ошибка
    
    sep();
    test(5, 7);
    echo '<br />';
    echo test(1, 2, true); // Приходилось так делать раньше
    echo '<br />';
    echo test(r: true);
    echo '<br />';
    echo test(a: 10, r: true);
?>