<?php

$alumno = array(14, 16, 19, 17, 23, 21, 16);

$mayores = 0;

for ($i=0; $i<=6; $i++) { 
    if ($alumno[$i]>=18) {
        $mayores++;
    }
}

echo "<br>Alumnos mayores de edad: $mayores";

?>