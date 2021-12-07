<?php

$number = 1;
while ($number < 10) {
    echo $number . '<br>';
    $number++;
}

echo '<select>';
echo '<option selected disabled>--Выберите значение--</option>';
for ($i = 1; $i < 10; $i++){
    echo '<option>'.$i.'</option>';
}
echo '</select>';

echo '<hr>';

for ($f = -50; $f < 51; $f++){
    $c = ($f - 32) * 5/9 ;
    echo $f.'='.$c;
    echo '<br>';
}
?>

