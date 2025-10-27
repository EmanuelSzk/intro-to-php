<?php 

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

if ($edad >= 18) {
    echo "$nombre, no te quiero asustar pero ya sos mayor de edad chabon, tenes $edad años";
} else {
    echo "$nombre, tranqui sos menor todavia, tenes $edad años, la vida es alegría todavia";
}
?>