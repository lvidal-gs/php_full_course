<?php

$arrayToLoopThrough = [1, 2, [3, 4, [5]], 6, [7, [8],9, [10, 11, [12]]], 13];

function arrayLevel($array, $level = '>') {
  foreach($array as $element) {
    if(is_array($element)) {
      arrayLevel($element, $level . $level[0]);
    } else 
      echo "$level $element <br>";
  }
}

arrayLevel($arrayToLoopThrough);
arrayLevel($arrayToLoopThrough, '-');