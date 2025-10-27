<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $ingresos = $_POST['ingresos'];
    
    if ($ingresos > 3000) {
        echo "$nombre debe pagar impuestos a las ganancias";
    } else {
        echo "$nombre no debe pagar impuestos a las ganancias";
    }
}
?>
<form method="post">
    <input type="text" name="nombre" placeholder="Nombre" required>
    
    <select name="ingresos" required>
        <option value="1000">1-1000</option>
        <option value="3000">1001-3000</option>
        <option value="4000">>3000</option>
    </select>
    
    <input type="submit" value="Enviar">
</form>