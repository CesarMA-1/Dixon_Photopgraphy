<!doctype html>
<html lang="es">    
<head>
    
    <meta charset="utf-8">
    

    <title>Citas</title>
</head>


<body>
    <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <a style="text-decoration:none" href="../index.html"><h2 class="logo">Dixon Photography</h2></a>
            <nav class="nav nav-fill mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/dixonraw-103167844509265" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
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
                                <a class="nav-link" href="../php/galeria.php">Galería</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
        

    </header>

    <div class="container-fluid jumbotron-fluid">
        <br>
        <h2 class="text-center">Contactanos</h2>
        <hr></hr>
        <div class="container">
            <form method="post">
                <h2 class="text-left">Nombre</h2>
                <div class="input-group mt-4" mx-auto style="max-width: 640px">
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Nombre"
                    name="nombre">
                </div>
                <br>
                <br>
                <h2 class="text-left">Teléfono</h2>
                <div class="input-group mt-4" mx-auto style="max-width: 640px">
                    <input
                        type = "number"
                        class="form-control"
                        placeholder="Teléfono"
                        name = "telefono">
                </div>
                <br>
                <br>
                <h2 class="text-left">Correo</h2>
                <div class="input-group mt-4" mx-auto style="max-width: 640px">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Correo"
                        name="correo">
                </div>
                <br>
                <br>
                <h2 class="text-left">Fecha</h2>
                <div class="input-group mt-4" mx-auto style="max-width: 640px">
                    <input
                        type = "date"
                        class="form-control"
                        placeholder="Fecha"
                        name = "fecha">
                </div>
                <br>
                <br>
                <h2 class="text-left">Evento</h2>
                <div class="input-group mt-4" mx-auto style="max-width: 640px">
                    <textarea
                        name = "evento"
                        class="form-control"
                        rows = "5"
                        cols = "40">
                    </textarea>
                </div>
                <br>
                <br>
                <div class="text-center" >
                    <button
                        class="btn btn-success ml-2"
                        type="submit"
                        name="boton"
                        background-color:#135af5>
                        Enviar
                    </button>
                </div>
            </form>
        </div>
        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>    
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
                <i style="background-color: #000000; color: white;" class="fab fa-whatsapp "></i>
                    </a>

                </li>
            </nav>
        </div>
        <div class="copyright mt-4">
            <p class="text-center">&copy; 2020 <a href="#" class="text-white">Dixon Photography</a>
                <a href="#" target="_blank" class="text-white"></a>.</p>
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