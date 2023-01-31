<h3>Let's see the code:</h3>
<picture>

  <img src="/assets/interfaces_ex.png">
</picture>

<?php
//Interfaces are used to define methods that have to be used in a class and how it should behave
/**
 * It's a most general concept, if you don't have a concrete idea how a
 * class should behave, use the interfaces to define a template
 */

interface Animal 
{
  function breath();
}

interface Canine 
{
  function bark(): string;
}

interface Mammal {
  function suckle(): bool;
}

//To call an interface, use the stritecd word "IMPLEMENTS"

class Dog implements Animal, Canine, Mammal
{
  public $gender;
  public $race;

  function __construct(
    $gender, 
    $race
  )
  {
    $this->gender = $gender;
    $this->race = $race;
  }

  function breath(){
    return "I'll need oxygen to survive.";
  }

  function bark():string {
    return "Woof, Woof";
  }
  
  function suckle():bool {
    return true;
  }
}

?>
<br><br>
<h3>Calling the class with the interfaces: </h3>


<?
$callAnimal = new Dog('M', 'Maltese');
echo $callAnimal->breath(), '<br>';
echo $callAnimal->bark(), '<br>';
echo $callAnimal->suckle(), '<br>';

var_dump($callAnimal);
echo "<br>";

var_dump($callAnimal instanceof Mammal);
var_dump($callAnimal instanceof Canine);
var_dump($callAnimal instanceof Dog);
var_dump($callAnimal instanceof Animal);

?>
