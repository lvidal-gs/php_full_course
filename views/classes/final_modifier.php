<?php

abstract class AbstractClass
{
  abstract public function method1();
  
  final public function method2() 
  {
    echo "I'm a final sinalized method, and I won't be changed. <br>";
  }
}

class TestingClass extends AbstractClass
{
  public function method1()
  {
    echo "Executing method 1 <br>";
  }

  // public function method2()
  // {
  //   echo "Extending"
  // }
}

final class Unique {
  public $attr = 'I\'m inside a final class! <br>';
}

$finalMethod = new TestingClass();
$finalMethod->method1();
$finalMethod->method2();


$unique = new Unique;
echo $unique->attr;