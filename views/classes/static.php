<?

class A {
  public $noStatic = 'Object/Instance variable';
  public static $static = 'Class variable (static)';

  public function showA(){
    echo "No static: {$this->noStatic}<br>";
    
    //Attempt 1 - will thrown an error, because is a static member
      // echo "Static: {$this->static}";

    //Attempt 2 - In this type of interpolation, the "SELF" word won't be interpolated, throwing an error
      // echo "Static: {self::$static} <br>";

    //Attempt 3 - Will show the static member
      echo "Static:" . self::$static . "<br>" ;
  }

  public static function showStatic() {
    //Attempt 1 - will thrown an error
      // echo "No static: {$this->noStatic}<br>";

    //Attempt 3 - Will show the static member
    echo "Static access by function: " . self::$static . "<br>" ;

  }

}
$object = new A;
$object->showA();
echo "<br><hr>";
// $object->showStatic();    //This isn't the better form to call an static function
A::showStatic(); //This is the better form
echo "<br>";

//Can be used to show the attributes
echo A::$static, '<br>';
