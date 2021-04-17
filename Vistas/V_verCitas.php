<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <!--Div del menú lateral-->
        <div id="sidemenu" class="menu-collapsed">
            <div id="smheader">
                <div id="title"><span><a href="../index.html" target="_blank">Dixon Photography</a></span></div>
                <div id="menu-btn">
                    <div class="btn-cy"></div>
                    <div class="btn-cy"></div>
                    <div class="btn-cy"></div>
                </div>
            </div>

            <!--Div para item del menú-->
            <div id="menu-items">
                <div class="mitem">
                    <a href="#">
                        <div class="icon"><img src="../images/citas-icon.png" alt=""></div>
                        <div class="title"><span>Citas</span></div>
                    </a>
                </div>

                <!--Div para item del menú-->
                <div class="mitem separator"></div>
                <div class="mitem">
                    <a href="../admin-dixon/reg_galeria.php">
                        <div class="icon"><img src="../images/galeria-icon.png" alt=""></div>
                        <div class="title"><span>Galería</span></div>
                    </a>
                </div>
            </div>
        </div>
        
        <!--Main container para el cuerpo fuera del menú lateral-->
        <div id="main-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //Sentencia foreach para desplegar la información de la tabla citas
                        foreach($citas as $cita){
                            echo "<tr>";
                            echo "<td>". $cita['id_citas'] ."</td>";
                            echo "<td>". $cita['nombre_cliente'] ."</td>";
                            echo "<td>". $cita['telefono'] ."</td>";
                            echo "<td>". $cita['correo'] ."</td>";
                            echo "<td>". $cita['fecha_evento'] ."</td>";
                            echo "<td>". $cita['evento'] ."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <!--Javascript necesario para menu lateral-->
        <script>
            const btn = document.querySelector('#menu-btn');
            const menu = document.querySelector('#sidemenu');
            btn.addEventListener('click', e =>{
                menu.classList.toggle("menu-expanded");
                menu.classList.toggle("menu-collapsed");

                document.querySelector('body').classList.toggle('body-expanded');
            });
        </script>
    </body>
</html>