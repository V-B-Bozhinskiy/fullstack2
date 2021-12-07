<?php

$numbers = [1,2,3,4,5];

echo $numbers[2];
echo '<br>';

$count = count($numbers);

echo $count;
echo '<br>';

for ($i = 0; $i < $count; $i++){
    echo "$i $numbers[$i] <br>";
}

echo '<hr>';

foreach ($numbers as $key => $value){
    echo "$key : $value <br>";
}


$person = [
    'name' => 'Test',
    'age' => 25,
    'city' => 'Longon',
    'language' => 'PHP'
];

echo '<pre>';
print_r($person);

unset($person['city']);
echo '<pre>';
print_r($person);
