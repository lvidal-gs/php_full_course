<?php

trait validate {
  public function validateString($str) 
  {
    return isset($str) and $str !== '';
  }
}

trait betterValidate
{
  public function validateString($str) 
  {
    return isset($str) and trim($str);
  }
}

class Test {
  use validate, betterValidate {
    betterValidate::validateString insteadOf validate;
  }
}

$conflictTest = new Test;
var_dump($conflictTest->validateString(' '));
var_dump($conflictTest->validateString('uoba'));