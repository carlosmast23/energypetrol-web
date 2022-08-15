<?php
    require_once "ShoppingCart.php";

    $member_id = 2; // you can your integerate authentication module here to get logged in member

    $shoppingCart = new ShoppingCart();
?>
<HTML>
    <HEAD>
        <TITLE>Comprar Energypetrol</TITLE>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="style.css" type="text/css" rel="stylesheet" />
    </HEAD>
<BODY>
    <?php
        $cartItem = $shoppingCart->getMemberCartItem($member_id);
        $item_quantity = 0;
        $item_price = 0;
        if (! empty($cartItem)) {
            if (! empty($cartItem)) {
                foreach ($cartItem as $item) {
                    $item_quantity = $item_quantity + $item["quantity"];
                    $item_price = $item_price + ($item["price"] * $item["quantity"]);
                }
            }
        }
    ?>
    <div id="shopping-cart">
            <div class="txt-heading">
                <div class="txt-heading-label">Carrito de compras</div>

                <a id="btnEmpty" href="index.php?action=empty"><img
                    src="image/empty-cart.png" a    lt="empty-cart"
                    title="Empty Cart" class="float-right" /></a>
                <div class="cart-status">
                    <div>Cantidad Total : <?php echo $item_quantity; ?></div>
                    <div>Precio Total: $ <?php echo $item_price; ?></div>
                </div>
            </div>
            <?php
            if (! empty($cartItem)) {
                ?>
    <?php
                require_once ("cart-list.php");
                ?>
    <?php
            } // End if !empty $cartItem
            ?>

    </div>
        <form name="frm_customer_detail" action="process-order.php" method="POST">
        <div class="frm-heading">
            <div class="txt-heading-label">Informacion de Contacto</div>
        </div>
        <div class="frm-customer-detail">
            <div class="form-row">
                <div class="input-field">
                    <input type="text" name="Nombre" id="name"
                        PlaceHolder="Nombre" required>
                </div>

                <div class="input-field">
                    <input type="text" name="Apellido" PlaceHolder="Apellido" required>
                </div>
            </div>
            <div class="form-row">
                <div class="input-field">
                    <input type="text" name="Correo" PlaceHolder="Correo" required>
                </div>

                <div class="input-field">
                    <input type="text" name="Telefono" PlaceHolder="Telefono" required>
                </div>
            </div>

            <div class="form-row">
                <div class="input-field">
                    <textarea class="msn" name="Mensaje" placeholder="Ingrese algun mensaje que quisiera para el asesor comercial que lo contactara"></textarea>
                </div>
            </div>
        </div>
        <div>
            <input type="submit" class="btn-action"
                    name="proceed_payment" value="Solicitar Informacion">
        </div>
        </form>
    </BODY>
</HTML>