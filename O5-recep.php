<?php 

$cijfers = [1,2,3,4,5,6,7,8,9,10,11,12];
$cijferslang = [1,2,3,4,5,6,7,8,9];
$cijfersomgekeerd = [9,8,7,6,5,4,3,2,1];

foreach($cijfers as $cijfers){
    
    foreach($cijferslang as $lang){
        echo $lang;
    }

        echo "-";

    foreach($cijfersomgekeerd as $omgekeerd){
        echo $omgekeerd;
    }
    
        echo "<br>";
}




?>