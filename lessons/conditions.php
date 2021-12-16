<?php
$number = 10;

if ($number > 5){
    echo "Число больше 5";
    echo '<br>';
} 
echo "Эта строка выводится всегда! <br>";

if ($number > 5){
    echo "Число больше 5";
    echo '<br>';
} else {
    echo "Число иеньше или равно 5";
    echo '<br>';
} 
echo "Эта строка выводится всегда! <br>";

if ($number > 5){
    echo "Число больше 5";
    echo '<br>';
} else if ($number > 3){
    echo "Число меньше или равно 5, но больше 3";
    echo '<br>';
} else if ($number > 0){
    echo "Либо 1, либо 2, либо 3";
    echo '<br>';
} else {
    echo "0 или отрицательное";
    echo '<br>';
}

$second_number = 0;

if ($second_number != 0){
    echo "$second_number != 0";
}