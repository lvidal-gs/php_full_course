<?php 

$num = 10;
echo "It's a number: <b>{$num}</b>, so let do some ops with him";
echo "<br><br>";

$num++;
echo "<b>Addition (after/post-fixed): </b> {$num}";
echo "<br>";

++$num;
echo "<b>Addition (before/pre-fixed): </b> {$num}";
echo "<br>";

$num--;
echo "<b>Decrement (after): </b> {$num}";
echo "<br>";

--$num;
echo "<b>Decrement (before): </b> {$num}";
echo "<br>";

echo "<p>Operations</p><br><br>";
$x = 3;
echo "Let's do some ops with an fixed \$x value: $x<br><br>";

$num+=$x;
echo "<b>Add X (\"\$num += x\"): </b> {$num}";
echo "<br>";

$num-=$x;
echo "<b>Decrease X (\"\$num -= x\"): </b> {$num}";
echo "<br>";

$num*=$x;
echo "<b>Mult X (\"\$num *= x\"): </b> {$num}";
echo "<br>";

$num/=$x;
echo "<b>Div X (\"\$num /= x\"): </b> {$num}";
echo "<br>";

$num%=$x;
echo "<b>Module X (\"\$num %= x\"): </b> {$num}";
echo "<br>";

$num**=$x;
echo "<b>Expo X (\"\$num **= x\"): </b> {$num}";


$num%=$x;
echo "<b>Module X (\"\$num %= x\"): </b> {$num}";
echo "<br>";

echo "<p>In-Variables conditions</p><br>";

echo "$noVal";

echo "<br><p><b>OBS.:</b> If we put \"??\" in a variable, like \"\$validation = \$abc ?? 'Default Value'\", it's possible to set a default value if the condition was not applied, like below: </p>";
$val = $noVal ?? 'Test of default';
echo $val;

echo "<br><br>If true condition: <br>";
$noVal = 'Now the variable exists!';
$val = $noVal ?? 'Test of default';
echo $val;



