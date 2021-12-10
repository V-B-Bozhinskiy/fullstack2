<?php
function repeatStr($n, $str)
{
  $output = '';
  for ($i=0;$i<$n;$i++){
    $output .= $str;
  }
  return $output;
}

echo repeatStr(6, 'I');