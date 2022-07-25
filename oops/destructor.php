<?php
class employee{
// Properties of our Class

    public $name;
    public $salary;

  //Constructor 
  function __construct($name,$salary)
  {
    $this-> name=$name;
    $this-> salary=$salary;
  }

  //Destructor

  function __destruct()
  {
    echo "i am destructing $this->name <br>";
  }
}
$farzan = new employee("farzan",4999);
$ashar = new employee("ashar",3822);
echo "The salary of farzan is $farzan->salary <br>";
echo "The salary of ashar is $ashar->salary <br>";

?>