<section class="single-page-section">
    <div class="container">
        </br>

        <div class="row">

            <form action="<?= base_url() ?>index.php/admin/videoEditar" class="form" method="POST">
                <input id="id" name="id" type="hidden" value="<?php echo $consulta['id'] ?>">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" name="titulo" value="<?php echo $consulta['titulo'] ?>" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Titulo Video">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $consulta['url'] ?>" name="url_video" class="form-control" id="url_video" aria-describedby="emailHelp" placeholder="Url Video">
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
                        <a class="btn btn-secondary " href="<?php echo base_url('index.php/admin/videos') ?>"><button class="btn btn-secondary " type="button">Cancelar</button></a>
                    </div>
                </div>

            </form>


        </div>

    </div>
</section>