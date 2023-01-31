<?php

$sum = function ($a, $b) {
  return $a + $b;
};

$sub = function ($a, $b) {
  return $a - $b;
};

$mult = function ($a, $b) {
  return $a * $b;
};

$div = function ($a, $b) {
  return $a / $b;
};

// echo $sum(10, 5);

/**
 * @param int $numA Sets a operand.
 * @param int $numB Sets a operand.
 * @param string $operation Sets an operator, only for view.
 * @param function $function Sets a function that will be used to do the operation.
 * @return result Returns a string that show the operation, the operator and the result. 
 */

function execute($numA, $numB, $operation, $function ){
  $result = $function($numA, $numB);
  echo "{$numA} {$operation} {$numB} = $result<br>";
}

execute('10', 5, '+', $sum);
execute('10', 5, '-', $sub);
execute('10', 5, '*', $mult);
execute('10', 5, '/', $div);

?>

<br>
<h3><b>ADVICE:</b> See the source code to understand the anonymous function operations. </h3>