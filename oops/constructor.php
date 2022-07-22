<?php
class employee{
// Properties of our Class

    public $name;
    public $salary;

// Methods of Our Class
// Constructor - It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated.

// Constructor without arguments
  //  function __construct(){
  //      echo "this is my constructor for empoylee  ";
  //  }

  //Constructor with arguments
  function __construct($name,$salary)
  {
    $this-> name=$name;
    $this-> salary=$salary;
  }

}
$farzan = new employee("farzan",4999);
$ashar = new employee("ashar",3822);
echo "The salary of farzan is $farzan->salary";
?>