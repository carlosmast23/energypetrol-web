<section class="single-page-section">
    <div class="container">
        <div class="row">
            <form action="<?= base_url() ?>index.php/admin/productoGrabar" method="POST" enctype="multipart/form-data">

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

                        <input type="text" class="form-control" value="" name="nombre" placeholder="Nombre Producto">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">

                        <input type="text" class="form-control" value="" name="descripcion" placeholder="Descripción Producto">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-1">

                        <input type="text" class="form-control" value="" name="orden" placeholder="Orden">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">

                        <input type="file" value="" name="imagen" placeholder="Imagen">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Grabar</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <table id="tabla" class="table table-striped">
                <thead>
                    <tr>
                        <th style="width:20%">Categoria</th>
                        <th style="width:10%">Orden</th> 
                        <th style="width:20%">Nombre</th>                        
                        <th style="width:40%">Descripción</th>
                        <th style="width:20%">Imagen</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($consulta->result() as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila->categoria ?></td>
                            <td><?php echo $fila->orden ?></td>
                            <td><?php echo $fila->nombre ?></td>
                            <td><?php echo $fila->descripcion ?></td>
                            <td>
                                <img src="<?php echo base_url() ?>uploads/<?php echo $fila->imagen ?>"></img>
                            </td>
                            <td>
                                <a href="<?php echo base_url('index.php/admin/videoEditarVista') . "/" . $fila->id ?>" title="Editar"><i class="fa fa-edit fa-lg" aria-hidden="true"></i></a>
                                <a onclick="return confirm('Esta seguro que quiere eliminar el registro?')" href="<?php echo base_url('index.php/admin/productoEliminar') . "/" . $fila->id ?>" title="Eliminar">
                                    <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                                </a>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>