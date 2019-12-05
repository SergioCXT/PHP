<?php

function mayoresYmedia ($valores, $numero){

$suma=0;
$contador=0;


for ($i=0; $i < count($valores); $i++) {
    if ($valores[$i] > $numero) {
        $contador++;
    }
}
echo "Hay " . $contador . " valores mayores que " . $numero;
echo "<br>";

for ($i=0; $i < count($valores); $i++) { 
    $suma += $valores[$i];
}
return round($suma / count($valores), 1);

}
?>