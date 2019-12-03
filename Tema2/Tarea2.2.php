<?php
/*
1. 
Crea una función que genere un array aleatorio. Recibirá como argumentos: 
número de elementos del array, mínimo valor aleatorio a generar y máximo valor aleatorio a generar. 
La función devolverá el array aleatorio generado.
2.
Crea una función llamada contar_mayores_a_media que reciba únicamente el array aleatorio, 
llame a la función calcular_media (obtendrá la media sin decimales) vista en clase 
y devuelva el número de elementos mayores que la media.
3.
Incluye las tres funciones en una misma librería.
4.
Ejecutar el programa con valores diferentes para el número de elementos, 
así como para el mínimo y el máximo aleatorios.
5.
Ampliación: Mediante un formulario se pedirá al usuario el número de elementos, 
el mínimo aleatorio y el máximo aleatorio. Se le dará a elegir al usuario entre 
"Contar mayores a la media" o "Contar menores a la media" (únicamente se podrá seleccionar uno). 
En función de la opción escogida se mostrará uno u otro resultado.
*/

include "Libreria2.2.php";

$array1 = generar_array(10, 1, 30);
echo "<br>";
echo "Media del array: " . hallar_media($array1);
echo "<br>";
echo "<br>";
echo contar_mayores_a_media($array1);





?>