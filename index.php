<?php

class Product 
{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $category;
    public $brand;
    public $rating;

    public function __construct($id, $name, $price, $quantity, $category, $brand, $rating)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
        $this->brand = $brand;
        $this->rating = $rating;
    }

    public function addtocart() {
        // функция добавления товара в корзину
    }
    
    public function removefromcart() {
        // функция добавления товара в корзину
    }

    public function setrpomotion() {
        // функция добавления товара в акцию
    }

}

class Smartphone extends Product
{
    private $os;
    private $ram;
    private $rom;
    private $processor;
    private $screensize;

    public function __construct($id, $name, $price, $quantity, $category, $brand, $rating, 
                                $os = null, $ram, $rom, $processor, $screensize)
    {
        parent::__construct($id, $name, $price, $quantity, $category, $brand, $rating);
        $this->os = $os;
        $this->ram = $ram;
        $this->rom = $rom;
        $this->processor = $processor;
        $this->screensize = $screensize;
    }
}

// Задание 5.1

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

$a1 = new A(); // ничего, т.к. мы просто объявили объект класса, не вызвав функции
$a2 = new A(); // ничего, т.к. мы просто объявили объект класса, не вызвав функции
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4
// происходит так потому что переменная $x, относящаяся к методу foo(), является static 
// а static относится к классу, а у нас объекты являются экземплярами одного и того же класса

// Задание 5.2

class AA {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class BB extends AA {
}
$aa1 = new AA(); // ничего, т.к. мы просто объявили объект класса, не вызвав функции
$bb1 = new BB(); // ничего, т.к. мы просто объявили объект класса, не вызвав функции
$aa1->foo(); // 1
$bb1->foo(); // 1
$aa1->foo(); // 2
$bb1->foo(); // 2
// происходит так потому что переменная $x, относящаяся к методу foo(), является static 
// а static относится к классу, а у нас классы разные

var_dump($a1);
echo '<br>';echo '<br>';echo '<br>';echo '<br>';

// Задание 6 - такое же как и задание 5, но разница лишь в объявлении экземпляра класса $a1 = new A(); и $a1 = new A;
// учитывая, что у класса нет состояния (переменных), то это задание ничем не отличается от задания 5.2
// результат будет такой же 1 1 2 2;

?>