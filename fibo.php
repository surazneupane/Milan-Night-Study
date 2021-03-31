<?php 
    // 1, 1, 2, 3, 5, 8...
    $fibo=array();  //array created
    $a=1;  // first value of fibonacci
    $b=1;  // second value
    $temp=0;  
    for($i=0; $i<20; $i++){ //series upto 20
        if($i==0|| $i==1){   //when loop runs for first two times 
            $fibo=[...$fibo, $a];  //aray ma value halxa ... is array destructuring 
        }
        else{   // loop runs for remaining series
            $temp=$a+$b;   // sum of previous two values of series
            $a=$b; // swap 
            $b=$temp;  //swap
            $fibo= [...$fibo, $b]; // adds value of b to array 
        }
    }
     // shows values 

?>