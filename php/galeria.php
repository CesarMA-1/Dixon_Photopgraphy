<?php
    $Host = 'localhost';
    $Username = 'id15995037_dixonraw';
    $Password = 'Fotografia_09';
    $dbName = 'id15995037_dixonphotography';
    $db = new mysqli($Host, $Username, $Password, $dbName);
    if($result = $db->query("SELECT id_foto FROM fotos"))
?>
<!doctype html>
<html lang="es">    
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/CSS" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/CSS" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/galeria_css.css"/>
        <title>Galería</title>
    </head>
    <body>
        <header class="mt-0 pt-0">
            <div class="bg-cover clearfix pt-3">
                <a style="text-decoration:none" href="../index.html"><h2 class="logo">Dixon Photography</h2></a>
                <nav class="nav nav-fill mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/dixonraw-103167844509265" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/dixon.raw/"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=526624228368&text=Hola!&nbsp;Quiero&nbsp;informes&nbsp;de&nbsp;los&nbsp;paquetes" target="_blank">
                      <!-- Esta linea se cambiaria por el icono de whatsapp--><i style="background-color: #000000; color: white;" class="fab fa-whatsapp "></i>
                        </a>
                    </li>
                </nav>  
                <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
                <div class="ml-0 mr-0 pb-1">
                    <nav class="navbar navbar-expand-md">
                        <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                          aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                          aria-label="Toggle navigation">
                          <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Galería</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../php/formulario_citas.php">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container-fluid jumbotron-fluid">
            <br>
            <h2 class="text-center">Galería</h2>
            <hr></hr>
            <div class="row galeria">
                <div class="column">
                    <?php
                        $num = 1;
                        if($result = $db->query("SELECT id_foto FROM fotos")){
                            $row_cnt = $result->num_rows;
                            while($num <= $row_cnt){
                                echo "<img src='vista.php?id=".$num."'/>";
                                $num+=3;
                            }
                        }
                    ?>
                </div>
                <div class="column">
                    <?php
                        $num2 = 2;
                        if($result = $db->query("SELECT id_foto FROM fotos")){
                            $row_cnt = $result->num_rows;
                            while($num2 <= $row_cnt){
                                echo "<img src='vista.php?id=".$num2."'/>";
                                $num2+=3;
                            }
                        }
                    ?>
                </div>
                <div class="column">
                    <?php
                        $num3 = 3;
                        if($result = $db->query("SELECT id_foto FROM fotos")){
                            $row_cnt = $result->num_rows;
                            while($num3 <= $row_cnt){
                                echo "<img src='vista.php?id=".$num3."'/>";
                                $num3+=3;
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <footer class="container-fluid pt-5">
            <div class="container">
                <h2 class="logo text-center">Dixon</h2>
                <nav class="nav nav-fill mx-auto mt-5">
                    <li class="nav-item">
                        <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=526624228368&text=Hola!&nbsp;Quiero&nbsp;informes&nbsp;de&nbsp;los&nbsp;paquetes" target="_blank">
                        <!-- Esta linea se cambiaria por el icono de whatsapp--><i style="background-color: #000000; color: white;" class="fab fa-whatsapp "></i>
                        </a>
                    </li>
                </nav>
            </div>
            <div class="copyright mt-4">
                <p class="text-center">&copy; 2020 <a href="index.html" class="text-white">Dixon Photography</a>
                <a href="" target="_blank" class="text-white"></a>.</p>
            </div>
        </footer>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.yu2fvl.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>