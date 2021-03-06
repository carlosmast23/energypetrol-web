<section class="single-page-section">
    <div class="container">
        <div class="row">
            <form action="<?= base_url() ?>index.php/admin/categoriaProductoCrear" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="" name="descripcion" placeholder="Descripción">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="" name="email" placeholder="Email">
                    </div>
                </div>
               
                <div class="form-group row">
                    <div class="col-md-1">
                        <input type="text" class="form-control" value="" name="orden" placeholder="Orden">
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
                        <th style="width:20%">Nombre</th>
                        <th style="width:10%">Orden</th>
                        <th style="width:20%">Email</th>
                        <th style="width:50%">Descripción</th>                        
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($consulta->result() as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila->nombre ?></td>
                            <td><?php echo $fila->orden ?></td>
                            <td><?php echo $fila->email ?></td>
                            <td><?php echo $fila->descripcion ?></td>
                            
                            <td>
                                <a href="<?php echo base_url('index.php/admin/categoriaProductoEditarVista') . "/" . $fila->id ?>" title="Editar"><i class="fa fa-edit fa-lg" aria-hidden="true"></i></a>
                                <a onclick="return confirm('Esta seguro que quiere eliminar el registro?')" href="<?php echo base_url('index.php/admin/categoriaProductoEliminar') . "/" . $fila->id ?>" title="Eliminar">
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