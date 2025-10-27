<?php
function verificarClaves($clave1, $clave2) {
    if ($clave1 != $clave2) {
        echo "Las claves ingresadas son distintas";
    } else {
        echo "Las claves coinciden";
    }
}

$usuario = $_POST['usuario'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

verificarClaves($clave1, $clave2);
?>