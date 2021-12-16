<?php

class Car{

    protected $brand;
    protected $model;
    protected $color;
    protected $mileage;


    public function __construct($b, $m, $clr, $mileage = 0){
        $this->brand = $b;
        $this->model = $m;
        $this->color = $clr;
        $this->mileage = $mileage;
    }

    public function drive(){
        echo "$this->brand $this->model ($this->color, $this->mileage)I'm driving<br>";
    }

    public function addMileage($mileage){
        $error = false;
        if ($mileage > 0){
            $this->mileage += $mileage;
        } else {
            $error = true;
        }
        return [
            'error' => $error,
            'mileage' => $mileage
        ];
    }
}

$Toyota = new Car('Toyota','Camry','black');
$Audi = new Car('Audi','Q5', 'black', 15000);
$Vesta = new Car('Lada','Vesta','white');

$Toyota->drive();
$Audi->drive();

$Audi->addMileage(2000);
//$Vesta->drive();

$Toyota->drive();
$Audi->drive();

class ElectroCar extends Car{
    
    public $electroCar;
    
    public function __construct($b, $m, $clr, $mileage = 0){
        $this->electroCar = true;
        parent::__construct($b, $m, $clr, $mileage = 0);
    }


}

$res = $Vesta->addMileage(1000);
if ($res['error']){
    echo 'Не удалось увеличить пробег <br>';
} else {
    echo "Пробег увеличен. Текущий пробег: {$res['mileage']} <br>";
}

$res = $Vesta->addMileage(-1000);
if ($res['error']){
    echo 'Не удалось увеличить пробег <br>';
} else {
    echo "Пробег увеличен. Текущий пробег: {$res['mileage']} <br>";
}

