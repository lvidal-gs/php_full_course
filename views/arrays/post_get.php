<?php
echo "<h3>To test the \$_GET method, use the browser url, passing the parameters with this syntax:</h3>
<p>exercise.php<b>?key1=val1&key2=val2&key3=val3</b></p>
<br>";

var_dump($_GET);

echo "<br><p>Using the \"print_r()\" method: </p>";

print_r($_GET);
?>

<br><br>
<p>To test the $_POST method, you'll need a form to send the data, test this method with the form below: </p>
<br>

<form action="#" method="post">
  <div>
    <label for="name">Your Name: </label>
    <input type="text" name="n" id="name">
  </div>

  <div>
    <label for="age">Your Age: </label>
    <input type="number" name="a" id="age">
  </div>

  <div>
    <label for="color">A color: </label>
    <input type="color" name="c" id="color">
  </div>

  <div>
    <label for="phone">Your phone number: </label>
    <input type="phone" name="p" id="phone">
  </div>

  <button type="submit">Send data</button>

</form>

<h3>The form result: <?php var_dump($_POST)?></h3>
