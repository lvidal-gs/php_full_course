<?php

class A
{
  public $public = 'Public attribute';
  protected $protected = "Protected attribute";
  private $private = "Private attribute";

  //The A class access all the attributes
  public function accessA() 
  {
    echo "Class A) Public: {$this->public}<br>";
    echo "Class A) Protected: {$this->protected}<br>";
    echo "Class A) Private: {$this->private}<br>";
  }

  private function dontShow() {
    echo "This won't be showed! Because i'm a private function";
  }

  protected function goToHeritage() {
    echo "<br><br>I'm function accessible only with heritage!<br><br>";
  }
}

$a = new A;

$a->accessA();

?>

<br><br>
<h3>Let's try to access the attributes outside the class, like below:</h3>
<br>
<p code>
  echo $a->public;<br>
  echo $a->protected;<br>
  echo $a->private;<br>
</p>

<p>The results:</p>

<? 
echo $a->public;

//The commented part won't be showed
// echo $a->protected;
// echo $a->private;

// $a->dontShow();

class B extends A
{
  public function showB()
  {
    echo "<br><br><br>";
    echo "Class B) Public attribute: $this->public <BR>";
    echo "Class B) Protected attribute: $this->protected <BR>";
    // echo "Class B) Private attribute: $this->private";

    parent::goToHeritage();
  }
}

$b = new B;
$b-> showB();
$b->accessA();
// $b->dontShow();

?>