<div class="container ">
    <br />
    <div class="card">
        <div class="card-header">
            <h5 class="card-title" style="text-align: center"><?php echo $consulta['titulo'] ?></h5>
        </div>
        <div class="card-body" style="text-align: center">
            <a href="#" style="text-align: center">Inicio > Productos y Servicios > <?php echo $consulta['titulo'] ?></a>
        </div>
    </div>
    <br /><br />
    <div class="row">
        <?php
        $visible = "visible";
        if (is_null($consulta['titulo_lateral1'])) {
            $visible = "hidden";
        }
        ?>
        <div class="col-md-4">
            <ul class="list-group" style="visibility: <?php echo $visible ?>">
                <li class="list-group-item active"><?php echo $consulta['titulo_lateral1'] ?></li>
                <?php
                $contenido = explode(",", $consulta['descripcion_lateral1']);
                foreach ($contenido as $fila) {
                    echo '<li class="list-group-item">' . $fila . '</li>';
                }
                ?>
            </ul>
            <br /><br />
            <?php
            $visible = "visible";
            if (is_null($consulta['titulo_lateral2'])) {
                $visible = "hidden";
            }
            ?>

            <ul class="list-group" style="visibility: <?php echo $visible ?>">
                <li class="list-group-item active"><?php echo $consulta['titulo_lateral2'] ?></li>
                <?php
                $contenido = explode(",", $consulta['descripcion_lateral2']);
                foreach ($contenido as $fila) {
                    echo '<li class="list-group-item">' . $fila . '</li>';
                }
                ?>
            </ul>


            <?php
            $visible = "visible";
            if (is_null($consulta['titulo_lateral3'])) {
                $visible = "hidden";
            }
            ?>
            <br /><br />
            <ul class="list-group" style="visibility: <?php echo $visible ?>">
                <li class="list-group-item active"><?php echo $consulta['titulo_lateral3'] ?></li>
                <?php
                $contenido = explode(",", $consulta['descripcion_lateral3']);
                foreach ($contenido as $fila) {
                    echo '<li class="list-group-item">' . $fila . '</li>';
                }
                ?>
            </ul>

            <br /><br />
            <div class="card" ">
                <div class=" card-body">
                <h6 class="card-subtitle mb-2 text-muted">Información de contacto</h6>
                <p>
                    <span><em class="fa fa-phone" style="color: #1ba1dd !important;"></em> 593 2 292 3064 / ext.104</span>
                    <br />
                    <span><em class="fa fa-envelope" style="color: #1ba1dd !important;"></em> energypetrol@energypetrol.net</span>

                </p>

            </div>
        </div>

        <br /><br />

    </div>
    <div class="col-md-8">
        <img class="img-fluid" src="<?= base_url() ?>public/upload/<?php echo $consulta['imagen_principal'] ?>">
        <div class="w-100 p-3" style="background-color: #eee;">
            <h6 style="text-align: center"><?php echo $consulta['titulo1'] ?></h6>
        </div>
        <p class="lead mb-0"><?php echo $consulta['descripcion1'] ?></p>

        <div  class="w-100 p-3" style="background-color: #eee;">
            <h6 style="text-align: center">PRODUCTOS</h6>
        </div>

        <?php
        foreach ($productos->result() as $fila) {
            ?>
            
            <div class="card text-center">
                <div>
                <img class="card-img-top" style="width: 50%" src="<?= base_url() ?>public/upload/<?php echo $fila->imagen?>" alt="Card image cap">
                </div>
                
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fila->titulo?></h5>
                    <p class="card-text"><?php echo $fila->descripcion?></p>
                    <a href="#" class="btn btn-primary">Mas Información</a>
                </div>
                <div class="card-footer text-muted">
                    © EnergyPetrol 2019
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>
</div>