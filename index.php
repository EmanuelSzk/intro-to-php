<?php include('conexion/conexion.php');?>
<?php include('include/head.php');?>
<?php include('include/header.php');?>

<main>
    <div class="resolucion">
        <ul class="menu">
        <?php
        conectar();
        $sql = "SELECT * FROM actividades";
        $resultado = $con->query($sql);

        if($resultado->num_rows > 0) {
            while($fila = $resultado->fetch_assoc()) {
                echo '<li><a href='. $fila["ruta"] .'>'. $fila["actividad"] . '</a></li>';
            }
        }
        desconectar();
        ?>
        </ul>
    </div>
</main>

<?php include('include/footer.php');?>  