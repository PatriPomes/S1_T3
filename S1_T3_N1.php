<?php
echo "<b>Ejercicio 1</b>"; 
echo "<br>";
//Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.
$array=array(5,9,7,3,1);
echo "<br>"; //Així imprimim de forma individual cada element segons posició
echo $array[0];
echo $array[1];
echo $array[2];
echo $array[3];
echo $array[4];
echo "<br>";
foreach ($array as  $value) { //imprimim sols elements.
    echo "$value <br>";
  }
  var_dump($array); // mostrem cada element i indiquem quin tipus de dada es.
  echo "<br>"; 
  var_dump($array[3]);//imprimim element i tipus de forma aillada.
  echo "<br>";
  echo "<br>";  
echo "<b>Ejercicio 2</b>";
echo "<br>";
/*Mostrar per pantalla la mida de l’array i posteriorment elimina un element de l’array. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
Mostra per última vegada la mida de l’array.*/
$X = array (10, 20, 30, 40, 50,60);
echo "El tamaño de X es ".count($X); 
echo "<br>";
array_splice($X, 2, 1); //Aquesta funcio elimina i reindexa automaticament.
print_r($X);
echo "<br>";
echo "Eliminamos un elemento y el tamaño es ".count($X);
echo "<br>";
echo "<br>";  
echo "<b>Ejercicio 3</b>";
echo "<br>";
function validar(){
  $paraula=array("pera","banana","naranja","cereza");
  $lletra= 'a';
   foreach ($paraula as $element) {  
     if (strpos($element, $lletra) === false) {
             return false;
        }
      }
    return true;
}
function esta(){
      if(validar()===true){
      echo "True";
      }else{
      echo "False";
      }
}
esta();
echo "<br>";
echo "<br>";  
echo "<b>Ejercicio 4</b>";
echo "<br>";
$alumno = [
  "nombre" => "Patri",
  "edat" => 42,
  "mail" => "pmanzanastomas@gmail.com",
  "comida" => "hamburguesa"
];
var_dump($alumno);
?>