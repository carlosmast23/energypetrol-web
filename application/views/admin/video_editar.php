</br>
<h2 style="text-align:center">Editar Video</h2>

<div class="row">
    <div class="offset-md-3 col-md-6">
        <form action="<?= base_url() ?>index.php/admin/videoEditar" class="form" method="POST">
            <input id="id" name="id" type="hidden" value="<?php echo $consulta['id'] ?>">

            <div class="form-group">
                <input type="text" name="titulo" value="<?php echo $consulta['titulo'] ?>" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Titulo Video">
            </div>

            <div class="form-group">
                <input type="text" value="<?php echo $consulta['url'] ?>" name="url_video" class="form-control" id="url_video" aria-describedby="emailHelp" placeholder="Url Video">
            </div>
          
            <div class="form-group" style="text-align: center">                
                <button type="submit"  class="btn btn-primary">Editar</button>
                <a class="btn btn-secondary  "  href="<?php echo base_url('index.php/admin/videos') ?>">Cancelar</a>
            </div>

        </form>
    </div>

</div>
</br>
</br>
</br>
</br>
</br>