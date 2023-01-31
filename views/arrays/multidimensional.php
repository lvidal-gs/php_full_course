<?php 
$data = [
  [
    "name" => "Lucas",
    "age" => 22,
    "city" => "SP"
  ], 
  [
    "name" => "Victor",
    "age" => 24,
    "city" => "SP"
  ], 
];

echo "<b>Array 1: </b>";
print_r($data);

echo "<br><br>";

$data[] = [
  "name" => "Jobson",
  "age" => 28,
  "city" => "PE"
];

echo "<b>Array 2: </b>";
print_r($data);

echo "<br><br>";

$data[0]["civil_state"] = [
  "marital_status" => "Single",
  "spouse" => ''
];

echo "<b>Array 3: </b>";
print_r($data);

echo "<br><br>";

echo "<p>After use the unset() method for some index</p>
<br><b>Array 4: </b>";

unset($data[2]);
unset($data[0]["age"]);

print_r($data);

