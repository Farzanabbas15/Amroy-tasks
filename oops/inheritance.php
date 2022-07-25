<?php 
    echo "What is Inheritance?<br>";
    class Employee{

        public $name = "farzan";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employee{
        private $language = "php";

        function changeLanguage($lang){
            $this->language = $lang; 
            // echo $this->grade; --> This will throw an error because grade is private in the parent class
        }
    }

    $ashar = new Employee();
    $ashar->name = "Ashar";
    $ashar->setSalary(100);
    $ashar->getSalary();
    $ashar->showName();

    $ahmed = new Employee();
    $ahmed->name = "Ahmed";
    $ahmed->setSalary(10000000);
    $ahmed->getSalary();
    $ahmed->showName();

    $saboor = new Programmer();
    $saboor->name = "saboor";
    echo $saboor->changeLanguage("Python");
    $saboor->getSalary();
    $saboor->showName();

?>