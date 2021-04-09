<?php 

class Person{  

private $name; //this private property can only be accessed in this class 

public function setName($enterdName)
{
    $this->name = $enterdName;
}
 
public function getName()
{
    return $this->name;
}
}


$enterdName = readline("Enter Your Name Boy:");

$boy = new Person;

$boy -> setName($enterdName);

echo $boy -> getName();







 







?>