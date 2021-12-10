<?php
function getCount($str) {
    $vowelsCount = 0;
    // enter your magic here
    $vowels = ['a','e','i','o','u'];
    for ($i = 0; $i < strlen($str); $i++){
      if (in_array($str[$i], $vowels)){
        $vowelsCount++;
      }
    }  
    return $vowelsCount;
  }

echo getCount("fedan test");