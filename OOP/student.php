<?php 
    class Student{
        private $rollNumber;
        private $phoneNumber;
        public $address;
        public $name;

        public function detail($roll, $phone){
            $this->rollNumber= $roll;
            $this->phoneNumber= $phone;
        }
    }
    $personName=readline("enter your name: ");
    $location=readline("enter the address: ");
    $roll=readline("enter rollnumber: ");
    $phone=readline("enter phone number: ");

    $sam= new Student();
    $john= new Student();
    $sam->name=$personName;
    $sam->address=$location;
    $sam->detail($roll, $phone);
    var_dump($sam);
?>