<?php
if (file_exists("pedidos.txt")) {
    $pedidos = file("pedidos.txt");
    foreach ($pedidos as $linea) {
        echo $linea . "<br>";
    }
} else {
    echo "No hay pedidos registrados";
}
?>