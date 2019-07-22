<iframe width="1550" height="425" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3989.800256554863!2d-78.47276024879321!3d-0.17241127017849578!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sec!4v1427926587212" style="border: 0px none;"></iframe>
<section class="contact-section">
    <div class="container">
        <div class="col-md-4">
            <div class="contact-info">
                <h2>Informaci&oacute;n de Cont&aacute;cto</h2>
                <p>Puede contactarnos o visitarnos en nuestras oficinas de lunes a viernes de 8:00 - 17:00</p>
                <ul class="information-list">
                    <li><em class="fa fa-map-marker"></em><span>Quito - Ecuador</span></li>
                    <img src="<?= base_url() ?>public/images\flags.png" class="flag flag-ec" alt="ecuador">
                    <li><em class="fa fa-phone"></em><span>593 2 292 3064</span></li>
                    <li><em class="fa fa-map-marker"></em><span>Puembo - Ecuador</span></li>
                    <img src="<?= base_url() ?>public/images\flags.png" class="flag flag-ec" alt="ecuador">
                    <li><em class="fa fa-phone"></em><span>593 2 214 7040</span></li>
                    <li><em class="fa fa-envelope-o" style="color: #333333 !important;"></em>
                        <div style="margin-left: 20px;">energypetrol@energypetrol.net</div>
                    </li>
                    <br>
                    <br>
                </ul>
            </div>
            <div class="contact-info">
                <ul class="information-list">
                    <li><em class="fa fa-map-marker"></em><span>Houston - Estados Unidos</span></li>
                    <img src="<?= base_url() ?>public/images\flags.png" class="flag flag-ec" alt="ecuador">
                    <li><em class="fa fa-phone"></em><span>832 495 4987</span></li>
                    <li><em class="fa fa-envelope-o"></em>
                        <div style="margin-left: 20px;">energypetrol@energypetrol.net</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <form id="contact-form">
                <h2>Escribenos</h2>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="mail" id="mail" placeholder="Email">
                    </div>
                </div>
                <textarea name="comment" id="comment" placeholder="Message"></textarea>
                <input type="submit" id="submit_contact" value="Send Message">
                <div id="msg" class="message"></div>
            </form>
        </div>
    </div>
</section>