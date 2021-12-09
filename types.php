<?php

$name = 'Vyacheslav';
echo $name.' '.gettype($name).'<br>'; 
$age = 25;
echo $age.' '.gettype($age).'<br>';
$cash = 1230.50;
echo $cash.' '.gettype($cash).'<br>';
$isRain = false;
echo $isRain.' '.gettype($isRain).'<br>';
echo $notExist.' '.gettype($notExist).'<br>';

echo '<hr>';

$empty_string = '';

if ($name){
    echo '$name true <br>';
} else {
    echo '$name false <br>';
}

if ($empty_string){
    echo '$empty_string true <br>';
} else {
    echo '$empty_string false <br>';
}

$number = 6;

if ($number){
    echo '$number true <br>';
} else {
    echo '$number false <br>';
}

$zero = 0;

if ($zero){
    echo '$zero true <br>';
} else {
    echo '$zero false <br>';
}

$zero_string = '0';
if ($zero_string){
    echo '$zero_string true <br>';
} else {
    echo '$zero_string false <br>';
}

$false = false;
if ($false){
    echo '$false true <br>';
} else {
    echo '$false false <br>';
}

$null = NULL;
if ($null){
    echo '$null true <br>';
} else {
    echo '$null false <br>';
}

echo '<hr>';

if ($null == $false){
    echo '$null == $false true <br>';
} else {
    echo '$null == $false false <br>';
}

if ($null === $false){
    echo '$null === $false true <br>';
} else {
    echo '$null === $false false <br>';
}

if (0 == ''){
    echo "0 == ''  true <br>";
} else {
    echo "0 == ''  false <br>";
}

if (0 === ''){
    echo "0 === ''  true <br>";
} else {
    echo "0 === ''  false <br>";
}
echo '<hr>';

$message = "значение переменной name = $name";
echo $message;