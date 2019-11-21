<?php
/*
Escribe y ejecuta el siguiente código y responde a las siguientes preguntas:

<?php
$equipo = array(‘portero’=>'Oblak', ‘defensa’=>'Filipe Luis', ‘medio’=>'Koke', delantero=>'Griezmann');        

                        foreach($equipo as $posicion=>$jugador)

                                echo "El " . $posicion . " es " . $jugador . "<br>";

?>                                        

¿$equipo es una variable normal, un array tradicional ó un array asociativo? -> asociativo
¿portero es un índice de un array, un contenido de un elemento de un array o un contenido de una variable simple? -> índice
¿Al ejecutar el código obtienes un resultado por pantalla u obtienes un error? Sí 
¿Qué es lo que hace el código?
*/


$equipo = array(‘portero’=>'Oblak', ‘defensa’=>'Filipe Luis', ‘medio’=>'Koke', delantero=>'Griezmann');        

    foreach($equipo as $posicion=>$jugador)

     echo "El " . $posicion . " es " . $jugador . "<br>";

?> 


