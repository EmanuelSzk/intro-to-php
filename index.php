<?php // include('conexion/conection.php');?>
<?php include('include/head.php');?>
<?php include('include/header.php');?>

<main>
    <div class="resolucion">
        <ul class="menu">
        <?php
        for ($i = 4; $i != 19;$i++) {
            echo '<li><a href="resolucion/ejercicio'.$i.'.php">Ejercicio '.$i.'</a></li>';
        }
        ?>
        </ul>
    </div>
</main>

<?php include('include/footer.php');?>