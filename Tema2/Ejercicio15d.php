<?php

/*
Crear una función llamada operar que reciba tres parámetros (dos valores numéricos y una cadena de caracteres). 
Si a la función se le pasa como texto la palabra “sumar” la función devolverá (con return) la suma de los dos números. 
Si se le pasa el texto “restar” devolverá la resta. Igualmente con las palabras “multiplicar” y “dividir”. 
Cuando hayas definido la función, llámala dos veces, cada una de ellas con valores diferentes.

El programa mostrará por pantalla el texto siguiente:
El resultado de <operación1> los valores <valor1> y <valor2> es <resultado>.
El resultado de <operación2> los valores <valor3> y <valor4> es <resultado>.
*/

function operar( $valor1, $signo, $valor2 ){

    switch ($signo) {
        case 'sumar':
            $operacion = $valor1 + $valor2;
            break;
        case 'restar':
            $operacion = $valor1 - $valor2;
            break;
        case 'multiplicar':
            $operacion = $valor1 * $valor2;
            break;
        case 'dividir':
            $operacion = $valor1 / $valor2;
            break;
        default:
            echo "Indica un símbolo correcto";
            break;
    }
    return $operacion;
}
$valor1=1;
$valor2=2;
$signo="sumar";

echo "El resultado de " . $signo . " los valores " . $valor1 . " y " . $valor2 . " es " . operar($valor1,$signo,$valor2) . ".";

$valor3=5;
$valor4=4;
$signo="restar";
echo "<br>";
echo "El resultado de " . $signo . " los valores " . $valor3 . " y " . $valor4 . " es " . operar($valor3,$signo,$valor4) . ".";

?>