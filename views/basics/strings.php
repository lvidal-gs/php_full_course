<?php 

echo "In PHP we have two forms to show strings, the <b>echo()</b> and <b>print()</b> methods. <br><br>";

echo "-> I've been using the <b>echo</b><br>" ;
print "-> And I the <b>print</b>";
print ("<br><br>");
echo "The difference between then is the use of commas to explain two or more arguments, in <b>echo()</b> we can use commas (\" , \") and dot (\" . \") symbols to sepparate/interpolate the string. In the <b>print()</b> we can use only the dot symbol.";

echo "<h3>String Methods</h3>";

$stringToManipulate = "This is an example string, let's learn PHP!";
$otherString = "!?*AbcaBcABCabCabc";

$bigString =  "<b>\"strtoupper()\" -> To uppercase: </b>" . strtoupper($stringToManipulate) . "<br>";
$bigString .= "<b>\"strtolower()\" -> To lowercase: </b>" . strtolower($stringToManipulate) . "<br>";
$bigString .= "<b>\"ucfirst()\" -> Only the first letter: </b>" . ucfirst($stringToManipulate) . "<br>";
$bigString .= "<b>\"ucwords()\" -> Capitalize: </b>" . ucwords($stringToManipulate) . "<br>";
$bigString .= "<b>\"strlen()\" -> Count the characters of string: </b>" . strlen($stringToManipulate) . "<br>";
$bigString .= "<b>\"mb_strlen()\" -> A modern \"strlen()\" method, that can be used in words that has accents (modern encondings), showing the exact number of characters:</b>" . mb_strlen($stringToManipulate) . "<br>";
$bigString .= "<b>\"substr()\" -> Cut a part of the string from a index: </b>" . substr($stringToManipulate, 7, 11) . "<br>";

$bigString .= "<b>\"str_replace()\" -> Replace a part of string that matchs with the first param in the method: </b>" . str_replace('example', '<b>fucking awesome</b>', $stringToManipulate) . "<br>";
$bigString .= "<b>\"strlen()\" -> Count the characters of string: </b>" . strlen($stringToManipulate) . "<br>";

$bigString .= "<b>\"strpos() and derivates(stripos(), strrpos(), etc.)\" -> Find the ocurrances passsed in params and show the index (last occurance): </b>" . strpos($otherString, 'abc') . "<br>";


echo "This is a example: <u>" . $stringToManipulate . "</u><br><br>";
echo $bigString;
