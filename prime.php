<?php
    // print prime numbers upto n numbers
    $prime=array();
    $flag=0;
    $num= readline("upto where: ");
    for($i=2; $i<=$num; $i++){
        for($j=2; $j<=$i/2; $j++){
            if($i%$j== 0){
                $flag=1;
                break;
            }
            
        }
        if($flag==0){
            echo $i." is prime number \n";
        }
        $flag=0;
    }

?>