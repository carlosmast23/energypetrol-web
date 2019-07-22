<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" class="no-js">

<!-- BC_OBNW -->

<head>
    <title>Energypetrol</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <link type="text/css" href="<?= base_url() ?>public/StyleSheets\ModuleStyleSheets.css" rel="StyleSheet">
    <script type="text/javascript">
        var jslang = 'EN';
    </script>
    <link type="image/x-icon" href="<?= base_url() ?>public/images\favicon.ico" rel="icon">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link media="screen" href="<?= base_url() ?>public/css\bootstrap.min.css" type="text/css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>public/css\jquery.bxslider.css">
    <link media="screen" href="<?= base_url() ?>public/css\font-awesome.css" type="text/css" rel="stylesheet">
    <link media="screen" href="<?= base_url() ?>public/css\animate.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css\lightbox.css" rel="stylesheet">
    <link media="screen" href="<?= base_url() ?>public/css\settings.css" type="text/css" rel="stylesheet">
    <link media="screen" href="<?= base_url() ?>public/css\style.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.migrate.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.imagesloaded.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\plugins-scroll.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\clients.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js\script.js"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
</head>

<body>


    <!-- Container -->
    <div id="container">
        <!-- Header
		    ================================================== -->
        <header class="clearfix">
            <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
                <div class="top-line">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <span><em style="color: #1ba1dd !important;" class="fa fa-phone"></em> <a style="color: #ffffff !important;" href="contacto.html"><?php echo buscarDato($parametro,'telefono'); ?></a></span>
                                    <span><em style="color: #1ba1dd !important;" class="fa fa-envelope-o"></em> <a style="color: #ffffff !important;" href="mailto:<?php echo buscarDato($parametro, "correo");?>"><?php echo buscarDato($parametro, "correo");?></a></span>
                                </p>
                                <a style="color: #ffffff !important;" href="mailto:<?php echo buscarDato($parametro, "correo");?>">
                                </a>
                            </div>
                            <a style="color: #ffffff !important;" href="mailto:<?php echo buscarDato($parametro, "correo");?>">
                            </a>
                            <div class="col-md-6"><a style="color: #ffffff !important;" href="mailto:<?php echo buscarDato($parametro, "correo");?>">
                                </a>
                                <ul class="social-icons"><a style="color: #ffffff !important;" href="mailto:<?php echo buscarDato($parametro, "correo");?>">
                                    </a><a class="bandera" href="index.html"><img alt="" src="<?= base_url() ?>public/images\ecu.png"></a>
                                    <a class="bandera" id="left" href="english\index.html"><img alt="" src="<?= base_url() ?>public/images\usa.png"></a>
                                </ul>
                                <ul class="social-icons">
                                    <li><a target="_blank" href="<?php echo buscarDato($parametro, "facebook");?>" class="facebook"><em class="fa fa-facebook"></em></a> </li>
                                    <li><a target="_blank" href="<?php echo buscarDato($parametro, "twiter");?>" class="twitter"><em target="_blank" class="fa fa-twitter"></em></a> </li>
                                    <li><a target="_blank" href="<?php echo buscarDato($parametro, "google");?>" class="google"><em class="fa fa-google-plus"></em></a> </li>
                                    <li><a target="_blank" href="<?php echo buscarDato($parametro, "linkedin");?>" class="linkedin"><em class="fa fa-linkedin"></em></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand"><img alt="" width="100px" src="<?= base_url() ?>public/images\logo.png"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="drop"><a href="<?= base_url() ?>index.php/welcome" class="active">Inicio</a> </li>
                            <li class="drop"><a href="<?= base_url() ?>index.php/welcome/nosotros">Nosotros</a> </li>
                            <li class="drop"><a href="productos.html">Productos y Servicios</a>
                                <ul class="dropdown">
                                    <li><a href="<?= base_url() ?>index.php/welcome/mecanico">Mec&aacute;nico</a></li>
                                    <li><a href="<?= base_url() ?>index.php/welcome/electrico">El&eacute;ctrico</a></li>
                                    <li><a href="<?= base_url() ?>index.php/welcome/firegas">Fire &amp; Gas</a></li>
                                    <li><a href="<?= base_url() ?>index.php/welcome/instrumentacion">Instrumentaci&oacute;n</a></li>
                                    <li><a href="<?= base_url() ?>index.php/welcome/paquetizados">Paquetizados</a></li>
                                    <li><a href="<?= base_url() ?>index.php/welcome/simoprime">Simoprime</a></li>
                                    <li><a href="<?= base_url() ?>index.php/welcome/gabinetes">Gabinetes Met&aacute;licos</a></li>
                                </ul>
                            </li>
                            <li class="drop"><a href="<?= base_url() ?>index.php/welcome/videos">Videos</a> </li>
                            <li class="drop"><a href="<?= base_url() ?>index.php/welcome/stock">Stock</a> </li>
                            <li class="drop"><a href="<?= base_url() ?>index.php/welcome/contactanos">Contacto</a></li>
                            <li class="drop"><a href="http://190.12.34.94:8080/EnergyFac/" target="_blank">Facturaci&oacute;n Electr&oacute;nica</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="slider1" id="home-section">