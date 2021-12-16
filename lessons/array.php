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

echo '<hr>';

$colors = ['red','green', 'blue'];

$numbers = [1,4,5,3,5,4,2];
print_r($numbers);

sort($numbers);
print_r($numbers);

echo '<br>';
rsort($numbers);
print_r($numbers);

echo '<br>';


$persons = [
    [
        'name' => 'Rail',
        'age' => 28,
        'city' => 'London'
    ],
    [
        'name' => 'Jhon',
        'age' => 20,
        'city' => 'Madrid'
    ],
    [
        'name' => 'Petr',
        'age' => 35,
        'city' => 'Kazan'
    ]
    ];
print_r($persons);

function sortByAge($a, $b){
    if ($a['age'] > $b['age']){
        return 1;
    } else if ($a['age'] < $b['age']){
        return -1;
    } else {
        return 0;
    }
}

usort($persons, 'sortByAge');

print_r($persons);

function sortByCity ($a, $b){
    if ($a['city'] > $b['city']){
        return 1;
    } else if ($a['city'] < $b['city']){
        return -1;
    } else {
        return 0;
    }
}

usort($persons, 'sortByCity');

print_r($persons);

echo '<hr>';

$numberOne = 100;
$numberTwo = 15;

echo $numberOne<=>$numberTwo;
echo '<br>';

$names = array_column($persons, 'name');
print_r($names);

array_multisort($names,SORT_DESC,$persons);
print_r($persons);

$keys = array_keys($person);
print_r($keys);

$values = array_values($person);
print_r($values);

echo '<hr>';