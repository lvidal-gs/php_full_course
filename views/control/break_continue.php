<?php 

$i = 10;

for(;;){ //endless loop
  echo "$i<br>";
  $i++;
  
  if($i > 30)
    break;
}

echo "The break finished the loop!";
echo "<hr>";
for(;;) {
  $i++;
  if($i % 2 === 1)
    continue;
  
  echo "$i <br>";
 
  if($i >= 50) {
    echo "The break finished the loop!";
    break;
  }

}