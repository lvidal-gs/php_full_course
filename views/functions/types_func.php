<?php 

error_reporting(0);

function sum($a, $b) 
{
  echo "Summing $a + $b = ";
  return $a + $b;
}

function sum2(int $a, int $b ) {
  echo "Summing $a + $b = ";
  return $a + $b;
}

function sum3($a, $b ): int {
  echo "Summing $a + $b = ";
  return $a + $b;
}

function sum4(float $a, float $b ): bool {
  echo "Summing $a + $b = ";
  return $a + $b;
}
?>

<h3>Calling a normal parameted function: </h3>
<?= sum(2, 3), "<br>" ?>
<?= sum(10, 2.8), "<br>" ?>
<?= sum(2, '1three'), "<br>" ?>

<br><hr>

<h3>Calling a typed parameters function: </h3>
<p>This will type the function's params, like decimals, float, etc.</p>
<?= sum2(2, 3), "<br>" ?>
<?= sum2(10, 2.8), "<br>" ?>
<?= sum2(2, '1three'), "<br>" ?>

<br><hr>

<h3>Calling a typed returned function: </h3>
<p>This will type the function's return, like decimals, float, etc.</p>
<?= sum3(2, 3), "<br>" ?>
<?= sum3(10, 2.8), "<br>" ?>
<?= sum3(2, '1three'), "<br>" ?>

<br><hr>

<h3>Calling a both typed function: </h3>
<?= sum4(2, 3), "<br>" ?>
<?= sum4(10, 2.8), "<br>" ?>
<?= sum4(2, '1three'), "<br>" ?>