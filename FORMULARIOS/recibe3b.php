<?php
//AMPLIACIÓN
/*if ($_REQUEST["diametro"] = " ") {
    echo "Campo no cumplimentado";
} else if ($_REQUEST["altura"] = " ") {
    echo "Campo no cumplimentado";
}else {
    echo "Campos no cumplimentados";
}
*/

$diametro = $_REQUEST["diametro"];
$radio = $diametro / 2;

$altura = $_REQUEST["altura"];
$PI = 3.141593;

$volumen = $PI*$radio*$radio*$altura;

$caudal = $_REQUEST["caudal"];
$tpoLlenado = $volumen/$caudal;

echo "<br>";

echo "El depósito tarda en llenarse
aproximadamente" . round($tpoLlenado, 0) ." minutos ";



?>