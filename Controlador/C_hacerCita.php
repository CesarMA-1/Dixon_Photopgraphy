<?php
    require('../Modelo/Conexion.php');

    $con = new Conexion();

    $citas = $con->setCita();

    require('../Vistas/V_hacerCitas.php')
?>