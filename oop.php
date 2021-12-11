<?php

class Car{

    public $brand;
    public $model;
    protected $color;


    public function __construct($b, $m, $clr){
        $this->brand = $b;
        $this->model = $m;
        $this->color = $clr;
    }

    public function drive(){
        echo "$this->brand $this->model ($this->color)I'm driving<br>";
    }

}

$Toyota = new Car('Toyota','Camry','black');
$Audi = new Car('Audi','Q5', 'black');
$Vesta = new Car('Lada','Vesta','white');

$Toyota->drive();
$Audi->drive();
//$Vesta->drive();