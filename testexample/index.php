<?php
//echo 'hello,world!';

//вывод тек.даты в ч.м.с
/* $dat = date("h:i:s");
echo $dat; */

//цикл квадрата
/* for ($i = 1; $i <= 5; $i++){
    echo ($i * $i);
} */
//echo 'hello,world!'

//получить тип переменной
//$my_var = 5.25;
//echo gettype($my_var);

//проверка наличия переменной
/*$var = 5;
/* if (isset($var)){
    echo "Переменная существует . $var";
} */

/* echo $var;
unset($var); //удаление переменной
echo $var; */

//константа pi
/* define ("pi", 3.14);
echo pi; */

//распечатка массива
/* $a = array('a' => 'apple',
    'b' => 'car',
    'c' => 'dog');
print_r($a); */

//выражения
/* $a = 5;
$b = $a;
//$a = $b = 10; */

//строка операции
/* $a = 'д\'Артаньян';
$b = " Hello";
echo $a, $b; */

//цикл if-else
/* $items = 9;
if ($items < 10) {
    echo "You get 10% discount";
} else {
    echo "You get 5% discount";
} */

//цикл while, do-while, foreach
/* $a = 0;
do {
    echo "Hello\n";
    $a++;
} while ($a < 4);
$array = [1, 2, 3, 4];

foreach ($array as $number) {
    $number *= 3;
    echo $number;
} */
//вывод массива
/* $name[0] ="Alex";
$name[1] ="Jeff";
$name[2] ="Harvey";
//echo $name[2];
for ($i = 0; $i < count($name); $i++)
    echo $name[$i]; */
//вывод ассоциативного массива
/* $name["Ivanov"] ="Alex";
$name["Fischer"] ="Jeff";
$name["Spectr"] ="Harvey";
echo $name["Ivanov"];
$number = count($name);
echo $number;
define ('masiv' ,
["ivanova" => ["name" => "ivan", "born" => "12-03-1990"]]
);
echo masiv ["ivanova"]["name"];
$first = ["first","second"];
$second = ["dog","cat"];
$all = $first + $second;
echo $all; */

//функция вывода квадрата
/* function mySqr($n) {
    return $n * $n;
}
$value = mySqr(5);
echo $value;
echo mySqr(12);
function funcCount() {
    static $count = 0; //статическая переменная
    $count++;
    echo $count;
}
for($i = 0; $i < 5; $i++)
    funcCount(); */

?>