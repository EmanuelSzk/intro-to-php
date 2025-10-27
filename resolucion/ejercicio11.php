<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $deportes = $_POST['deportes'] ?? [];
    $cantidad = count($deportes);
    echo "$nombre practica $cantidad deporte(s)";
}
?>
<form method="post">
    <input type="text" name="nombre" placeholder="Nombre" required>
    
    <input type="checkbox" name="deportes[]" value="futbol"> Fútbol
    <input type="checkbox" name="deportes[]" value="basket"> Basket
    <input type="checkbox" name="deportes[]" value="tennis"> Tennis
    <input type="checkbox" name="deportes[]" value="voley"> Voley
    
    <input type="submit" value="Enviar">
</form>