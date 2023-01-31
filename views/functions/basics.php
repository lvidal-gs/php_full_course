<?php

function changeValue()
{
  $x = 2;
  echo "During the function: $x<br>";
}

$x = 1;
echo "Look the \$x variable. We defined it inside and outside the function.<br><br>";

echo "Before call the function: $x<br>";
changeValue();
echo "After call the function: $x<br>";

?>
<br>

<hr>
<p>Actually, the function didn't change the value. The variable can be the same, but the scopes are different.</p>
<p>To access the variable outside the function we've to use the restricted word "<b>global</b>". See this below: </p>
<br><br>
<?php
function changeGlobalValue()
{
  global $x;
  $x = 126;
  echo "During the function: $x<br>";
}

echo "Before call the function: $x<br>";
changeGlobalValue();
echo "After call the function: $x<br>";
