<?php 

class Person {
  public $name;
  public $age;
  public $nation;

  function __construct(
    $nome,
    $idade, 
    $nacionalidade
  )
  {
    $this->name = $nome;
    $this->age = $idade;
    $this->nation= $nacionalidade;
  }

  function __destruct()
  {
    echo "Object died";
  }

  function showPersonData() {
    $d = "The class called: {$this->name}, {$this->age} years old, that was born in {$this->nation}.";
    return $d;
  }
}


$person1 = new Person('Lucas Vidal', 22, 'Brazil');
$person2 = new Person('Mauri Vidal', 55, 'Brazil');
$person3 = new Person('1', 'null', -9999);

?>

<p>We have this 2 main methods, <b>__construct()</b> and <b>__destruct</b>.</p><br><br>

<h3>First test -> show Person 1</h3>
<p><?= $person1->showPersonData() ?></p>

<br><br>

<h3>Second test -> show Person 2 and destroy it</h3>
<p><?= $person2->showPersonData(); ?></p>
<p><?php unset($person2); ?></p>
<b>OBS.: If we call the same object above, will be returned that "$person2" doesn't exists.</b>

<br><br>

<h3>Third Test -> Show random data</h3>
<p><?= $person3->showPersonData()?></p>
<br>
<p>Depending how class is working, will be good to the app security to set some fixed types and do some validations inside the class.</p>