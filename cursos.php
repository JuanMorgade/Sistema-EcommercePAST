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
    <!--SCRIPT DE INSTAGRAM-->
    <script async src="https://www.instagram.com/embed.js"></script>
    <!--<link rel="stylesheet" href="../css/estilo.css">-->
    <link rel="stylesheet" href="css/style.css">
    <title>CZ- Cursos</title>
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
            <div class="col-12 mt-5">
                <h2 class="subtitulo mt-5 text-center">Cursos</h2>
            </div>
        </section>

        <section class="page-contain row justify-content-around" id="space-lista">
            <div class="col-md-4 col-12 text-center">
                <a href="c_maca.php" class="data-card">
                    <h3>$3500</h3>
                    <h4>MACARONS</h4>
                    <h4>Ideal para hornear en cualquier cocina</h4>
                    <p class="parrafo">Videos paso a paso y recetas en PDF </p>
                    <p class="parrafo">Hacé la clase a tu ritmo sin límite de visualizaciones via Zoom</p>
                    <p class="parrafo">Receta de merengue suizo / merengue italiano </p>
                    <p class="parrafo">Receta de ganache de chocolate para relleno </p>
                    <span class="link-text">
                        COMPRAR CURSO!
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#753BBD" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="col-md-4 col-12 text-center">
                <a href="c_cakes.php" class="data-card">
                    <h3>$5300</h3>
                    <h4>CAKES</h4>
                    <h4>Ideal para principiantes!</h4>
                    <p class="parrafo">Receta y video del bizcochuelo de vainilla</p>
                    <p class="parrafo">Receta y video del buttercream de merengue suizo</p>
                    <p class="parrafo">Videos paso a paso: cómo hornear, rellenar, cubrir y alisar</p>
                    <p class="parrafo">Receta y paso a paso del efecto drip o goteo</p>
                    <span class="link-text">
                        COMPRAR CURSO!
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#753BBD" />
                        </svg>
                    </span>
                </a>
            </div>
            
            <div class="col-md-4 col-12 text-center">
                <a href="c_alfa.php" class="data-card">
                    <h3>$2750</h3>
                    <h4>ALFAJORES</h4>
                    <h4>Mas ricos que los Jorgitos</h4>
                    <p class="parrafo">Receta y video del bizcochuelo de vainilla</p>
                    <p class="parrafo">Receta y video del buttercream de merengue suizo</p>
                    <p class="parrafo">Videos paso a paso: cómo hornear, rellenar, cubrir y alisar</p>
                    <p class="parrafo">Receta y paso a paso del efecto drip o goteo</p>
                    <span class="link-text">
                        COMPRAR CURSO!
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#753BBD" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="col-md-4 col-12 text-center">
                <a href="c_prueba1.php" class="data-card">
                    <h3>$100</h3>
                    <h4>PRUEBA 1</h4>
                    <h4>Curso de Prueba para probar la Pag</h4>
                    <p class="parrafo">Videos paso a paso y recetas en PDF </p>
                    <p class="parrafo">Hacé la clase a tu ritmo sin límites, via Zoom</p>
                    <p class="parrafo">Probando el SDK de Mercado Pago </p>
                    <p class="parrafo">Probando Transferencia Bancaria </p>
                    <span class="link-text">
                        COMPRAR CURSO!
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#753BBD" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="col-md-4 col-12 text-center">
                <a href="c_prueba2.php" class="data-card">
                    <h3>$279</h3>
                    <h4>PRUEBA 2</h4>
                    <h4>Curso 2 de Prueba para probar la Pag</h4>
                    <p class="parrafo">Videos paso a paso y recetas en PDF </p>
                    <p class="parrafo">Hacé la clase a tu ritmo sin límites, via Zoom</p>
                    <p class="parrafo">Probando el SDK de Mercado Pago </p>
                    <p class="parrafo">Probando Transferencia Bancaria </p>
                    <span class="link-text">
                        COMPRAR CURSO!
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#753BBD" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="col-md-4 col-12 text-center">
                <a href="c_prueba3.php" class="data-card">
                    <h3>$345</h3>
                    <h4>PRUEBA 3</h4>
                    <h4>Curso 3 de Prueba para probar la Pag</h4>
                    <p class="parrafo">Videos paso a paso y recetas en PDF </p>
                    <p class="parrafo">Hacé la clase a tu ritmo sin límites, via Zoom</p>
                    <p class="parrafo">Probando el SDK de Mercado Pago </p>
                    <p class="parrafo">Probando Transferencia Bancaria </p>
                    <span class="link-text">
                        COMPRAR CURSO!
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#753BBD" />
                        </svg>
                    </span>
                </a>
            </div>
        </section>
        
        <section class="row">
            <div class="col-12">
                <h2 class="subtitulo">Lo destacado...</h2>
            </div>
        </section>
        <section class="row justify-content-center">
            <blockquote class="instagram-media col-12 col-md-4 m-4" data-instgrm-captioned
                data-instgrm-permalink="https://www.instagram.com/reel/COPnFBMAhPc/?utm_source=ig_embed&amp;utm_campaign=loading"
                data-instgrm-version="13"
                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:250px; min-width:150px; padding: 2px; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                <div style="padding:16px;">
                    <a href="https://www.instagram.com/reel/COPnFBMAhPc/?utm_source=ig_embed&amp;utm_campaign=loading"
                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                        target="_blank">
                        <div style=" display: flex; flex-direction: row; align-items: center;">
                            <div
                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                            </div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                </div>
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                </div>
                            </div>
                        </div>
                        <div style="padding: 19% 0;"></div>
                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px"
                                height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg"
                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                        <g>
                                            <path
                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg></div>
                        <div style="padding-top: 8px;">
                            <div
                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                Ver esta publicación en Instagram</div>
                        </div>
                        <div style="padding: 12.5% 0;"></div>
                        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                            <div>
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                </div>
                                <div
                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                </div>
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                </div>
                            </div>
                            <div style="margin-left: 8px;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                </div>
                                <div
                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                </div>
                            </div>
                            <div style="margin-left: auto;">
                                <div
                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                </div>
                                <div
                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                </div>
                                <div
                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                </div>
                            </div>
                        </div>
                        <div
                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                            <div
                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                            </div>
                            <div
                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                            </div>
                        </div>
                    </a>
                    <p
                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                        <a href="https://www.instagram.com/reel/COPnFBMAhPc/?utm_source=ig_embed&amp;utm_campaign=loading"
                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                            target="_blank">Una publicación compartida de cami zandri (@camizandri.pasteleria)</a>
                    </p>
                </div>
            </blockquote>
            <blockquote class="instagram-media col-12 col-md-4 m-4" data-instgrm-captioned
                data-instgrm-permalink="https://www.instagram.com/reel/CN6Fy1agPfw/?utm_source=ig_embed&amp;utm_campaign=loading"
                data-instgrm-version="13"
                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px;  max-width:250px; min-width:150px; padding: 2px; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                <div style="padding:16px;">
                    <a href="https://www.instagram.com/reel/CN6Fy1agPfw/?utm_source=ig_embed&amp;utm_campaign=loading"
                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                        target="_blank">
                        <div style=" display: flex; flex-direction: row; align-items: center;">
                            <div
                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                            </div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                </div>
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                </div>
                            </div>
                        </div>
                        <div style="padding: 19% 0;"></div>
                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px"
                                height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg"
                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                        <g>
                                            <path
                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg></div>
                        <div style="padding-top: 8px;">
                            <div
                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                Ver esta publicación en Instagram</div>
                        </div>
                        <div style="padding: 12.5% 0;"></div>
                        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                            <div>
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                </div>
                                <div
                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                </div>
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                </div>
                            </div>
                            <div style="margin-left: 8px;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                </div>
                                <div
                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                </div>
                            </div>
                            <div style="margin-left: auto;">
                                <div
                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                </div>
                                <div
                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                </div>
                                <div
                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                </div>
                            </div>
                        </div>
                        <div
                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                            <div
                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                            </div>
                            <div
                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                            </div>
                        </div>
                    </a>
                    <p
                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                        <a href="https://www.instagram.com/reel/CN6Fy1agPfw/?utm_source=ig_embed&amp;utm_campaign=loading"
                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                            target="_blank">Una publicación compartida de cami zandri (@camizandri.pasteleria)</a>
                    </p>
                </div>
            </blockquote>
            <blockquote class="instagram-media col-12 col-md-4 m-4" data-instgrm-captioned
                data-instgrm-permalink="https://www.instagram.com/reel/CMhN71XglS9/?utm_source=ig_embed&amp;utm_campaign=loading"
                data-instgrm-version="13"
                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:250px; min-width:150px; padding: 2px; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                <div style="padding:16px;">
                    <a href="https://www.instagram.com/reel/CMhN71XglS9/?utm_source=ig_embed&amp;utm_campaign=loading"
                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                        target="_blank">
                        <div style=" display: flex; flex-direction: row; align-items: center;">
                            <div
                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                            </div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                </div>
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                </div>
                            </div>
                        </div>
                        <div style="padding: 19% 0;"></div>
                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px"
                                height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg"
                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                        <g>
                                            <path
                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg></div>
                        <div style="padding-top: 8px;">
                            <div
                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                Ver esta publicación en Instagram</div>
                        </div>
                        <div style="padding: 12.5% 0;"></div>
                        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                            <div>
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                </div>
                                <div
                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                </div>
                                <div
                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                </div>
                            </div>
                            <div style="margin-left: 8px;">
                                <div
                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                </div>
                                <div
                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                </div>
                            </div>
                            <div style="margin-left: auto;">
                                <div
                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                </div>
                                <div
                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                </div>
                                <div
                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                </div>
                            </div>
                        </div>
                        <div
                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                            <div
                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                            </div>
                            <div
                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                            </div>
                        </div>
                    </a>
                    <p
                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                        <a href="https://www.instagram.com/reel/CMhN71XglS9/?utm_source=ig_embed&amp;utm_campaign=loading"
                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                            target="_blank">Una publicación compartida de cami zandri (@camizandri.pasteleria)</a>
                    </p>
                </div>
            </blockquote>
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
        crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <!--SCRIPT DE INSTAGRAM-->
    <script async src="https://www.instagram.com/embed.js"></script>

    <!--SCRIPT DE PHP-->
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        var p ='<?php echo $_GET["p"]; ?>';
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                url:'servicios/producto/get_all_products.php',
                type: 'POST',
                data:{},
                success:function(data){
                    console.log(data);
                    let html='';
                    for (var i = 0; i < data.datos.length; i++) {
							data.datos[i].codpro,
							data.datos[i].nompro,
							data.datos[i].despro;	
					}

                },
                error:function(err){
                    console.error(err);
                }
            });   
        });

        function iniciar_compra(){
			$.ajax({
				url:'servicios/compra/validar_inicio_compra.php',
				type:'POST',
				data:{
					codpro:p
				},
				success:function(data){
					console.log(data);
					if (data.state) {
						alert(data.detail);
					}else{
						alert(data.detail);
						if (data.open_login) {
							open_login();
						}
					}
				},
				error:function(err){
					console.error(err);
				}
			});
		};

        function open_login(){
			window.location.href="login.php";
		} 
    </script>

</body>

</html>