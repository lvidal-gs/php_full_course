<?php

use function PHPSTORM_META\map;

function sum($a) {
  return function ($b) 
    use ($a)
  
  { //Anonymous function
    return $a + $b;
  };
}

echo sum(10)(5);