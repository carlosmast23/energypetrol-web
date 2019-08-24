<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<section class="single-page-section">
    <div class="container">
        </br>

        <div class="row">

            <form action="<?= base_url() ?>index.php/admin/bannerCrear" class="form" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Titulo">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="subtitulo" class="form-control" id="subtitulo" aria-describedby="emailHelp" placeholder="Subtitulo">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="descripcion" class="form-control" id="descripcion" aria-describedby="emailHelp" placeholder="Descripcion">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="link" class="form-control" id="link" aria-describedby="emailHelp" placeholder="Link">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="file" value="" name="imagen" placeholder="Imagen">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-1">
                        <input type="text" name="orden" class="form-control" id="orden" aria-describedby="emailHelp" placeholder="Orden">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Grabar</button>
                    </div>
                </div>

            </form>


        </div>

        <table id="tabla" class="table table-striped">
            <thead>
                <tr>
                    <th style="width:15%">Titulo</th>
                    <th style="width:5%">Orden</th>
                    <th style="width:15%">Subtitulo</th>
                    <th style="width:30%">link</th>
                    <th style="width:20%">Imagen</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($consulta->result() as $fila) {
                    ?>
                    <tr>
                        <td><?php echo $fila->titulo ?></td>
                        <td><?php echo $fila->orden ?></td>
                        <td><?php echo $fila->subtitulo ?></td>
                        <td><?php echo $fila->link ?></td>
                        <td>
                            <img src="<?php echo base_url() ?>uploads/<?php echo $fila->imagen ?>"></img>
                        </td>
                        <td>
                            <a href="<?php echo base_url('index.php/admin/bannerEditarVista') . "/" . $fila->id ?>" title="Editar"><i class="fa fa-edit fa-lg" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Esta seguro que quiere eliminar el registro?')" href="<?php echo base_url('index.php/admin/bannerEliminar') . "/" . $fila->id ?>" title="Eliminar">
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
</section>