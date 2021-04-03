<?php 
// Switch , function , function loop ,  return type
$whatTODo = readline('Enter What To Do:::');

switch($whatTODo)
    {
        case 1:
            userAgeVerification();
            break;
        case 2:
            printStar();
            break;
        case 3:
            fibo();
            break;
         case 4:
            oddEven();
            break;
          case 5:
            oddEven();
            break;

        case 6:
          echo printMyName();
          
            break;
        case 7:
            $num1=readline("enter 1st number: ");
            $num2=readline("enter 2nd number: ");
           echo  addition($num1, $num2);
             break;
        
        default:
        echo "Please Enter Valid Input\n";


    }


function userAgeVerification()
{
    require_once "./Cli.php";

}

function printStar()
{
require_once "./star.php";

}

function fibo()
{
require_once "./fibo.php";

}

function oddEven()
{
require_once "./oddeven.php";

}

function primeNumber()
{

require_once "./prime.php";
}

function addition($a, $b):string{
require_once "./addnumbers.php";
    return "addition is".add($a, $b);
}



function printMyName() : string
{
   return readline("Enter Your Name::");
  
}


?>