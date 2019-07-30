<section class="projects-page-section">
    <div class="container">
        <div class="project-box iso-call">
            <?php
            foreach ($consulta->result() as $fila) {
                ?>

                <div class="project-post interior">
                    <a href="<?= base_url() ?>index.php/welcome/productoVenta/<?php echo $fila->id ?>" target="_blank"><img alt="" src="<?= base_url() ?>uploads/<?php echo $fila->imagen ?>"></a>
                    <div class="hover-box">
                        <h2><a href="PDF/STOCK%20OKONITE%20JULIO.PDF" target="_blank"><?php echo $fila->nombre ?></a></h2>
                        <span><?php echo $fila->descripcion ?></span>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>