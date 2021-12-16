<?php

function sayHello(){
    echo 'Hello<br>';
}

sayHello();
sayHello();
sayHello();

function printPlusOne($a){
    echo ++$a.'<br>';
}

printPlusOne(55);

function multiply($a,$b){
    echo $a * $b . '<br>';
}

function sumNumbers($a, $b, $c = 0){
    echo $a + $b + $c. '<br>';
}

multiply(10, 5);

function returnSumOfNumbers($a, $b, $c = 0){
    return $a + $b + $c;
}

sumNumbers(1,2,3);
sumNumbers(2,3);

$result = returnSumOfNumbers(4,6,3);

echo 'Результат: '.$result;

