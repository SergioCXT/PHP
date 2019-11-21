<?php

/*
Crear un array escalar numérico aleatorio de 10 elementos. Se obtendrá el contenido del array sin formato 
(Para comprobar rápidamente que se ha generado bien), con formato mediante un bucle, 
el número de elementos que contiene con la función count y la media redondeada con dos decimales.
*/

$notas = array();
$sum=0;
for ($i=0; $i < 10 ; $i++) { 
    $notas[$i] = mt_rand(0, 10);
    echo $notas[$i];
    echo "<br>";
    $sum += $notas[$i];
}
var_dump($notas);
echo "<br>";
print_r($notas);
echo "<br>";
echo "El array tiene ". count($notas) . " elementos.";
echo "La media es " . round($sum / count($notas), 2);

?>