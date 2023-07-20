<?php

$clase1= array(
    "Juan" =>array(5,9,8,7,6),
    "Luisa" => array(4,5,8,7,1),
    "Anna" =>array(4,8,2,3,5),
    "Carlos" => array(5,5,6,6,7)
);
print_r($clase1) ;
echo "<br>"; 

 foreach($clase1 as $alumne=>$notas){
    echo "<br>"; 
    echo"L'alumne ".$alumne. ", te una mitjana de ".array_sum($notas)/count($notas);   
    echo "<br>"; 
    
}




?>