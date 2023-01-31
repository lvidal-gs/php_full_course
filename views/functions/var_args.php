<h3>Look at the code for understand the "var args" symbol -> "<b>...</b>"</h3>

<p>This operand is responsible for showing that there will be more arguments to be passed instead of just one.</p>
<?php 

function sum ($a, $b) 
{
  return ($a+$b);
}

echo sum(1, 6, 9, 10), '<br>';

function completeSum(...$nums)
{
  $sum = 0;

  foreach($nums as $num) {
    $sum += $num;
  }

  return $sum;
  // print_r($nums);
}

echo completeSum(2,4,5,12,34,1,22);

$array = [1, 5, 8, 9, 10];
 echo '<br>';
// echo completeSum($array); //this will thrown an error
echo completeSum(...$array);

?>
<br><br>
<hr>
<h3>Two or more params in a function that has a variadic expression</h3>
<p><b>OBS.:</b> Notice that only the last param can be variable!</p>
<?php

function playingWithVarArgs($a, $b, ...$multi) {
  echo "<br><br>";
  echo "This is the first param: $a <br>";
  echo "This is the second param: $b <br>";
  echo "This is the third param (var_args): ";
  print_r($multi);
  echo "<br>";
}


playingWithVarArgs(3, 10, 20, 12, 32);
?> 

<br><br>
<hr>
<h3>Arrays behavior</h3>
<p>Notice that we have this array: </p>
<?php
// $testArray = array(
//   "test" => 'content',
//   "test2" => 'content2',
//   "test3" => 'content3',
//   "test4" => 'content4'
// );

$testArray = array(1,2,3,4,5);

print_r($testArray);

playingWithVarArgs('test', 12.5, $testArray);
echo "<b>^^^^ Function called with the third param being an array, but without the \"...\" operator ^^^^</b>";

?>
<br><br>
<p>The result is an array inside of array, this behavior can be not exepcted for the application, so we have to use the "..." operator to loop through the array. The result will be as follows: </p><br>

<p><b>Caution: </b> We cannot unpack array with string keys, like $var = array ('key' => 'value'). The browser will thrown an error.</p>

<?php 

playingWithVarArgs('test 2', TRUE, ...$testArray);
echo "<b>^^^^ Function called with the third param being an array with \"...\" operator ^^^^</b>";


