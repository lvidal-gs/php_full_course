<?php 
if(isset($_POST['t1']) or isset($_POST['t2'])) {
  $catch = 'Use the selects to show another result<br><br>';

  $t1 = !!$_POST['t1']; //Transform the result to BOOL
  $t2 = !!$_POST['t2'];

  $tv = '';
  $ice_cream = false;

  if($t1 && $t2)
    $tv = "50'";
  elseif($t1 XOR $t2)
    $tv = "32'";

  
  if($t1 || $t2)
    $ice_cream = true;
  

  if($tv)
    $result = "We'll buy a $tv TV. ";
  else
    $result = "We'll not buy the TV. ";
  
  $saudavel = !$ice_cream;

  if($saudavel)
    $result .= "But we're healthy.";
  else
    $result .= "Let's eat ice cream! \o/ ";
} else {
  $catch = 'Use the selects to show the first result<br><br>';
  $result = "";
}

?>

<form action="#" method="post">
  <h3><?= $catch ?></h3>
  <div>
    <label for="t1">Work 1</label>
    <select name="t1" id="t1">
      <option value="1">Was done.</option>
      <option value="0">Was not done</option>
    </select>
  </div>

  <div>
    <label for="t2">Work 2</label>
    <select name="t2" id="t2">
      <option value="1">Was done.</option>
      <option value="0">Was not done</option>
    </select>
  </div>

  <button class="exc" type="submit">Executar</button>
</form>

<?= $r = $result != '' ? $result : ''; ?>

