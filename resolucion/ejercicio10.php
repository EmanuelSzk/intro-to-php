<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $estudios = $_POST['estudios'];
    echo "$nombre $estudios";
}
?>
<form method="post">
    <input type="text" name="nombre" placeholder="Nombre" required>
    
    <input type="radio" name="estudios" value="no tiene estudios" required> No tiene estudios
    <input type="radio" name="estudios" value="estudios primarios"> Estudios primarios
    <input type="radio" name="estudios" value="estudios secundarios"> Estudios secundarios
    
    <input type="submit" value="Enviar">
</form>