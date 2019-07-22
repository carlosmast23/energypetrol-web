<section class="page-banner-section">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h2><?php echo $titulo; ?></h2>
         </div>
         <div class="col-md-6">
            <ul class="page-depth">
               <li><a href="<?= base_url() ?>index.php/welcome">Inicio</a></li>
               <li><a href="<?= base_url() ?>index.php/welcome/<?php echo $ruta; ?>"><?php echo $titulo; ?></a></li>
            </ul>
         </div>
      </div>
   </div>
</section>