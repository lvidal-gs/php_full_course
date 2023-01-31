<?php

function factorial($number){
  if($number === 1)
    return 1;
  
  return $number * factorial($number - 1);
}

/**
 * factorial (5) returns -> 5 * factorial(4) --> this will be the final result, but the code do the operations in the backgrounds
 * factorial (4) returns -> 4 * factorial(3)
 * factorial (3) returns -> 3 * factorial(2)
 * factorial (2) returns -> 2 * factorial(1)
 * factorial (1) returns -> 1
 */


echo factorial(5) . "<br/>";
echo factorial(1) . "<br/>";
echo factorial(6) . "<br/>";
echo factorial(4) . "<br/>";
echo factorial(8) . "<br/>";
echo factorial(10) . "<br/>";