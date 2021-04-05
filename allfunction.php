<?php
    function allInOne($a,$b): string
    {
        require_once './addfunction.php';
       require_once "./subfunction.php";
       require_once "./mulfunction.php";
       require_once "./divfunction.php";

       return addFunction($a,$b)
       ."\n" . subFunction($a,$b).
       "\n  ".mulFunction($a,$b).
       "\n". divFunction($a,$b);


    }
?>