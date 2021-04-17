<?php
    include("cargar.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style_admin.css">
        <title>Galería</title>
    </head>
    <body>
        <div id="sidemenu" class="menu-collapsed">
            <div id="smheader">
                <div id="title">
                    <span>
                        <a href="../index.html" target="_blank">Dixon Photography</a>
                    </span>
                </div>
                <div id="menu-btn">
                    <div class="btn-cy"></div>
                    <div class="btn-cy"></div>
                    <div class="btn-cy"></div>
                </div>
            </div>
            <div id="menu-items">
                <div class="mitem">
                    <a href="index.php">
                        <div class="icon"><img src="../images/citas-icon.png" alt=""></div>
                        <div class="title"><span>Citas</span></div>
                    </a>
                </div>
                <div class="mitem separator"></div>
                <div class="mitem">
                    <a href="#">
                        <div class="icon"><img src="../images/galeria-icon.png" alt=""></div>
                        <div class="title"><span>Galería</span></div>
                    </a>
                </div>
            </div>
        </div>
        
        <div id="main-container">
            <form id="form-registro" method="post" enctype="multipart/form-data">
                <h4 class="text-center">Seleccione una imagen a cargar</h4>
                <div>
                    <input type="file" class="form-control" id="image" name="image" multiple>
                    <label for="image" id="img_label">Seleccionar foto.</label>
                    <br>
                    <br>
                </div>
                <br>
                <h3>ID de Cita</h3>
                <div>
                    <input type="number" class="field" placeholder="ID" name="id_cita">
                </div>
                <h3>ID de Fotografo</h3>
                <div>
                    <input type = "number" class="field" placeholder="ID" name = "fotografo">
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Cargar imagen">
            </form>
        </div>

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