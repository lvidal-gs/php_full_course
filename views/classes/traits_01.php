<?php

trait validate 
{
  private $test = 'Hello!';

  public function validateString($str) 
  {
    return isset($str) and $str !== '';
  }
}


trait betterValidate
{
  public function betterValidateString($str) 
  {
    return isset($str) and trim($str);
  }
}

// class TestPrivate {
//   private $test = 'Hello!';
// }

class UserTest //extends TestPrivate
{
  use validate, betterValidate; 

  public function printValue() 
  {
    echo '<br>', $this->test;
  }
}

$newUser = new UserTest;
var_dump($newUser->validateString(' '));
var_dump($newUser->betterValidateString(' '));
echo $newUser->printValue();
