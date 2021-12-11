<?php
function persistence(int $num): int {
  // Write your code here
  $counter = 0;
  while (strlen(strval($num)) > 1){
    $temp = 1;
    for ($i = 0; $i < strlen(strval($num)); $i++){
      $temp *= strval($num)[$i];
    }
    $counter++;
    $num = $temp;
  }
  return $counter;
}

echo persistence(39);