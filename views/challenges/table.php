<h3>Generate a html table using only PHP</h3>

<?php

$matrix = [
  ["01", "02", "03", "04", "05",],
  ["06", "07", "08", "09", "10",],
  ["11", "12", "13", "14", "15",],
  ["16", "17", "18", "19", "20",],
  ["21", "22", "23", "24", "25",],
  ["21", "22", "23", "24", "25",],
  ["21", "22", "23", "24", "25",]
];

?>
<table>
  <tbody>

<?php
foreach($matrix as $i_line => $line) 
{

  $style = $i_line % 2 === 1 ? "colorize" : '';

  echo "<tr $style>";

  foreach($line as $value)
  {
    echo "<td>$value</td>";
  }

  echo "</tr>";
}
?>

  </tbody>
</table>

<style>
  [colorize] {
    background-color: greenyellow;
  }

  table {
    border: 1px solid #444;
    margin: 20px 0;
    border-collapse: collapse;
  }

  table tr {
    border: 1px solid #444;
  }

  table td {
    padding: 10px 20px;
  }
</style>