<?php 
    // $number= readline("enter a number: ");
    // // echo $number;
    // if($number%2==0){
    //     echo $number."is even";
    // }
    // else{
    //     echo $number."is odd";
    // }

    $number=array();
    for($i=1; $i<=100; $i++){
        if($i%2==0){
            $number[]= "Even numbers:".$i;
        }
        else{
            $number[]="Odd numbers:".$i;
        }
    }
    var_dump($number);
?>