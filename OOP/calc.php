<?php

// class TwoNumber {

//     private $a;
//     private $b;

//     public function __construct($a, $b) {
//         $this->a = $a;
//         $this->b = $b;
//     }

//     public function add() {
//         return $this->a + $this->b;
//     }

//     public function multiply() {
//         return $this->a * $this->b;
//     }

//     public function divide() {
//         return $this->a / $this->b;
//     }

// }

// $a = readline('Enter First Value : ');
// $b = readline('Enter Second Value : ');

// $myNumber = new TwoNumber($a, $b);

// $n = readline('Choose Yout Operation : ');

// switch ($n) {
// case 1:
//     echo $myNumber->add();
//     break;
// case 2:
//     echo $myNumber->multiply();
//     break;
// case 3:
//     echo $myNumber->divide();
//     break;
// default:
//     echo "Invalid Number";
// }


class Math{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    public function add(){
        return $this->a+$this->b;
    }
    public function sub(){
        return $this->a-$this->b;
    }
    public function mul(){
        return $this->a*$this->b;
    }
    public function div(){
        return $this->a/$this->b;
    }
    public function remainder(){
        return $this->a%$this->b;
    }
}

$x=readline("enter first number: ");
$y=readline("enter second number: ");
$numbers= new Math($x, $y);

$n=readline("enter which operation to perform: ");
switch($n){
    case 1;
    echo $numbers->add();
    break;
    case 2;
    echo $numbers->sub();
    break;
    case 3;
    echo $numbers->mul();
    break;
    case 4;
    echo $numbers->div();
    break;
    case 5;
    echo "remainder is: ".$numbers->remainder();
    break;
    case 6;
    echo "remainder is: ".$numbers->remainder(), "\n"."addition is: ".$numbers->add(),"\n"."sub is: ".$numbers->sub(),
    "\n"."mul is: ".$numbers->mul(), "\n"."div is: ".$numbers->div();
    break;
    default;
    echo "invalid input";


}
?>