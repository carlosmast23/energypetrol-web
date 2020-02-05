<section class="services-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="side-navigation">
                    <ul class="side-navigation-list">
                        <li><a href="<?= base_url() ?>index.php/welcome/productosServicios" class="active">Nuestros Productos</a></li>
                        <li><a href="<?= base_url() ?>index.php/welcome/mecanico">Mec&aacute;nico</a></li>
                        <li><a href="<?= base_url() ?>index.php/welcome/electrico">El&eacute;ctrico</a></li>
                        <li><a href="<?= base_url() ?>index.php/welcome/firegas">Fire and Gas</a></li>
                        <li><a href="<?= base_url() ?>index.php/welcome/instrumentacion">Instrumentaci&oacute;n</a></li>
                        <li><a href="<?= base_url() ?>index.php/welcome/paquetizados">Paquetizados</a></li>
                        <li><a href="<?= base_url() ?>index.php/welcome/simoprime">Simoprime</a></li>
                    </ul>
                    <div class="side-navigation">
                        <div class="contact-info">
                            <h2>Informaci&oacute;n de Cont&aacute;cto</h2>
                            <ul class="information-list">
                                <li><em class="fa fa-map-marker"></em><span>Quito, Ecuador</span></li>
                                <li><em class="fa fa-phone"></em><span>593 2 292 3064</span></li>
                                <li><em class="fa fa-envelope-o"></em>
                                    <div style="margin-left: 20px;">energypetrol@energypetrol.net</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="services-wrapp">
                    <div class="project-box iso-call">
                        <?php
                        foreach ($consulta->result() as $fila) {
                            ?>

                            <div class="project-post interior">
                                <a href="<?= base_url() ?>index.php/welcome/productoVenta/<?php echo $fila->id ?>" target="_blank"><img alt="" src="<?= base_url() ?>uploads/<?php echo $fila->imagen ?>"></a>
                                <div class="hover-box">
                                    <h2><a href="PDF/STOCK%20OKONITE%20JULIO.PDF" target="_blank"><?php echo $fila->nombre ?></a></h2>
                                    <span><?php echo $fila->descripcion ?></span>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>