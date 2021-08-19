
<section class="services-offer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.490549267942!2d-95.72520818448754!3d29.792369281974672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640d89b338c5901%3A0x869d1fb2c1193159!2s1834%20Snake%20River%20Rd%2C%20Katy%2C%20TX%2077449%2C%20EE.%20UU.!5e0!3m2!1ses!2sec!4v1626389469589!5m2!1ses!2sec" width="100%" height="350" frameborder="0" style="border:0;text-align: center" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <br/>
                <h4 style="text-align: center">Energypetrol</h4>
                <h4 style="text-align: center">USA</h4>
                <div class="contact-info" style="padding-left: 25%">
                    <ul class="information-list">
                        <img src="<?= base_url() ?>public/images\flags.png" class="flag flag-ec" alt="USA" style="width: 20px">
                        <li><em class="fa fa-map-marker"></em><span>Houston - Estados Unidos</li>
                        <li><em class="fa fa-phone"></em><span><?php echo buscarDato($parametro, 'telefonoUsa'); ?></span></li>
                        <li><em class="fa fa-envelope-o"></em>
                            <?php echo buscarDato($parametro, 'correo'); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.600143403408!2d-78.47254773091728!3d-0.1732911982551052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59077096f5739%3A0x9f0117c8ecc3fca2!2sEnergypetrol%20S.%20A.!5e0!3m2!1ses!2sec!4v1604940804962!5m2!1ses!2sec" width="100%" height="350" frameborder="0" style="border:0;text-align: center" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <br/>
                <h4 style="text-align: center">Energypetrol S.A.</h4>
                <h4 style="text-align: center">Ecuador</h4>
                <div class="contact-info"style="padding-left: 15%">
                    <ul class="information-list">
                        <img src="<?= base_url() ?>public/images\flags.png" class="flag flag-ec" alt="USA" style="width: 20px">
                        <li><em class="fa fa-map-marker"></em><span>Quito-Puembo</li>
                        <li><em class="fa fa-phone"></em><span><?php echo buscarDato($parametro, 'telefono'); ?></span></li>
                        <li><em class="fa fa-envelope-o"></em>
                            <?php echo buscarDato($parametro, 'correo'); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3327.1956836621894!2d-70.542417!3d-33.4962856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d193ba5747dd%3A0x5d96d35896a8ca68!2sAv.%20Las%20Perdices%204760%2C%20Penalolen%2C%20Pe%C3%B1alol%C3%A9n%2C%20Regi%C3%B3n%20Metropolitana%2C%20Chile!5e0!3m2!1ses!2sec!4v1626388362606!5m2!1ses!2sec" width="100%" height="350" frameborder="0" style="border:0;text-align: center" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                
                <br/>
                <h4 style="text-align: center">Energypetrol</h4>
                <h4 style="text-align: center">Chile</h4>
                <div class="contact-info" style="padding-left: 25%">
                    <ul class="information-list">
                        <img src="<?= base_url() ?>public/images\flags.png" class="flag flag-ec" alt="USA" style="width: 20px">
                        <li><em class="fa fa-map-marker"></em><span>Santiago - Chile</li>
                        <li><em class="fa fa-phone"></em><span><?php echo buscarDato($parametro, 'telefonoChile'); ?></span></li>
                        <li><em class="fa fa-envelope-o"></em>
                          <?php echo buscarDato($parametro, 'correo'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

