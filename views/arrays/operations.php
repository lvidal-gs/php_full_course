<?php 
  $d1 = [
    'name' => 'Lucas Vidal',
    'age' =>  22,
    'weigth' => '70kg',
  ];

  $d2 = array(
    'nationality' => 'Brazilian',
    'heigth' => '173cm'
  );

  $data = $d1 + $d2;
  print_r($data);

  $data['address'] = 'New York';

  echo "<br><br>";
  print_r($data);

  echo '<br>' . is_array($data); //Return 1 if i array
  echo '<br>' . count($data); //Count the total elements in an array

  echo '<br>';

  unset($data['name']);
  print_r($data);
  echo '<br>';

  $index = array_rand($data); //Get a random index in the array
  echo "$index = $data[$index]";
  echo '<br><br>';

  unset($data);
  echo "After use \"unset()\" method: ";
  var_dump($data);
  echo '<br><br>';

  $odd = [1, 3, 5, 7, 9];
  $even = [0, 2, 4, 6, 8];

  $numbers = $even + $odd;
  echo '<br>';
  print_r($numbers);


  $numbers = array_merge($even, $odd); //Merges the arrays
  echo '<br>';
  print_r($numbers);

  sort($numbers); //Sort the array - changes the original array
  echo '<br>';
  print_r($numbers);