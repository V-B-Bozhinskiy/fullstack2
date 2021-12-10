<?php
function solution($str) {
  $output = '';// Your code here
  $inputLength = strlen($str);
  for ($i = 0; $i <= $inputLength; $i++){
    $output .= $str[$inputLength - $i];
  }
  return $output;
}

echo solution('Hello');