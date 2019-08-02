<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<section class="single-page-section">
    <div class="container">
        </br>

        <div class="row">

            <form action="<?= base_url() ?>index.php/admin/videoCrear" class="form" method="POST">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Titulo Video">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="url_video" class="form-control" id="url_video" aria-describedby="emailHelp" placeholder="Url Video">
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
                    <th style="width:20%">Titulo</th>
                    <th style="width:5%">Orden</th>
                    <th style="width:50%">Url Video</th>
                    <th style="width:20%">Visualizar</th>
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
                        <td><?php echo $fila->url ?></td>
                        <td>
                            <iframe class="embed-responsive-item" src="<?php echo $fila->url ?>" allowfullscreen></iframe>
                        </td>
                        <td>
                            <a href="<?php echo base_url('index.php/admin/videoEditarVista') . "/" . $fila->id ?>" title="Editar"><i class="fa fa-edit fa-lg" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Esta seguro que quiere eliminar el registro?')" href="<?php echo base_url('index.php/admin/videoEliminar') . "/" . $fila->id ?>" title="Eliminar">
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