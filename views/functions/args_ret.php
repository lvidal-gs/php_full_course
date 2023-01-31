<?php 

function getMessage() {
  return 'Seja bem-vindo(a)';
}

getMessage();

?>
<h3>Returns</h3>
<p>In this exercise we have the following code: </p>

<p code>
function getMessage() { 
  return 'Seja bem-vindo(a)'; 
} 

getMessage();
</p>

<p>Look that the browse didn't show nothing, because the stricted word "<b>return</b>" doesn't show anything in the browser. To show the result we have to call the <b>echo</b> method:</p>

<p code>
function getMessage() { 
  return 'Seja bem-vindo(a)'; 
} 

echo getMessage();
</p>

<?php echo getMessage(); ?>
<br>

<p>Or you can associate the return in a variable, like: </p>

<p code>
$message = getMessage();

echo $message;
</p>

<?= $message = getMessage(); ?>

<p>Or you can associate to a <b>var_dump()</b></p>

<p code>
var_dump(getMessage());
</p>

<?php var_dump(getMessage()); ?>

<hr>
<br>

<h3>Parameters and Returns</h3>
<p>Let see the following code: </p>
<br>

<p code>
  function showName($name) {
    return "Hello, my name is {$name}";
  }
</p>

<p>Calling these methods and showing in the browser with an <b>echo</b> method, we can see some results, like: </p>

<?php 
  function showName($name) {
    return "Hello, my name is {$name}! <br>";
  }

  echo showName('Lucas Vidal');
  echo showName('Jobsu da Luz');
?>

<br>

<p>Using the learned concepts in other classes, we can see that the variable value cannot be changed in a function, right? So let see how we can access the variable reference and not a copy of it: </p> <br><br>

<p code> $var = 1; </p>
<p code>
  function newValue(&$a, $newValue) {
    $a = $newValue;
    return "Without the reference symbol: $a";
  }</p>

<p code>
  function realNewValue(&$a, $newValue) {
    $a = $newValue;
    return "With the reference symbol: $a <br>";
  }
</p>
<br><br>
<p>Calling the functions and showing the results, we have this: </p>
<?php 
  $var = 1;

  function newValue($a, $newValue) {
    $a = $newValue;
    return "Without the reference symbol: $a <br>";
  }

  function realNewValue(&$a, $newValue) {
    $a = $newValue;
    return "With the reference symbol: $a <br>";
  }

  echo "Before call the <b>newValue()</b> method: $var <br>";
  echo newValue($var, 5);
  echo "After call the <b>newValue()</b> method: $var <br>";

  echo '<br>';

  echo "Before call the <b>realNewValue()</b> method: $var <br>";
  echo realNewValue($var, 12);
  echo "After call the <b>realNewValue()</b> method: $var <br>";

?>