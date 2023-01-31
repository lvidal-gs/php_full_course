<?php 
echo "Float to Int";
echo "<br>";
var_dump((int) 1.1 + 3);
echo "<br>";
echo "<br>";
echo "Int to float";
echo "<br>";
var_dump((float) 157 + 29);
echo "<br>";
echo "<br>";
echo "Boolean:";
var_dump((bool) 0);
var_dump((bool) 1);
var_dump((bool) 'false');
var_dump((bool) -1);
echo "<br>";
echo "<br>";
var_dump(intval(2.999));
echo "<br>";
var_dump((int) round(2.8));
echo("<br>");

echo("<br>");
echo "<p>Strings</p>";
echo("<br>");

echo (is_string('yes'));
echo (is_string("1" + 2));
var_dump("1" . 2);
echo("<br>");
var_dump('1' + "3.2e4" );
echo("<br>");
var_dump((int) "10.6827187");
echo("<br>");
var_dump((int) "1827.2039 five");
echo("<br>");
var_dump((int) "five 12123");
echo("<br>");
var_dump((float) "18.890");
echo("<br>");
echo("<br>");

echo "To transform a value in a BOOLEAN, use the \"!!\" symbol.";
echo("<br>");
$t1 = 0; //Transform the result to BOOL
$t2 = 1;

echo "<br>\$t1: $t1 -> Boolean: !!$t1 -> ";
echo var_dump(!!$t1);
echo "<br>\$t2: $t2 -> Boolean: !!$t2 -> ";
echo var_dump(!!$t2);



