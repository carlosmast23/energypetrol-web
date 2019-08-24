<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<section class="single-page-section">
    <div class="container">
        </br>

        <div class="row">

            <form action="<?= base_url() ?>index.php/admin/bannerEditar" class="form" method="POST" enctype="multipart/form-data">
                <input id="id" name="id"  type="hidden" value="<?php echo $consulta['id'] ?>">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $consulta['titulo'] ?>"  name="titulo" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Titulo">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $consulta['subtitulo'] ?>" name="subtitulo" class="form-control" id="subtitulo" aria-describedby="emailHelp" placeholder="Subtitulo">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $consulta['descripcion'] ?>" name="descripcion" class="form-control" id="descripcion" aria-describedby="emailHelp" placeholder="Descripcion">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $consulta['link'] ?>" name="link" class="form-control" id="link" aria-describedby="emailHelp" placeholder="Link">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="file" value="" name="imagen" placeholder="Imagen">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-1">
                        <input type="text" value="<?php echo $consulta['orden'] ?>" name="orden" class="form-control" id="orden" aria-describedby="emailHelp" placeholder="Orden">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Editar</button>
                        <a class="btn btn-secondary " href="<?php echo base_url('index.php/admin/banner') ?>"><button class="btn btn-secondary " type="button">Cancelar</button></a>
                    </div>
                </div>

            </form>


        </div>

    </div>
</section>