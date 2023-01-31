<?php 

abstract class AbstractClass
{
  abstract public function method1();
  protected abstract function method2($param);

  public $var1;

}

abstract class AbstractSon extends AbstractClass
{
  public function method1()
  {
    echo "Executing method 1 <br>";
  }

  abstract public function method3();

}

class ConcreteClass extends AbstractSon
{
  public function method1()
  {
    return "Executing extended method 1 <br>";
    parent::method1();
  }

  protected function method2($param) {
    echo "Executing method 2 with param: $param <br>";
  }

  // public function method2($param) {
  //   echo "Executing method 2 with param: " . strtoupper($param) . "<br>";
  // }

  public function method3() {
    echo "Executing method 3 <br>";
    $this->method2('internal');
  }
}

$c = new ConcreteClass;
echo $c->method1();
//$c->method2('external'); //Is a protect method, so we cannot access externally it. But we can change it.
$c->method3();