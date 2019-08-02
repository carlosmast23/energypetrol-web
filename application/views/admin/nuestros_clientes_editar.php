<section class="single-page-section">
    <div class="container">
        <div class="row">
            <form action="<?= base_url() ?>index.php/admin/nuestrosClientesEditar" method="POST" enctype="multipart/form-data">
                <input id="id" name="id" type="hidden" value="<?php echo $consulta['id'] ?>">   
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $consulta['orden'] ?>" name="orden" placeholder="Orden">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-1">
                        <input type="file" value="" name="imagen" placeholder="Imagen">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Editar</button>
                        <a class="btn btn-secondary " href="<?php echo base_url('index.php/admin/nuestrosClientes') ?>">
                        <button class="btn btn-secondary " type="button">Cancelar</button></a>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</section>