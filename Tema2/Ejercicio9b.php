<?php
/*
Crea un array con nombre paisLimitrofe donde los elementos del array 
serán cadenas de texto con los países limítrofes (con frontera) con el tuyo. 
Por ejemplo si vivimos en Perú tenemos como países limítrofes: Ecuador, Colombia, Brasil, Bolivia y Chile.
        
Utilizando un bucle for (índices del array tienen que ser números), muestra por pantalla los países limítrofes.
Utilizando un bucle foreach (índices del array pueden ser números o cadenas de caracteres), 
muestra por pantalla los países limítrofes.
*/

$paisLimitrofe = array("Portugal", "Francia", "Andorra");

for ($i=0 ; $i < count($paisLimitrofe) ; $i++ ) { 
    echo $paisLimitrofe[$i] . "<br>";
}
echo "<br>";
foreach ($paisLimitrofe as $value) {
    echo "$value<br>";
}

?>