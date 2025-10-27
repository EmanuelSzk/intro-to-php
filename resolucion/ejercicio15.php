<?php
if ($_POST && isset($_POST['confirmar'])) {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    
    $pedido = "Nombre: $nombre\n";
    $pedido .= "Dirección: $direccion\n";
    
    if (isset($_POST['jamon'])) {
        $pedido .= "Jamón y queso: " . $_POST['cant_jamon'] . "\n";
    }
    if (isset($_POST['napolitana'])) {
        $pedido .= "Napolitana: " . $_POST['cant_napolitana'] . "\n";
    }
    if (isset($_POST['muzzarella'])) {
        $pedido .= "Muzzarella: " . $_POST['cant_muzzarella'] . "\n";
    }
    
    $pedido .= ".................................\n";
    
    file_put_contents("pedidos.txt", $pedido, FILE_APPEND);
    echo "Pedido registrado correctamente";
    
    // Redirección para evitar reenvío
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<form method="post">
    Nombre: <input type="text" name="nombre" required><br>
    Dirección: <input type="text" name="direccion" required><br><br>
    
    <input type="checkbox" name="jamon" value="si"> Jamón y queso
    Cantidad: <input type="number" name="cant_jamon" min="1" value="1"><br>
    
    <input type="checkbox" name="napolitana" value="si"> Napolitana
    Cantidad: <input type="number" name="cant_napolitana" min="1" value="1"><br>
    
    <input type="checkbox" name="muzzarella" value="si"> Muzzarella
    Cantidad: <input type="number" name="cant_muzzarella" min="1" value="1"><br>
    
    <input type="submit" name="confirmar" value="Confirmar">
</form>