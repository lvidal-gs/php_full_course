<p>The "foreach()" method is the most used to loop through all elements of an array,
  from first to last. It's better than the traditional "for()" and more flexible, see this behavior below:
</p>

<br>

<?php

$array = [
  'Sunday',
  'Monday',
  'Tuesday',
  'Wednesday',
  'Thursday',
  'Friday',
  'Saturday'
];

print_r($array);
echo "<br><br>";


foreach($array as $value) {
  echo "$value <br>";
}

$array = [
  1000 => 'Sunday',
  'Monday',
  'Tuesday',
  'Wednesday',
  'Thursday',
  'Friday',
  'Saturday'
];

echo "<hr>";
print_r($array);
echo "<br><br>";

foreach($array as $index => $value) {
  echo "$index => $value <br>";
}

?>

<hr>

<h3>Multidimensional arrays</h3>

<?php 
  $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd', 'f', 'g']
  ];

  foreach ($matrix as $line) 
  {
    foreach ($line as $index => $value) 
    {
      echo "$index => $value, ";
    }

    echo "<br>";
  }

?>