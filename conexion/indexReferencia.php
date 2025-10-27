<?php
include('includes/conexion.php');
conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AA 20</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="consola"></div>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?modulo=ejercicio1">Ejercicio 1</a></li>
            <li><a href="index.php?modulo=ejercicio2">Ejercicio 2</a></li>
            <li><a href="index.php?modulo=ejercicio3">Ejercicio 3</a></li>
            <li><a href="index.php?modulo=ejercicio4">Ejercicio 4</a></li>
            <li><a href="index.php?modulo=ejercicio5">Ejercicio 5</a></li>
        </ul>
    </nav>
    <header>
        <br>
        <h1>Guía AA 20</h1>
    </header>
    <main>
        <?php
        if(!empty($_GET['modulo']))
        {
            include('modulos/'.$_GET['modulo'].'.php');
        }
            else
            {
               echo "<h1>Bienvenido a la Guía de PHP.</h1>";
               $sql = mysqli_query($con, "SELECT * FROM menu");
               if(mysqli_num_rows($sql) != 0)
               {
                #echo "GENERAR TABLA";
                while($r = mysqli_fetch_array($sql))
                {
                    echo $r['nombre']."<br>";
                }
               }
                else
                    echo "SIN DATOS";
            }
        ?>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
