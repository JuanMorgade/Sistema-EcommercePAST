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
    <title>CZ- Presupuesto</title>

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
        <section class="container-fluid mt-5">
            
            <h2 class="subtitulo mt-5 caja_presupuesto"> Solicita tu Presupuesto</h2>
            
            <form novalidate>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Apellido</label>
                        <input type="text" class="form-control " id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">E-mail</label>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control " required>
                        </div>
                        <div class="invalid-feedback">
                            Example invalid input group feedback
                        </div>

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Nro de contacto</label>
                        <input type="text" class="form-control " id="validationCustom04" required>
                        <div class="invalid-feedback">
                            Se requiere del Nro de contacto.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Productos</label>
                        <select class="custom-select " id="validationCustom05" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option>Brownie</option>
                            <option>Cookies</option>
                            <option>Alfajores</option>
                            <option>Donas</option>
                            <option>Chesecake</option>
                            <option>Lemon Pie</option>
                        </select>
                        <div class="invalid-feedback">
                            Se requiere de seleccionar un producto.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlTextarea1">Información adicional: </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <button class="botonn" id="liveToastBtn" type="submit">Enviar</button>
                </div>
            </form>
        </section>
        <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true"
                data-delay="2000">
                <div class="toast-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                    </svg>
                    <strong class="mr-auto">Gracias</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Su consulta fue enviada correctamente.
                </div>
            </div>
        </div>
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
    <script>
        (function () {
            'use strict';
            const forms = document.getElementsByTagName('form');

            forms[0].addEventListener('submit', function (event) {
                const form = event.currentTarget;
                event.preventDefault();
                event.stopPropagation();

                if (form.checkValidity()) {
                    form.classList.add('loading');
                    setTimeout(function () {
                        form.reset();
                        form.classList.remove('was-validated');
                        form.classList.remove('loading');
                        $('#liveToast').toast('show');
                    }, 1000);
                } else {
                    form.classList.add('was-validated');
                }
            }, false);
        })();
    </script>
</body>
</body>

</html>