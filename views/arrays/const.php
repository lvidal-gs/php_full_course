<?php 
echo "<p>To define a const array, use the syntax: <b>\"const ARRAY_NAME\"</b></p>";

const FRUITS = ['bananas', 'apples', 'oranges'];
print_r(FRUITS);

echo "<br><br>";

echo "<p>Or you can use the \"define()\" method, like: <b>\"define(ARRAY_NAME, array('values')\"</b></p>";
echo "<br><br>";


define('CAR_BRANDS', ['Fiat', 'Nissan', 'Corvette', 'Dodge']);
print_r(CAR_BRANDS);
echo "<br><br>";


define('FURNITURES', array(
  'Smart' => [
    'Television',
    'Smartphone',
    'Kindle',
    'Smartwatch',
  ],
  'To_decorate' => [
    'Bookshelf', 
    'Cabinet',
    'Wardrobe',
    'Cupboard'
  ]
));

print_r(FURNITURES);
// FRUITS[] = 'pineapple';