<?php
  for($i = 0; $i <= 5; $i++) {
    echo "$i <br>";
  }

  echo "<hr>";

  for(; $i <= 10; $i++)
    echo "$i <br>";

  echo "<hr>";

  for(; $i <=15 ;) {
    echo "$i <br>";
    $i++;
  }

  echo "<hr>";
  $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

  for($cont = 0; $cont < count($days); $cont++) {
    echo "$days[$cont], ";
  }

  $days = array(1 => 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

  for($cont = 0; $cont < count($days); $cont++) {
    echo "{$days[$cont]} <br>";
  }

  echo "<hr>";
  
  echo "<h3>Multidimensional arrays</h3>";

  $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd', 'f', 'g']
  ];

  for($i = 0; $i < count($matrix); $i++) 
  { 
    for($j = 0; $j < count($matrix[$i]); $j++) 
    {
      echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
  }