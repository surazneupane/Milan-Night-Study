<?php

$user=readline("how many stars");

  for($i=1; $i<=$user; $i++){
      for($j=1; $j<=$i; $j++){
          echo "*";
      }
      echo "\n";
  }

?>