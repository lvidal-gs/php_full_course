<?php

function sum($number) {
  //The control will be the0 $number;
  $sum = 0;
  for(; $number >= 1; $number--) {
    $sum = $sum + $number; //$sum += $number
    
  } 
  
  return $sum;
}

echo sum(5). "</br>";

function recursiveSum($number) {
  //Stop condition
  if ($number === 1) return 1;

  return $number + recursiveSum($number - 1);
}

echo recursiveSum(10). "<br>";

function economicRecursive($number) {
  return $number === 1 ? 1 : $number + economicRecursive($number - 1);
}

echo economicRecursive(28). "<br/>";