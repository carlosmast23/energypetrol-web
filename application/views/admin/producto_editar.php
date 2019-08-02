<section class="single-page-section">
    <div class="container">
        <div class="row">
            <form action="<?= base_url() ?>index.php/admin/productoEditar" method="POST" enctype="multipart/form-data">
                <input id="id" name="id" type="hidden" value="<?php echo $consulta['id'] ?>">
                <div class="form-group row">
                    <div class="col-md-3">
                        <select name="categoria" class="form-control">
                            <?php
                            foreach ($categorias->result() as $fila) {
                                ?>

                                <option value="<?php echo $fila->id ?>"><?php echo $fila->nombre ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">

                        <input type="text" value="<?php echo $consulta['nombre'] ?>" class="form-control"  name="nombre" placeholder="Nombre Producto">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $consulta['descripcion'] ?>" class="form-control"  name="descripcion" placeholder="Descripción Producto">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-1">

                        <input type="text" value="<?php echo $consulta['orden'] ?>" class="form-control"  name="orden" placeholder="Orden">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">

                        <input type="file" value="" name="imagen" placeholder="Imagen">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Editar</button>
                        <a class="btn btn-secondary " href="<?php echo base_url('index.php/admin/producto') ?>"><button class="btn btn-secondary " type="button">Cancelar</button></a>

                    </div>
                </div>
            </form>
        </div>

    </div>
</section>