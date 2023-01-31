<?php

define('LIMIT_VALUE', 10);
echo "Max reacheable value: <b>" . LIMIT_VALUE . "</b><br>";
$cont = 0;

echo "Current count Value: $cont";

echo "<h3>While Loop</h3><br>";

while($cont < LIMIT_VALUE) {
  echo "while $cont <br>";
  $cont++;
}

echo "<hr>";
echo "Current count Value: $cont<br>";
echo "<h3>DoWhile Loop</h3><br>";

do {
  echo "Do while count: $cont <br>";
  $cont++;
} while($cont < LIMIT_VALUE); //The expression will be executed at least once,
 
$cont = 0;
echo "<hr>";
echo "<h3>While(true) with a break</h3><br>";
while(true)
{
  echo "while $cont <br>";
  $cont++;

  if ($cont >= LIMIT_VALUE) break;

}

?>

<br><br>
<b>OBS.: </b><p>The diference between While and DoWhile is that the DoWhile loop will be executed at least once even if the condition at the end isn't true. Like we can see above</p>
