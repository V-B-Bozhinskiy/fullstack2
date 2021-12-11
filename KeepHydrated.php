<?php
function litres($t) {
  $waterDrunk = $t * 0.5;
  return floor($waterDrunk);
}

echo litres(11.8);