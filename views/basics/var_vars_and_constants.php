<?php

$var = "hello";
$hello = 'other';
$other = 'another';

echo "This is a variable: <b>$var</b><br>";
echo "Now this is the same, but with a \"$\", like \"\$\$var\", in front of it: <b>{$$var}, and {$$$var}</b><br>";

echo "<p>Constants</p><br>";
echo "To define a constant, we have to use de <b>define(), method.</b><br>";
echo "This method receives two params, the name of constant (without \"$\" sign) and the value.<br><br>";

echo "Let's declare a constant named: \"TEST_OF_CONSTANT\"<br><b>OBS.: 
Preferably, use only capital letters.</b><br>";
echo "Will be something like this: \"define('TEST_OF_CONSTANT', 10);\", and done. We have a constant. See it below: <br>";

define("TEST_OF_CONSTANT", 10);
echo TEST_OF_CONSTANT;

echo "<br><br>PHP has some constants, all of them are written with capital letters or has \"__\" at the beginning and end of your statement, like \"__LINE__\" (this command show the code line, \"__FILE__\" (shows the actual archive), \"__DIR__\" (shows the actual directory). See it below: <br><br>";

echo "<b>Here, in this string, we are in the <u>" . __LINE__ . "</u> code line, at the <u>" . __FILE__ . "</u> in this directory: <u>" . __DIR__ ."</u></b>";