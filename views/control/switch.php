<?php
  switch ($_POST['brand']) {
    case '1':
      $brand = 'Volvo';
      $desc = 'Medium brand';
      $price = '25.000';
      break;
    case '2':
      $brand = 'Fiat';
      $desc = 'Cheapest brand';
      $price = '12.000';
      break;
    case '3':
      $brand = 'Corvette';
      $desc = 'Fastest brand';
      $price = '48.000';
      break;
    case '4':
      $brand = 'Ferrari';
      $desc = 'Most famous brand';
      $price = '70.000';
      break;
    case '5':
      $brand = 'Mercedes';
      $desc = 'An alternative deluxe brand';
      $price = '50.000';
      break;
    default:
      $brand = 'No brand selected yet';
      $desc = "No desc";
      $price = "No price";
  }

?>

<h2>Use the form below to test the Switch/Case method: </h2>

<form action="#" method="post">
  <select name="brand">
    <option disabled selected>SELECT A BRAND</option>
    <option value="1">Volvo</option>
    <option value="2">Fiat</option>
    <option value="3">Corvette</option>
    <option value="4">Ferrari</option>
    <option value="5">Mercedes</option>
  </select>

  <input type="hidden" value="1">

  <button type="submit">Send</button>
</form>

<br><br>

<h3><?= $brand; ?></h3>
<h4><?= $desc ?> -> Price U$ <?= $price; ?></h4>
