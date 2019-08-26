<section class="projects-page-section">
    <div class="container">
        <div class="project-box iso-call">
            <?php
            foreach ($consulta->result() as $fila) {
                ?>
            <div class="project-post interior">
                <figure class="card card-product">
                    <div class="img-wrap"><img style="width: 60%" src="<?php echo base_url() ?>uploads/<?php echo $fila->imagen ?>"></div>
                    <figcaption class="info-wrap">
                        <h3 class="title"><?php echo $fila->nombre ?></h3>
                        <p class="desc"><?php echo $fila->descripcion ?></p>
                        <div class="rating-wrap">
                            <div class="label-rating">154 pedidos </div>
                        </div> <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" onclick='$("#test1").val("<?php echo $fila->nombre ?>");' class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Me interesa</a>
                        <div class="price-wrap h5">
                            <span class="price-new">$$$$</span>
                        </div> <!-- price-wrap.// -->
                    </div> <!-- bottom-wrap.// -->
                </figure>
            </div>
            <?php
            }
            ?>

        </div>

        <br/>
        <div style="text-align: center">
            <a target="_blank" href="<?php echo $categoriaSeleccionada['archivo_descarga']?> "><button type="button" class="btn btn-success btn-lg">Descargar la lista completa en pdf</button></a>
        </div>
    </div>
</section>

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
                                <input id="test1" type="text" class="form-control" name="producto" placeholder="Producto">
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