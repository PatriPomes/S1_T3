<?php

$primerA=array(5,9,7,30,1);
$segonA = array (9, 20, 30, 17, 50,60);

$result = array_intersect($primerA, $segonA);
echo "La interseccion es ";
print_r($result);
echo "<br>";
echo "<br>"; 
$result2 = array_merge($primerA, $segonA);
echo "La mescla es ";
print_r($result2);

?>