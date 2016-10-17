<?php
class Car{
    public $color;
    public $price;
    public function setColor($c) {
        return 'Car is : '.$this->color=$c;
    }
    public function setPrice($p) {
        return '<br>The Price is : '.$this->price=$p;
    }
    
}
$nawCar = new Car();

//Call Parameter
$test = $nawCar->setColor('Red');
echo '<hr>';
echo $test;
echo $nawCar->setPrice(100000);

//call variable
echo $nawCar->color='Green';  
echo $nawCar->price=25000;