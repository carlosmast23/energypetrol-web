<?php
require_once "ShoppingCart.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();

/* Calculate Cart Total Items */
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;
if (!empty($cartItem)) {
    if (!empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
        }
    }
}

if (!empty($_POST["proceed_payment"])) {
    $name = $_POST ['Nombre'] . " " . $_POST ['Apellido'];
    $email = $_POST ['Correo'];
    $telf = $_POST ['Telefono'];
    $msg = $_POST ['Mensaje'];

    $arrCustInfo = array(
        'name' => $name,
        'email' => $email,
        'telf' => $telf,
        'msg' => $msg,
    );
}
$order = 0;
$msn = "<table style=\"border: 1px solid black;width:50%\"><tr><th>Codigo</th><th>Producto</th><th>Cantidad</th><th>Precio</th><tr>";
if (!empty($name) && !empty($email) && !empty($telf)) {
    // able to insert into database
    $order = $shoppingCart->insertOrder($arrCustInfo, $member_id, $item_price);

    if (!empty($order)) {
        if (!empty($cartItem)) {
            if (!empty($cartItem)) {
                $total = 0;
                foreach ($cartItem as $item) {
                    $msn = $msn . "<tr><td style=\"text-align:center\">" . $item["code"] . "</td><td style=\"text-align:center\">" . $item["name"] . "</td><td style=\"text-align:center\">" . $item["quantity"] . "</td><td style=\"text-align:center\">$" . $item["price"] . "</td></tr>";
                    $total = $total + ($item["price"] * $item["quantity"]);
                    $shoppingCart->insertOrderItem($order, $item["id"], $item["price"], $item["quantity"]);
                }
                $msn = $msn . "<br/><div style=\"text-align:right\"><p style=\"font-weight:bold\">Total: $ " . $total . "</p></div>";
            }
        }

        //send email
        //sendComercial($name, $email, $telf, $msg, $order, $msn);
        sendUser($name, $email, $msn);
        echo "<script>alert('Proceso ejecutado correctamente ..!');</script>";
    }
}

function sendComercial($name, $email, $telf, $msg, $order, $msn) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $user = 'servidor_informacion@energypetrol.net';                                  // Enable SMTP authentication
        $mail->Username = $user;            // SMTP username
        $mail->Password = 'Admin$is2020';                      // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_STARTTLS` encouraged
        $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        //Recipients
        $mail->setFrom($user, 'Tienda Energypetrol');
        $mail->addAddress('andres_muentes@energypetrol.net', 'Comercial');     // Add a recipient
        //$mail->addAddress('danilo_panchez@energypetrol.net', 'Comercial');     // Add a recipient
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Compra pagina web: ' . $name;

        $mail->Body = "<div style=\"width: 100%;padding: 10px;\">\n"
                . "            <table>\n"
                . "            <tr>\n"
                . "                <td><div style=\"width: 100%;text-align: left\"><img src=\"https://www.energypetrol.net/public/images/recursosSoftware/logoEnergy.png\" alt=\"logo\" border=\"0\"></div></td>\n"
                . "                <td><b><label>Tienda Energypetrol S.A.</label></b></td>\n"
                . "            </tr>\n"
                . "            </table>\n"
                . "            <div style=\"width: 100%;text-align: left\"><h4>Estimado(a), colaborador del departamento Comercial </h4>\n"
                . "                <div><p align=\"left\">\n"
                . " Se realizo un pedido de: <br/><br/><b>Nombre:</b> $name<br/><b>Email:</b> $email<br/><b>Telefono: </b>$telf <br/><b>Mensaje: </b>$msg <br/><br/><b>Pedido: $order</b>" . $msn
                . "                    </p></div> \n"
                . "            </div>\n"
                . "        </div>\n";
        $mail->send();
        //echo "<script>alert('Proceso ejecutado correctamente ..!');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. \n Mailer Error: {$mail->ErrorInfo}  \n.$e');</script>";
    }
}

function sendUser($name, $email, $msn) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $user = 'servidor_informacion@energypetrol.net';                                  // Enable SMTP authentication
        $mail->Username = $user;            // SMTP username
        $mail->Password = 'Admin$is2020';                      // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_STARTTLS` encouraged
        $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        //Recipients
        $mail->setFrom($user, 'Tienda Energypetrol');
        $mail->addAddress($email);     // Add a recipient
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Compra pagina web: ' . $name;

        $mail->Body = "<div style=\"width: 100%;padding: 10px;\">\n"
                . "            <table>\n"
                . "            <tr>\n"
                . "                <td><div style=\"width: 100%;text-align: left\"><img src=\"https://www.energypetrol.net/public/images/recursosSoftware/logoEnergy.png\" alt=\"logo\" border=\"0\"></div></td>\n"
                . "                <td><b><label>Tienda Energypetrol S.A.</label></b></td>\n"
                . "            </tr>\n"
                . "            </table>\n"
                . "            <div style=\"width: 100%;text-align: left\"><h4>Estimado(a), " . $name . " </h4>\n"
                . "                <div><p align=\"left\">\n"
                . "Agradecemos el interes, a continuacion se muestra un resumen de lo solicitado, en breves momentos un asesor comercial se comunicara con usted." . $msn
                . "                    </p></div> \n"
                . "            </div>\n"
                . "        </div>\n";
        $mail->send();
        //echo "<script>alert('Proceso ejecutado correctamente ..!');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. \n Mailer Error: {$mail->ErrorInfo}  \n.$e');</script>";
    }
}
?>
<HTML>
    <HEAD>
        <TITLE>Comprar Energypetrol</TITLE>
        <meta name="viewport" content="width = device-width, initial-scale = 1">

        <link href="<?= base_url() ?>public/style.css" type="text/css" rel="stylesheet" />
    </HEAD>
    <BODY>
        <div class="container">
            <div id="shopping-cart">
                <div class="txt-heading">
                    <div class="txt-heading-label">Carrito de compras</div>
                    <a id="btnEmpty" href="index.php?action = empty">
                        <img src="<?= base_url() ?>public/images/image/empty-cart.png" alt="empty-cart" title="Empty Cart" class="float-right"/>
                    </a>
                    <div class="cart-status">
                        <div>Cantidad Total : <?php echo $item_quantity; ?></div>
                        <div>Precio Total: $ <?php echo $item_price; ?></div>
                    </div>
                </div>
                <?php
                if (!empty($cartItem)) {
                    ?>
                    <?php
                    require_once ("cart-list.php");
                    ?>
                    <?php
                } // End if !empty $cartItem
                ?>
            </div>

            <?php
            if (!empty($order)) {
                //echo "<script>alert('Proceso ejecutado correctamente ..!');</script>";
                ?>
                <!--
                <form name="frm_customer_detail" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
                  <input type = 'hidden'
                  name = 'business' value = 'YOUR_BUSINESS_EMAIL'> <input
                  type = 'hidden' name = 'item_name' value = 'Cart Item'> <input
                  type = 'hidden' name = 'item_number' value = "<?php echo $order; ?>"> <input
                  type = 'hidden' name = 'amount' value = '<?php echo $item_price; ?>'> <input type = 'hidden'
                  name = 'currency_code' value = 'USD'> <input type = 'hidden'
                  name = 'notify_url'
                  value = 'http://yourdomain.com/shopping-cart-check-out-flow-with-payment-integration/notify.php'> <input
                  type = 'hidden' name = 'return'
                  value = 'http://yourdomain.com/shopping-cart-check-out-flow-with-payment-integration/response.php'> <input type = "hidden"
                  name = "cmd" value = "_xclick"> <input
                  type = "hidden" name = "order" value = "<?php echo $order; ?>">
                  <div>
                  <input type = "submit" class = "btn-action"
                  name = "continue_payment" value = "Continue Payment">
                  </div>
                  </form>
                -->
                <!--<input type = "submit" class = "btn-action" name = "continue_buying" value = "Continuar comprando">-->
                <div class = "align-right">
                    <a href = "<?= base_url() ?>index.php/welcome/shoppingCart?action=empty"><button class = "btn-action" name = "check_out">Productos</button></a>
                </div>
                <?php
            } else {
                ?>
                <div class="success">Hubo un problema al enviar la solicitud. Porfavor intente nuevamente!</div>
                <div>
                    <a href = "<?= base_url() ?>index.php/welcome/checkOutCart"><button class = "btn-action" name = "check_out">Regresar</button></a>
                </div>
            <?php } ?>
        </div>
    </BODY>
</HTML>