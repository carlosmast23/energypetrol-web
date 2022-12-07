<section class="page-banner-section">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
             <h2 style="font-size: xx-large"><?php echo $titulo; ?></h2>
         </div>
<!--          antes 6 para q se vaya a la derecha con style.css 1304-->
         <div class="col-md-12">
            <ul class="page-depth">
               <li><a href="<?= base_url() ?>index.php/welcome/productosServicios">Inicio</a></li>
               <li><a href="<?= base_url() ?>index.php/welcome/<?php echo $ruta; ?>"><?php echo $titulo; ?></a></li>
            </ul>
         </div>
      </div>
   </div>
</section>