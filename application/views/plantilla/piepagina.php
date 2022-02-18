<!-- footer 
			================================================== -->
<p>
    <footer>
        <div class="up-footer">
            <div class="container" style="width: 80%">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <img alt="" width="170px" src="<?= base_url() ?>public/images\logof.png">
                            <img alt="" width="170px" src="<?= base_url() ?>public/images\BV_Cert_ISO9001-2015.png">
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 40px">
                        <div class="footer-widget">
<!--                            <p>Productos y Servicios</p>-->
                            <ul class="tag-list">
                                <li><a href="<?= base_url() ?>index.php/welcome/productosServicios">Ingenier&iacute;a</a></li>
                                <li><a href="<?= base_url() ?>index.php/welcome/stock/1">Procura</a></li>
                                <li><a href="<?= base_url() ?>index.php/welcome/productosServicios">Construcci&oacute;n</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-widget info-widget">
                            <h2>Contacto</h2>
                            <p><span>N&uacute;mero de Tel&eacute;fono:</span> <a style="color: #ffffff !important;" href="<?= base_url() ?>index.php/welcome/contactanos"> <?php echo buscarDato($parametro,'telefono') ?></a></p>
                            <p><span>Email:</span><a style="color: #ffffff !important;" href="mailto:<?php echo buscarDato($parametro,'correo') ?>"><?php echo buscarDato($parametro,'correo') ?></a></p>
<!--                            <p><span>Horario de Trabajo:</span> 8:00 a.m - 17:00 p.m</p>-->
                        </div>
                        <br>
                        <div class="col-md-10">
                            <ul class="social-icons">
                                <li><a target="_blank" href="<?php echo buscarDato($parametro,'facebook') ?>" class="facebook"><em class="fa fa-facebook"></em></a></li>
                                <li><a target="_blank" href="<?php echo buscarDato($parametro,'twiter') ?>" class="twitter"><em target="_blank" class="fa fa-twitter"></em></a></li>
                                <li><a target="_blank" href="<?php echo buscarDato($parametro,'google') ?>" class="google"><em class="fa fa-google-plus"></em></a></li>
                                <li><a target="_blank" href="<?php echo buscarDato($parametro,'linkedin') ?>" class="linkedin"><em class="fa fa-linkedin"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright">
            <a style="color: #ffffff;" href="http://alphawavedigital.com" target="_blank"><?php echo buscarDato($parametro,'pie_pagina') ?></a>
        </p>
    </footer>

    <!-- End footer -->
    <!-- End Container -->
    <!-- Revolution slider -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 10000,
                startwidth: 1140,
                startheight: 700,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "bullet",
                navigationArrows: "none",

                touchenabled: "on",
                onHoverStop: "off",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 40,

                shadow: 0,

                spinner: "spinner4",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",



                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ".header"
            });

        }); //ready
    </script>
    <script src="<?= base_url() ?>public/js\lightbox.min.js"></script>

    </body>

    </html>