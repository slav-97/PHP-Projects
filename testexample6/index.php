<?php
//Классы и объекты ооп
/*Class ShoppingCard {

}

$product1 = new ShoppingCard();
$product2 = new ShoppingCard();
$product3 = new ShoppingCard();
var_dump($product1 instanceof ShoppingCard);
var_dump($product2 instanceof Card);
var_dump($product3);*/

//
/*Class Shop{
    Private $name;
    Public function naming() {
    $this -> name = "Adidas";
    echo $this ->name;
    }
}*/

//$product = new Shop;
//$product->naming();
//$product-> name = "Nike";

//свойство класса и область видимости
//class User
//{
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емэйл";
//    public $city = "Город";
//}
//
//$admin = New User();
//$user1 = New User();
//
//$admin->name = "Alexey";
//$user1->name = "Andrey";
//
//echo $admin->name;
//echo $user1->name;

//Методы класса и функции
//class User
//{
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емэйл";
//    public $city = "Город";
//
////    public function Hello() {
////        //echo 'Hello';
////        echo "Hello {$this->name}";
////    }
//function getInfo() {
//    return "{$this->name}". "{$this->surname}";
//}
//}
//$admin = New User();
//$admin->name="Alexey";
//$admin->surname="Ivanov";
////$admin->Hello();
//echo "Пользователь: {$admin->getInfo()}";

//Конструкторы и деструкторы
//class User
//{
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емэйл";
//    public $city = "Город";
//
//    function __construct($name,$password,$email,$city)
//    {
//        $this->name = $name;
//        $this->password = $password;
//        $this->email = $email;
//        $this->city = $city;
//    }
//    function getInfo() {
//        return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
//    }
//}
//$user1 = new User("Alex","123456","alexey@gmail.com","Kiev");
////var_dump($user1);
//echo $user1->getInfo();
//
//class DestrctableClass{
//    function __construct()
//    {
//        print "Конструктор";
//        $this->name ="DestrctableClass";
//    }
//    function __destruct(){
//        print "Уничтожение". $this->name;
//    }
//}
//$obj = new DestrctableClass();

//$this
//class User
//{
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емэйл";
//    public $city = "Город";

//    public function getName() {
//        echo $this->name;
//        $this->test();
//    }
//    public function Test() {
//        echo 'Test';
//    }

//$user1 = new User();
//$user1->name = "Alexey";
//$user1->getName();
//
//$user2 = new User();
//$user2->name = "Ivan";
//$user2->getName();

//self
//    private static $name;
//
//    public static function SetName($name1)
//    {
//        self::$name = $name1;
//    }
//
//    public static function GetName()
//    {
//        return self::$name;
//    }
//}
//User::SetName('Ivan');
//echo User::GetName();

//Наследование
//class User
//{
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емэйл";
//    public $city = "Город";
//
//    function __construct($name,$password,$email,$city)
//    {
//        $this->name = $name;
//        $this->password = $password;
//        $this->email = $email;
//        $this->city = $city;
//    }
//    function getInfo() {
//        $information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
//        return $information;
//    }
//}
//$user1 = new User("Alex","123456","alexey@gmail.com","Kiev");
////var_dump($user1);
////echo $user1->getInfo();
//
//class Moderator extends User{
//    public $info;
//    public $rights;
//
//    function __construct($name, $password, $email, $city, $info, $rights)
//    {
//        parent::__construct($name, $password, $email, $city);
//        $this->info = $info;
//        $this->rights = $rights;
//    }
//    function getInfo() {
//        $information = parent::getInfo();
//        $information .= "{$this->info}"."{$this->rights}";
//        return $information;
//    }
//}
//$moder = new Moderator("Andrey","654321","andrey@gmail.com","Odessa","Moderator","True");
//echo $moder->getInfo();

//class Test {
//    protected $info;
//}
//class Test2 extends Test{
//   public function test() {
//       $this->info = "Info";
//       echo $this->info;
//   }
//}
//$test2 = new Test2();
//$test2->test();
//$test2->info="information";

//Полиморфизм
//class Base {
//    function funct() {
//        echo "<h2>Функция базового класса</h2>";
//    }
//    function base_funct() {
//        $this->funct();
//    }
//}
//
//class Derivative extends Base {
//    function funct() {
//        echo "<h3>Функция производного класса</h3>";
//    }
//}
//
//$b = new Base();
//$d = new Derivative();
//
//$b->base_funct();
//$d->funct();
//$d->base_funct();
// Скрипт выводит:

// Функция базового класса
// Функция производного класса
// Функция производного класса

//Статические свойства и методы
//class user {
//    public static $name;
//
//    public static function hello() {
//       echo "Hello".self::$name." ";
//    }
//}
//user::$name="Alexey";
//echo user::$name;
//user::hello();

//Константы и пост.св-ва
//class user {
//    const SOME_CONST = 314;
//}
//echo user::SOME_CONST;

//Абстрактные классы
//abstract class User {
//    public $name;
//    public $status;
//
//    abstract public function getStatus();
//}
//class Admin extends User {
//    public function getStatus(){
//        echo "Admin";
//    }
//}
////$user2 = new User;
//$user1 = new Admin;
//$user1->getStatus();

//Интерфейсы
//interface FirstInterface {
//    public function getName();
//}
//interface SecondInterface {
//    public function getStatus();
//}
//interface ThirdInterface extends FirstInterface, SecondInterface {
//
//}
//class Test implements FirstInterface, SecondInterface{
//    public $name = "Alexey";
//    public $status = "Admin";
//    public function getName() {
//        echo $this->name;
//    }
//    public function getStatus() {
//        echo $this->status;
//    }
//}
//$user1 = new Test;
//$user1->getStatus();
//$user1->getName();

//Трейты
//class Base {
//    public function sayHello() {
//        echo "Hello";
//    }
//}
//trait Hello {
//    public function sayHello() {
//        echo "Hello";
//    }
//}
//trait World {
//    public function sayWorld() {
//        echo "World";
//    }
//}
////trait sayWorld {
////    public function sayHello() {
////        parent::sayHello();
////        echo "World";
////    }
////}
////class myHelloWorld extends Base {
////    use sayWorld;
////}
//class myHelloWorld {
//    use Hello,World;
//}
//$obj = new myHelloWorld();
//$obj->sayHello();
//$obj->sayWorld();

//get set clone
//class User {
//
//    private $name;
//    private $city;
//    private $id;
//
//    function __construct($name,$city)
//    {
//        $this->name = $name;
//        $this->city = $city;
//    }
//    function setId($id) {
//        $this->id=$id;
//    }
//
//    public function __clone() {
//        //echo "Cloned";
//        $this->id = 0;
//    }
//}
////$obj = new User;
////$obj2 = clone $obj;
//$user1 = new User("Alexey","Kiev");
//$user1->setId(5662);
//$user2 = clone $user1;
//var_dump($user1);

//class Gtst {
//    private $number = 1;
//
//    public function __get($name) {
//        echo "You get {$name}";
//    }
//    public function __set($name,$val) {
//        echo "You set {$name} to {$val}";
//    }
//}
//$obj = new Gtst();
//echo $obj->number;
//echo $obj->number = 689;

//пространства имен
//namespace Home;
//class User
//{
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емэйл";
//    public $city = "Город";
//
//    function __construct($name,$password,$email,$city)
//    {
//        $this->name = $name;
//        $this->password = $password;
//        $this->email = $email;
//        $this->city = $city;
//    }
//    function getInfo() {
//        $information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
//        return $information;
//    }
//}
//$user1 = new User("Alex","123456","alexey@gmail.com","Kiev");
////var_dump($user1);
//echo $user1->getInfo();

//Обработка ошибок
//require_once 'file.txt';

//Исключения

//$file ='namespace.php';
//
//try{
//    if(!file_exists($file)) {
//        throw new Exception('File not found');
//    }
//} catch (Exception $e) {
//    echo$e->getMessage();
//}
?>