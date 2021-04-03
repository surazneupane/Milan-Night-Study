<?php
   $sayCase=readline("enter cases: ");

   switch($sayCase){
       case 1;
       $num1=readline("enter 1st number: ");
       $num2=readline("enter 2nd number: ");
       echo addFunction($num1, $num2);
       break;

       case 2;
       $num1=readline("enter 1st number: ");
       $num2=readline("enter 2nd number: ");
       echo subFunction($num1, $num2);
       break;

       case 3;
       $num1=readline("enter 1st number: ");
       $num2=readline("enter 2nd number: ");
       echo mulFunction($num1, $num2);
       break;

       case 4;
       $num1=readline("enter 1st number: ");
       $num2=readline("enter 2nd number: ");
       echo divFunction($num1, $num2);
       break;
       
       case 5;
       $num1=readline("enter 1st number: ");
       $num2=readline("enter 2nd number: ");
       echo allFunction($num1, $num2);
       break;
   }

   function addFunction($a, $b){
       require_once "./addfunction.php";
        return "Addition is : ".addfunction1($a, $b);
   }
   function subFunction($a, $b){
       require_once "./subfunction.php";
        return "Subtaction is : ".subfunction1($a, $b);
   }
   function mulFunction($a, $b){
       require_once "./mulfunction.php";
        return "Multiplication is : ".mulfunction1($a, $b);
   }
   function divFunction($a, $b){
       require_once "./divfunction.php";
        return "Division is : ".divfunction1($a, $b);
   }
   function allFunction($a, $b){
       require_once "./allfunction.php";
        echo "Addition is: ".allfunction1($a, $b)."\n";
        echo "Subtraction is: ".allfunction1($a, $b)."\n";
        echo "Multiplication is: ".allfunction1($a, $b)."\n";
        echo "Division is: ".allfunction1($a, $b)."\n";
       
   }

?>