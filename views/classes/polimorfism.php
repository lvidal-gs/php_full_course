<?php

abstract class Food {
  public $peso;

  function __construct($weigth) {
    $this->peso = $weigth;
  }
}

class Rice extends Food { }
class Beans extends Food { }
class Chicken extends Food { }

class Person {
  public $weigth;

  function __construct($weigth)
  {
    $this->weigth = $weigth;
  }

  public function toEat(Food $food)
  {
    $this->weigth += $food->peso;
  }
}

$f1 = new Rice(0.55);
$f2 = new Beans(.25);
$f3 = new Chicken(.150);

$p = new Person(66.7);

echo $p->weigth, "<br>";
$p->toEat($f1);
$p->toEat($f2);
$p->toEat($f3);
echo $p->weigth, "<br>";