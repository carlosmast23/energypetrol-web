<!--
                        #################################
                                - THEMEPUNCH BANNER -
                        #################################
-->

<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php
            foreach ($banner->result() as $fila) {
                ?>
                <!-- SLIDE  -->
                <li data-title="Intro Slide" data-saveperformance="on" data-masterspeed="500" data-slotamount="7" data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center top" data-lazyload="<?= base_url() ?>/uploads/<?php echo $fila->imagen ?>" alt="slidebg1" src="<?= base_url() ?>/uploads/<?php echo $fila->imagen ?>">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div style="z-index: 8; white-space: nowrap;" data-endelementdelay="0.1" data-elementdelay="0.1" data-splitout="none" data-splitin="none" data-easing="Power3.easeInOut" data-start="1200" data-speed="500" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-y="280" data-x="0" class="tp-caption finewide_medium_white lfl tp-resizeme rs-parallaxlevel-0"><?php echo $fila->titulo ?><br>
                        <span><?php echo $fila->subtitulo ?></span> <br>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div style="z-index: 7; white-space: nowrap;" data-endelementdelay="0.1" data-elementdelay="0.05" data-splitout="none" data-splitin="none" data-easing="Power3.easeInOut" data-start="1800" data-speed="500" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-y="400" data-x="0" class="tp-caption small_text customin tp-resizeme rs-parallaxlevel-0 backgroun-col">
                        <div style="text-align: left;"><?php echo $fila->descripcion ?></div>
                        <!--<div style="text-align: left;">consolidando su liderazgo&nbsp;en el mercado Petrolero e Industrial del Ecuador.</div>-->
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div style="text-align: left; z-index: 10; white-space: nowrap;" data-linktoslide="next" data-endelementdelay="0.1" data-elementdelay="0.1" data-splitout="none" data-splitin="none" data-easing="Power3.easeInOut" data-start="2400" data-speed="500" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-y="530" data-x="0" class="tp-caption lfl tp-resizeme rs-parallaxlevel-0"><a class="trans-btn" href="<?php echo $fila->link ?>">Ver m&aacute;s</a></div>
                    <!-- LAYER NR. 4 -->
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="tp-bannertimer"></div>

    </div>
</div>
</section>
<!-- End home section -->
<!-- banner-section 
                        ================================================== -->
<section class="banner-section">
    <div class="container">
        <h2>Proyecto del A&ntilde;o<a data-lightbox="example-1" href="<?= base_url() ?>uploads/<?php echo buscarDato($parametro, "proyecto_anio"); ?>" class="button-one">Ver m&aacute;s</a></h2>
    </div>
</section>
<!-- End banner section -->
<!-- services-offer 
                        ================================================== -->
<section class="services-offer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="offer-post">
                    <a href="<?= base_url() ?>index.php/welcome/productosServicios"><img alt="" src="<?= base_url() ?>public/images\logof.png"></a>
                    <h2><a href="<?= base_url() ?>index.php/welcome/productosServicios">Qui&eacute;nes Somos</a></h2>
                    <p>ENERGYPETROL S.A. es una compa&ntilde;&iacute;a Ecuatoriana Fundada en 1998, su objetivo principal es entregar calidad, efectividad y valor agregado en todas sus actividades, tales como la provisi&oacute;n de productos y servicios de la m&aacute;s alta calidad para el sector petrolero e industrial del pa&iacute;s.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-post">
                    <br>
                    <a href="<?= base_url() ?>index.php/welcome/productosServicios"><img alt="" src="<?= base_url() ?>public/images\prueba\4.jpg"></a>
                    <h2><a href="<?= base_url() ?>index.php/welcome/productosServicios">Qu&eacute; hacemos</a></h2>
                    <p>La empresa procura atender a clientes que necesiten de ingenier&iacute;as especializadas en las que se requiera soluciones innovadoras, con las m&aacute;s recientes y avanzadas tecnolog&iacute;as.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-post">
                    <br>
                    <a href="<?= base_url() ?>index.php/welcome/productosServicios"><img alt="" src="<?= base_url() ?>public/images\prueba\4.jpg"></a>
                    <h2><a href="<?= base_url() ?>index.php/welcome/productosServicios">Qu&eacute; hacemos</a></h2>
                    <p>La empresa procura atender a clientes que necesiten de ingenier&iacute;as especializadas en las que se requiera soluciones innovadoras, con las m&aacute;s recientes y avanzadas tecnolog&iacute;as.</p>
                </div>
            </div>

        </div>
    </div>
</section>
</div>
<!-- End services-offer section -->
<!-- about section 
                        ================================================== -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe width="500" height="281" frameborder="0" src="https://player.vimeo.com/video/139344238"></iframe>
                <p><a href="https://vimeo.com/139344238">Instalaciones CDT Energypetrol</a> from <a href="https://vimeo.com/user11205494">ENERGYPETROL S.A.</a></p>
                <h2>Instalaciones CDT Energypetrol</h2>
                <p>En Energypetrol, nuestra fortaleza reside en el capital humano y los procesos a su cargo. Por este motivo, la directiva ha invertido en conseguir las mejores condiciones de trabajo y estabilidad para todo su personal. En el Centro de Desarrollo Tecnol&oacute;gico de Energypetrol se construyen grandes proyectos que enriquecen a sus ejecutores como al desarrollo de la industria del Ecuador </p>
            </div>
            <div class="col-md-6">
                <iframe width="500" height="281" frameborder="0" src="https://player.vimeo.com/video/139349833"></iframe>
                <p><a href="https://vimeo.com/139349833">SEPARADOR TRIF&Aacute;SICO HORIZONTAL 30000 BPD</a> from <a href="https://vimeo.com/user11205494">ENERGYPETROL S.A.</a></p>
                <h2>SEPARADOR TRIF&Aacute;SICO HORIZONTAL 30000 BPD</h2>
                <p>Las nuevas instalaciones contribuyen a reafirmar nuestra identidad de integradores de tecnolog&iacute;a, en donde se conjugan la ingenier&iacute;a, los materiales, los equipos, el personal y los procedimientos de la m&aacute;s alta calidad con el fin de pasar de la conceptualizaci&oacute;n de productos y soluciones complejas hasta el comisionado y la puesta en operaci&oacute;n de proyectos como el Separador Trif&aacute;sico Horizontal totalmente instrumentado e integrado en Ecuador en nuestro Centro de Desarrollo Tecnol&oacute;gico. </p>
                <p>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End about section -->
<!-- clients-section 
                        ================================================== -->
<section class="clients-section">
    <div class="container">
        <div class="clients-title">
            <h2>Nuestros clientes</h2>
            <p>Algunas de las empresas que han confiado en nosotros</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="brand-logo">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <ul class="partner-logo">
                                    <?php foreach ($clientes->result() as $fila) {
                                        ?>
                                        <li><img alt="" src="<?php echo base_url() ?>uploads/<?php echo $fila->imagen ?>"></li>
                                    <?php }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================ Brand Logo End  ================================= -->
            </div>
        </div>
    </div>
</section>


<!-- End clients section -->
<section class="news-section">
    <div class="container">
        <div class="news-title">
            <h2>Proyectos en Ejecuci&oacute;n</h2>
        </div>
        <div class="news-box">
            <div class="row">
                <!-- Este primer fila abro porque asumo que tiene datos-->
                <?php
                $i = 0;
                foreach ($consulta->result() as $fila) {
                    ?>

                    <div class="col-md-3 col-sm-6">
                        <div class="news-post">
                            <img alt="" src="<?= base_url() ?>uploads/<?php echo $fila->imagen ?>">
                            <h2><a href="#"><?php echo $fila->nombre ?></a></h2>
                            <p><?php echo $fila->descripcion ?></p>
                        </div>
                    </div>

                    <!-- Si ya se completan 4 lineas creo otra nueva etiqueta de row -->
                    <?php
                    $i++;
                    if ($i % 4 === 0) {
                        ?>
                    </div>
                    <div class="row">
                        <?php
                    }
                    ?>

                    <?php
                }
                ?>

                <!-- Validacion final para cerrar la etiqueta row  -->
            </div>

        </div>
    </div>
</section>