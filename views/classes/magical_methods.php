<?php
  class Person {
    public $name;
    public $age;

    function __construct($name, $age)
    {
      $this->name = $name;
      $this->age = $age; 

      echo "Constructor created! <br>";
    }


    function __destruct()
    {
      echo "Destructor called, object unseted! <br>";
    }

    public function __toString()
    {
      return "{$this->name} is {$this->age} years old. <br>";
    }

    //^^^^ are the same thing that:
    public function toShow() 
    {
      echo $this . "<br>";
    }

    public function __get($attr) 
    {
      echo "*** Reading a non-declared attribute: {$attr}<br>";
    }

    public function __set($attr, $value) 
    {
      echo "*** Changing non-declared atribute value: $attr to $value<br>";
    }

    public function __call($method, $params) 
    {
      echo "*** Trying to acces $method method";
      
      if(isset($params) AND $params != '') {
        echo "with the following parameters: ";
        print_r($params);
        echo "...<br>";
      } else
        echo "...<br>";
    }
  }

  $person1 = new Person("Lucas", 23);
  echo $person1 . "<br/>"; //CALL THE __toString METHOD
  $person2 = new Person('Victor', 24);
  echo $person2->toShow() . "<br>"; //CALL THE __toString METHOD

  $person2 -> completeName = "Jobson"; //CALL THE _set METHOD
  $person1 -> completeName; //CALL THE __get METHOD
  $person2 -> name;

  $person2 -> changeName(1, 2, 6, [1,2,3]); //CALL THE __call METHOD

  $person1 = NULL;
  unset($person2);
?>
<br><br>

To understand more about the magic methods <a href="https://www.php.net/manual/en/language.oop5.magic.php" target="_blank">click here</a> and go to the PHP documentation