<?php

/*
Considera que estás desarrollando una web donde trabajas con tipos de motor 
(suponemos que se trata del tipo de motor de una bomba para mover fluidos). 
Define una variable $tipoMotor y asígnale valor 3. Los valores posibles son 1, 2, 3, 4. 
A través de un condicional switch haz lo siguiente:
Si el tipo de motor es 0, mostrar un mensaje indicando “No hay establecido un valor definido para el tipo de bomba”.
Si el tipo de motor es 1, mostrar un mensaje indicando “La bomba es una bomba de agua”.
Si el tipo de motor es 2, mostrar un mensaje indicando “La bomba es una bomba de gasolina”.
Si el tipo de motor es 3, mostrar un mensaje indicando “La bomba es una bomba de hormigón”.
Si el tipo de motor es 4,mostrar un mensaje indicando “La bomba es una bomba de pasta alimenticia”.
Si no se cumple ninguno de los valores anteriores mostrar el mensaje “No existe un valor válido para tipo de bomba”.
         
¿Cuál es el código completo? ¿Cuál es el resultado obtenido por pantalla?
*/

$tipoMotor = 3;

switch ($tipoMotor) {
    case 0:
        echo "No hay establecido un valor definido para el tipo de bomba";
        break;
    case 1:
        echo "La bomba es una bomba de agua";
        break;
    case 2:
        echo "La bomba es una bomba de gasolina";
        break;
    case 3:
        echo "La bomba es una bomba de hormigón";
        break;
    case 4:
        echo "La bomba es una bomba de pasta alimenticia";
        break;
    default:
        echo "No existe un valor válido para tipo de bomba";
        break;
}

?>