    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <section class="services-page-section">
                    <div class="side-navigation">
                        <ul class="side-navigation-list">
                            <?php
                            foreach ($categorias->result() as $fila) {
                                ?>
                            <li><a href="<?= base_url() ?>index.php/welcome/stock/<?php echo $fila->id ?>" class="inactive"><?php echo $fila->nombre ?></a></li>
                            <?php
                            }
                            ?>
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
                </section>
            </div>
            <div class="col-md-9">
                <section class="projects-page-section">
                    <div class="row">
                        <!-- Este primer fila abro porque asumo que tiene datos-->
                        <?php
                        $i = 0;
                        foreach ($consulta->result() as $fila) {
                            ?>

                            <div class="col-md-4 col-sm-6">
                                <div class="project-box">
                                    <div class="project-post interior">
                                        <a href="<?= base_url() ?>index.php/welcome/productoVenta/<?php echo $fila->id ?>" target="_blank"><img alt="" src="<?= base_url() ?>uploads/<?php echo $fila->imagen ?>"></a>
                                        <div class="hover-box">
                                            <h2><a href="PDF/STOCK%20OKONITE%20JULIO.PDF" target="_blank"><?php echo $fila->nombre ?></a></h2>
                                            <span><?php echo $fila->descripcion ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Si ya se completan 4 lineas creo otra nueva etiqueta de row -->
                            <?php
                            $i++;
                            if ($i % 3 === 0) {
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
                </section>
            </div>
        </div>