<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CAVER / Conversiones y Carrocerias</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="assets/css/master.css">

    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css">
    <link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1">
    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2">
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3">
    <link rel='stylesheet' href='http://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!--[if lt IE 9 ]>

    <script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script>
    <meta content="no" http-equiv="imagetoolbar">
    <![endif]-->
</head>
<body class="page">

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-3">
                    <h5 data-error="wrong" data-success="right" for="defaultForm-email">Usuario</h5>
                    <input type="email" id="defaultForm-email" class="form-control validate">
                </div>

                <div class="md-form mb-4">
                    <h5 data-error="wrong" data-success="right" for="defaultForm-pass">Contraseña</h5>
                    <input type="password" id="defaultForm-pass" class="form-control validate">
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default">Login</button>
            </div>
        </div>
    </div>
</div>




<div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>


<div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200" >
    <div data-off-canvas="mobile-slidebar left overlay">
        <a class="navbar-brand scroll" href="index"><img class="scroll-logo w80px" src="assets/media/general/logo_w.png" alt="logo"></a>
        <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="index">Inicio<span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="galeria">Galería</a></li>
            <li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
        </ul>
    </div>
    <div data-canvas="container" style="min-height: 90vh;">
        <header class="header">
            <div class="top-bar d-none d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col offset-2">
                            <div class="top-bar__inner row justify-content-between align-items-center">
                                <ul class="top-bar__list list-unstyled col">
                                    <li class="top-bar__item">Av. Revolución No. 157 Colonia Ejidal Emiliano Zapata Ecatepec de Morelos Edo. Mex.</li>
                                </ul><a class="btn btn-primary btn-sm col-auto" href="#" data-toggle="modal" data-target="#modalLoginForm"><i class="ic icon-login"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-auto">
                            <a class="navbar-brand scroll" href="home.html"><img class="normal-logo" src="assets/media/general/logo.png" alt="logo"></a>
                        </div>
                        <div class="col-lg-auto col">
                            <div class="header-contacts d-none d-md-block d-lg-none d-xl-block"><i class="ic text-primary icon-call-in"></i><span class="header-contacts__inner">¡Llámanos ahora!<a class="header-contacts__number" href="tel:+55 1115 5467">55 1115 5467</a></span></div>
                            <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                        </div>
                        <div class="col-lg d-none d-lg-block">
                            <nav class="navbar navbar-expand-md justify-content-end" id="nav">
                                <ul class="yamm main-menu navbar-nav">
                                    <li class="nav-item active"><a class="nav-link" href="index">Inicio<span class="sr-only">(current)</span></a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galería</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <a class="dropdown-item" href="galeria"> Transporte Público</a>
                                            <a class="dropdown-item" href="galeria"> Turisticas</a>
                                            <a class="dropdown-item" href="galeria"> Especiales</a>
                                            <a class="dropdown-item" href="galeria"> Carrocería</a>
                                            <a class="dropdown-item" href="galeria"> Cajas secas</a>
                                            <a class="dropdown-item" href="galeria"> Caseta</a>

                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>


                                    <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>