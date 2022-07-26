<?php
    class Employee{
        public $name;
        public $salary;

        public function __construct($name, $salary){
            $this->name=$name;
            $this->salary =$salary;
            $this->describe();
        }

        protected function describe(){
            echo "Name of the programmer: $this->name <br>";
            //echo "language of the programmer: $this->lang <br>";
            echo "Salary of the programmer: $this->salary <br>";
        }
    }

     class Programmer extends Employee {
        public $lang="php";
        public function __construct($name, $lang, $salary){
            $this->name = $name;
            $this->lang = $lang;
            $this->salary = $salary;
            $this->describe();
        }
     }  
     $farzan = new Employee("Farzan", 3);
     $ahmed = new Programmer("Ahmed", "Python", 30000);
?>