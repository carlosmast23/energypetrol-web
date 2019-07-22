<section class="single-page-section">
    <div class="container">
        <div class="row">
            <form action="grabarParametros" method="POST">
                <div class="form-group row">
                    <div class="col-md-4">
                        <h4>Email:</h4>
                        <input type="email" class="form-control" value="<?php echo buscarDato($parametro, "correo");?>" name="correo" placeholder="Correo">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <h4>Telefono:</h4>
                        <input type="text" class="form-control" value="<?php echo buscarDato($parametro, "telefono");?>" name="telefono" placeholder="Telefono">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <h4>Facebook:</h4>
                        <input type="text" class="form-control" value="<?php echo buscarDato($parametro, "facebook");?>" name="facebook" placeholder="Facebook">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <h4>Twiter:</h4>
                        <input type="text" class="form-control" value="<?php echo buscarDato($parametro, "twiter");?>" name="twiter" placeholder="Twiter">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <h4>Google+:</h4>
                        <input type="text" class="form-control" value="<?php echo buscarDato($parametro, "google");?>" name="google" placeholder="Google +">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-md-6">
                        <h4>linkedin:</h4>
                        <input type="text" class="form-control" value="<?php echo buscarDato($parametro, "linkedin");?>" name="linkedin" placeholder="linkedin">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <h4>Pie Pagina:</h4>
                        <input type="text" class="form-control" value="<?php echo buscarDato($parametro, "pie_pagina");?>" name="piePagina" placeholder="piePagina">
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
