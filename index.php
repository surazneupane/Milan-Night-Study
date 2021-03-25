<?php 

//    // no of user input from cli

//    $numberOfPeople = readline('Enter Number Of People : ');

// //    print_r ( "The Number Of User You Entered :". $numberOfPeople. "<br>");

//     //    for each user take their name and age

//     $userDetails = array();

//     for($i=1;$i<=$numberOfPeople;$i++)
//     {
//         $userDetails[$i]['Name'] = readline("Enter User Name at :");
//         $userDetails[$i]['Age'] = readline("Enter User Age at :");

//     }


   

//     // echo sizeof($userDetails);
//     // compare age and their position
//     for($i=1;$i<=sizeof($userDetails);$i++)
//     {
//         if($userDetails[$i]['Age'] <= 10)
//         {
//             echo $userDetails[$i]['Name']."Is Children <br/>";
//         }
//             elseif($userDetails[$i]['Age']>10 && $userDetails[$i]['Age'] <= 30 )
//             {
//                echo $userDetails[$i]['Name']."Is Young <br/>";

//             }
//             elseif($userDetails[$i]['Age']>30 && $userDetails[$i]['Age'] <= 50 )
//             {
//                echo $userDetails[$i]['Name']."Is Big Young <br/>";

//             }
            
//             else{
//                 echo $userDetails[$i]['Name']."Is Old <br/>";

//             }
    
//         }



// number form 1 to 100 ..... 
// if number is divisible by 3 print fizz ..... 
// if number is divisioble by 5 print buzz
// if number is divisible byt both 3 and 5 print fizzbuzz

        for($i=1;$i<=100;$i++)
        {
            if($i%5==0  && $i%3 == 0)
            {
                echo "Fizz Buzz".$i."\n";
            }
         else   if($i%5 == 0)
            {
                echo "Buzz".$i."\n";
            }
            else   if($i%3 == 0)
            {
                echo "Fizz".$i."\n";
            }
            else{
                echo "Not Divisioble".$i."\n";
            }
        }

        // *
        // **
        // ***
        // ****
        // *****
        // ******




   
   






?>