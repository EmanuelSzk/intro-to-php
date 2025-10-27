<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si se envió el formulario, mostrar el contrato modificado
    $contrato = $_POST["contrato"];
    echo "<h2>Contrato final:</h2>";
    echo "<pre>$contrato</pre>"; // pre conserva saltos de línea y formato
    echo '<br><a href="' . $_SERVER["PHP_SELF"] . '">Volver</a>';
} else {
    // Si no se envió, mostrar el formulario con el contrato base
    $texto_base = "En la ciudad de [........], se acuerda entre la Empresa [..........]
representada por el Sr. [..............] en su carácter de Apoderado,
con domicilio en la calle [..............] y el Sr. [..............],
futuro empleado con domicilio en [..............], celebrar el presente
contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.";

    echo '<form method="post">';
    echo '<h2>Complete el contrato:</h2>';
    echo '<textarea name="contrato" rows="10" cols="80">' . htmlspecialchars($texto_base) . '</textarea><br>';
    echo '<input type="submit" value="Mostrar contrato final">';
    echo '</form>';
}
?>
