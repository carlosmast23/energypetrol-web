        <section class="projects-page-section">
                <div class="container">
                        <div class="project-box iso-call">
                                <?php
                                foreach ($consulta->result() as $fila) {
                                        ?>
                                        <div class="project-post interior">
                                                <iframe src="<?php echo $fila->url ?>" width="262" height="175" frameborder="0"></iframe>
                                                <p><a href="<?php echo $fila->url ?>"><?php echo $fila->titulo ?></a> from <a href="<?php echo $fila->url ?>">ENERGYPETROL S.A.</a></p>
                                        </div>
                                <?php
                                }
                                ?>
                        </div>
                </div>
        </section>
        </div>