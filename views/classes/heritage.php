<?php 

class Person
{
  public $name;
  public $age;

  function __construct($newName, $age)
  {
    $this->name = $newName;
    $this->age = $age;
    echo "New person created! <br>";
  }

  function __destruct()
  {
    echo "Person {$this->name} died! :(  <br>";
  }

  public function welcome()
  {
    echo "{$this->name}, {$this->age} years old. <br>";
  }
}

$person1 = new Person('Lucas', 22);
$person1->welcome();

echo "<hr>";

//  SUB-CLASS   SUPER CLASS
class User extends Person
{
  public $login;

  function __construct($name, $age, $login) 
  {
    $this->name   = $name;
    $this->age    = $age;
    $this->login  = $login;
    echo "New user created!<br>";
  }

  function __destruct()
  {
    echo "User excluded! After unset the object: <br>";
    parent::__destruct();
  }

  public function welcomeUser() {
    // echo "User: {$this->login} -> {$this->name}, {$this->age} years old <br>";
    echo "@{$this->login}: ";
    parent::welcome();
  }
}
?>

<h3>Using a class heritage</h3>
<p>In this example, we created a class <b>User</b> that <b>extends</b> the class "Person" used above.</p>
<br>

<?
$user = new User('Leonardo', 32, 'leleco');
// $user->welcome();
$user->welcomeUser();
unset($user);

// $person1 = new User('Jobson', 12, 'jobisinhu');
// $person1->welcomeUser();

?>




