<?php 
  $list = [1, 2, 3, 4, 5];
  $list2 = array('a', 1, 2.3, true, 'test');

  // echo "<b>Echo:</b> $list2 <br><br>";
  echo "<b>var_dump(): </b>";
  var_dump($list2);
  echo "<br>";
  echo "<b>print_r(): </b>";
  print_r($list2);
  echo "<br>";

?>
<br><br>
<h3>Array Map:</h3><hr>

<?php 
  $data = array(
    "name" => "Lucas",
    "age" => 22,
    "pounds" =>  "160lb", 
    "height"  => 7.8,
    "nationality" => "Brazilian"  
  );

  print_r($data);

  echo '<br>' . $data["name"];
  echo '<br>' .  $data["age"];
  echo '<br><br>';

  var_dump($data); 

  echo "<br><br> To add new elements to array, only use the <b>\"\$arrayName[]\"</b> to add to the last index, or pass a specific index to substitute or to add, like:  <b>\"\$arrayName['testIndex']\"</b>";

  echo "<br><br> To count how many elements is inside the array, we use the \"count()\" method: <br> ";

  echo count($data);
?>