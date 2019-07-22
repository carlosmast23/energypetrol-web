<section class="page-banner-section">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h2>LOGIN</h2>
         </div>
         
      </div>
   </div>
</section>


<div class="container ">
    <div class="row" style="margin-top: 30px;margin-bottom: 30px">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                <div class="alert alert-danger" role="alert" style="text-align: center;display: <?php if($error)echo "block"; else echo "none"; ?>;"  >
                ! Credenciales Incorrectas !
                </div>

                    <!-- form card login -->
                    <div class="card rounded-0">
                        
                        <div class="card-body">
                            <form action="" class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control form-control-lg rounded-0" name="usuario" id="usuario" required="true">
                                    <div class="invalid-feedback">Ingrese el usuario.</div>
                                </div>
                                <div class="form-group">
                                    
                                    <input type="password" class="form-control form-control-lg rounded-0" name="clave" id="clave" required="true" autocomplete="new-password">
                                    <div class="invalid-feedback">Ingrese la contraseña</div>
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                      
                                      <span class="custom-control-indicator"></span>                                      
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Acceder</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
    
</div>
<!--/container-->

