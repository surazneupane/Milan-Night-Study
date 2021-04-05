<?php
   $sayCase=readline("enter cases: ");
   $num1=readline("enter 1st number: ");
   $num2=readline("enter 2nd number: ");

   switch($sayCase){
       case 1;
       echo addFunction($num1, $num2);
       break;

       case 2;
       echo subFunction($num1, $num2);
       break;

       case 3;
       echo mulFunction($num1, $num2);
       break;

       case 4;
       echo divFunction($num1, $num2);
       break;
       
       case 5;
     echo   allFunction($num1, $num2);
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
       return allInOne($a,$b);
       
   }

?>