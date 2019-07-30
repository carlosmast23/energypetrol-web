<section class="single-page-section">
    <div class="container">
        <div class="row">
            <form action="<?= base_url() ?>index.php/admin/proyectoAnioGrabar" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-4">
                        <h4>Proyecto del año:</h4>
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
    </div>
</section>
