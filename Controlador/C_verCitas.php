<?php
    require('../Modelo/Conexion.php');

    $con = new Conexion();

    $citas = $con->getCitas();

    require('../Vistas/V_verCitas.php')
?>