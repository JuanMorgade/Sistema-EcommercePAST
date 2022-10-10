<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
         
    <!--<link rel="stylesheet" href="../css/estilo.css">-->
    <link rel="stylesheet" href="css/style.css">
    <title>CZ- Mis Productos</title>

</head>

<body class="container-fluid m-0 p-2">
<header class="row header--sticky">
        <div class="col-12 navegador">
            <nav class="header__nav navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="./index.php">
                    <img src="imagen/logo.png" alt="logo" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="header__nav__ul--justify navbar-nav">
                        <?php
                            if(isset($_SESSION['codusu'])){
                                echo
                                '<li  class="header__nav__ul__li--style nav-item" onclick="mostrar_opciones()">
                                <a class="header__nav__ul__li__a--link" href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>'.$_SESSION['nomusu'].'
                            </li>';
                            }else{
                                
                        ?>
                        
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="header__nav__ul__li--style nav-item active">
                            <a class="header__nav__ul__li__a--link" href="index.php">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="presupuesto.php">Presupuesto</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="conoceme.php">Conoceme</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="productos.php">Mis Productos</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="cursos.php">Cursos</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="registerr.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                   
                </div>
            </nav>
        </div>
    </header>
    <article>
        <section class="row">
            <div class="col-12 mt-5 ">
                <h2 class="subtitulo mt-5 text-center">Productos</h2>
            </div>
        </section>
    </article>
    <article>
        <section class="cake_body">
            <div class="container">
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/alf03_383x510.jpg" alt="alfajores01" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Alfajores
                            </h2>
                            <p class="card__snippet">Galletas que consisten de dos tapas y un relleno. Muchos tipos de
                                relleno son utilizados, como ganache, crema de
                                mantequilla, chocolate o Dulce de Leche.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>

                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/alf05_595x510.jpg" alt="alfajores02" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Mix de Alfajores</h2>
                            <p class="card__snippet">Caja de 6 diferentes alfajores con los rellenos que quieras.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>

                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/alfajores_341x510.jpeg" alt="alfajores03"
                            class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Alfajores Artesanales</h2>
                            <p class="card__snippet">Alfajor de masa sablee. Relleno de dulce de leche con centro de
                                ganache de chocolate.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/frutillas01_339x510.jpeg" alt="torta_de_frutillas"
                            class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Tarta de Frutilla y Crema Pastelera</h2>
                            <p class="card__snippet">Sablèe de almendras, crema pastelera de naranja, frutillas frescas
                                y menta.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/lemon_375x510.jpeg" alt="lemon" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Lemon Pie</h2>
                            <p class="card__snippet">Tarta de limón, con una masa bretona súper suave, crema de limón y
                                merengue italiano.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/torta_corazon_510x510.jpeg" alt="torta de torta_corazon"
                            class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Torta de Corazón</h2>
                            <p class="card__snippet">Este tipo de tortas tan famosas que se hicieron el último tiempo
                                puede darse con Número o con Letra o en este caso Corazón. Relleno con lo que quieras.
                            </p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/macarons00_385x510.jpeg" alt="macarons" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Macarons</h2>
                            <p class="card__snippet">Deliciosos Macarons del relleno y color que quieras, siempre es
                                bueno para homenajear o mimar a alguien.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/macarons0_339x510.jpeg" alt="macarons" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Macarons con gustos Clasicos</h2>
                            <p class="card__snippet">Macarons rellenos de dulce de leche. Siempre en el corazón.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/mix_300x510.jpg" alt="mix de Productos" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Mix de Productos</h2>
                            <p class="card__snippet">Combinalos como quieras, como ves en la imagen o con lo que más te
                                guste.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/number_339x510.jpeg" alt="number cake" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Number Cake</h2>
                            <p class="card__snippet">Este tipo de tortas tan famosas que se hicieron el último tiempo
                                puede darse con Número,como este caso, o con Letra o con Corazón. Relleno con lo que
                                quieras.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/tarta02_340x510.jpg" alt="Torta" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Tarta</h2>
                            <p class="card__snippet">Tarta de mermelada de Frambuesas y chocolate blanco.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/TortaNro_300x510.jpg" alt="number cake" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Number Cake</h2>
                            <p class="card__snippet">Este tipo de tortas tan famosas que se hicieron el último tiempo
                                puede darse con Número,como este caso, o con Letra o con Corazón. Relleno con lo que
                                quieras.</p>
                            <a href="presupuesto.php" class="card__button">Presupuesto</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </article>
    <!--FOOTER-->
    <footer>
        <div class="footer">
            <div id="button"></div>
            <div id="container">

                <div class="row ">
                    <div class=" col-12 col-md-4 text-center ">
                        <img src="./imagen/logo_footer.png" alt="logo_footer">
                        <p class="name"> <i class="bi bi-geo-alt"></i>Merlo, Provincia de Buenos Aires, Argentina
                        </p>
                        <p class="name"> <i class="bi bi-telephone"></i>(+54) 9 11 2268-1597</p>
                    </div>
                    <div class=" col-12 col-md-4 text-center ">
                        <p class="name">Seguinos en </p>
                        <a class=" social" href="https://www.instagram.com/camizandri.pasteleria/?hl=es"><i
                                class="bi bi-instagram"></i></a>
                        <a class=" social" href="https://www.youtube.com/channel/UCoGu1YIzhJwGc2mn35DY3DA"><i
                                class="bi bi-youtube"></i></a>
                        <p class="name"> Cami Zandri &copy; 2022</p>
                    </div>
                    <div class=" col-12 col-md-4 text-center mt-1">
                        <p class="name"> From Morgade Juan Pablo</p>
                        <img src="./imagen/Logo-Ideas-sin 2.png" alt="logo_empresa">
                        <p class="name"> <i class="bi bi-geo-alt"></i> Ituzaingó, Provincia de Buenos Aires, Argentina
                        </p>
                        <p class="name"> <i class="bi bi-telephone"></i> (+54) 9 11 3515-2345</p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!--SCRIPT DE BOOTSTRAP-->
    <script type="text/javascript">
        function mostrar_opciones(){
            if(document.getElementById("ctrl-menu").style.display=="none"){
                document.getElementById("ctrl-menu").style.display="block";
            }else{
                document.getElementById("ctrl-menu").style.display="none";
            } 
        }
    </script>
    <div class="menu-opciones" id="ctrl-menu" style="display: none;">
        <ul>
            <li><a href="historial.php">
                    <div class="menu-opcion">Historial de Compras</div>
                </a>
            </li>

            <li><a href="loguot.php">
                    <div class="menu-opcion">Salir</div>
                </a>
            </li>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>

</html>