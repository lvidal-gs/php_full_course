<?php 
error_reporting(false);

$grades = [6, 7, 2.4, 5.9, 6.3, 9.8, 1.2, 3.5, 4.8];
$finalGrades = [];

//Using a MANUAL map "method"
foreach ($grades as $grade) //Loop trough the array
{
  $finalGrades[] = round($grade); 
} 

print_r($finalGrades);
echo "<br>";

//Using the array_map()
$finalGrades2 = array_map(round, $grades);
print_r($finalGrades2);
echo "<br><br>";

//Using a MANUAL filter "method"
$onlyApproved = [];
$notApproved = [];
foreach ($grades as $grade) {
  $grade >= 6 ? $onlyApproved[] = $grade : $notApproved[] = $grade;
}

echo "Approveds: ";
print_r($onlyApproved);
echo "<br> Not approveds: ";
print_r($notApproved) . "<br>";

//Using the array_filter()
$onlyApproved2 = [];

function approved($grade) {
  return $grade >= 6;
}

echo "<br><br>";

$onlyApproved2 = array_filter($grades, approved);
print_r($onlyApproved2);



