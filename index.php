<?php

abstract class Product 
{
    private $price;
    private $quantity;

    abstract public function calcPrice();
    
    abstract public function calcTotalSales();
    
    public function __construct($price, $quantity) {
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getQuantity(){
        return $this->quantity;
    }
};


class RealProduct extends Product 
{
    public function calcPrice() : float
    {
        return $this->getPrice();
    }
    public function calcTotalSales() : float
    {
        return ($this->calcPrice() * $this->getQuantity());
    }
};

$real_prod = new RealProduct(100, 5);
echo "Total sales for RealProduct = ".$real_prod->calcTotalSales()."<hr>";


class DigitalProduct extends Product 
{
    public function calcPrice() : float
    {
        return ($this->getPrice() / 2);
    }
    public function calcTotalSales() : float
    {
        return ($this->calcPrice() * $this->getQuantity());
    }
};

$digital_prod = new DigitalProduct(100, 5);
echo "Total sales for DigitalProduct = ".$digital_prod->calcTotalSales()."<hr>";


class WeightProduct extends Product 
{
    public $weight; // вес в кг

    public function __construct($price, $quantity, $weight) {
        parent::__construct($price, $quantity);
        $this->weight = $weight;
    }

    public function calcPrice() : float
    {
        return ($this->getPrice() * $this->weight);
    }
    
    public function calcTotalSales() : float
    {
        return ($this->calcPrice() * $this->getQuantity());
    }
};

$weight_prod = new WeightProduct(100, 5, 1.3);
echo "Total sales for WeightProduct = ".$weight_prod->calcTotalSales()."<hr>";


/************************************/
/***   Задание 2. со звёздочкой   ***/
/************************************/

trait SingletonTrait 
{
    public static $var;
    public function __construct() { } 
    public function __clone() { }
    public function __wakeup()  { }
    public static function getInstance() 
    {
        if ( self::$var == null ) {
        self::$var = new self();
    }
        return self::$var;
    }
    public function someAction() { }   
    
}

class Singleton {
    use SingletonTrait;
}

Singleton::getInstance()->someAction(); 

?>