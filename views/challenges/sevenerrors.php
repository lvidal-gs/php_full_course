<?php 
//Look the code below and fix it to work.


// interface Template 
// {
//   function method1();
//   public function method2($param);
// } 

// abstract class AbstractClass extends Template {
//   public function method3() {
//     echo "I'm working";
//   }
// }

// class NewClass implements AbstractClass {
//   function __construct($param)
//   {
//      
//   }
// }

// $call = NewClass 
// $call.method3(); 

interface Template
{
  function method1();
  public function method2($param);
}

abstract class AbstractClass implements Template
{
  public function method3()
  {
    echo "I'm working <br>";
  }
}

class NewClass extends AbstractClass {
  // public $param;

  function __construct($param)
  {
    // $this->param = $param;
  }
  
  public function method1()
  {
    return "Fixed! Method 1";
  }

  public function method2($param) 
  {
    return  "Fixed! Method 2 - with param -> $param";
  }
}

$call = new NewClass('Potato chips');
$call->method3();
echo $call->method2('fonfon'), '<br>';
echo $call->method1(), '<br>';