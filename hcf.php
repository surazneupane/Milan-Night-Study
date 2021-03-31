<?php 

    $first_number = readline("Enter 1st Number : ");
    $second_number = readline("Enter 2nd Number : ");

   do{
       $reminder = $first_number % $second_number;
       if($reminder == 0)
       {
           $hcf = $second_number;
       }
       else{
           $first_number = $second_number;
           $second_number = $reminder;
       }
   }
   while($reminder !=0);
  
    echo "HCF of Numbers "."=".$hcf;
?>