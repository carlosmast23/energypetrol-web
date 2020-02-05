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
                                        <!--<div style="margin-left: 20px;">energypetrol@energypetrol.net</div>-->
                                        <div style="margin-left: 20px;"><?php echo $categoriaSeleccionada["email"] ?></div>
                                    </li>
                                </ul>
                            </div>
                            <br />
                            <div class="bottom-wrap" style="text-align: center">
                                <a href="" onclick='$("#test1").text("<?php echo $fila->nombre ?>");' class="btn btn-sm btn-primary" style="text-align: center" data-toggle="modal" data-target="#exampleModal">Me interesa</a>
                            </div> <!-- bottom-wrap.// -->
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


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="<?= base_url() ?>index.php/welcome/enviarCorreoProducto" method="POST">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Más Información Producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!--<h3 style="text-align: center" id="test1"></h3>-->
                            <div class="row" style="padding: 40px;">

                                <input id="id" name="correo_vendedor" type="hidden" value="<?php echo $categoriaSeleccionada['email'] ?>">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="test1" type="text" class="form-control" value="<?php echo $categoriaSeleccionada['nombre'] ?>"  name="producto" placeholder="Producto">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value="" name="correo" placeholder="Correo">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value="" name="telefono" placeholder="Telefono">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="" name="mensaje" placeholder="Mensaje (Opcional)">
                                    </div>
                                </div>
                                <p>Por favor ingrese sus datos y uno de nuestros asesores se pondrá en contacto para brindarle más información.</p>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>