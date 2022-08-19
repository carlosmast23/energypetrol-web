
<?php
require_once "ShoppingCart.php";

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {

                $productResult = $shoppingCart->getProductByCode($_GET["code"]);
                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);
                if (!empty($cartResult)) {
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                } else {
                    // Add to cart table
                    //print("<script>alert('".$cartResult."')</script>");
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $member_id);
                }
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
        case "catSelect":

            break;
    }
}
?>
<HTML>
    <head>
        <TITLE>Tienda Energypetrol</TITLE>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= base_url() ?>public/style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
       <div class="container">
        <?php
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
        ?>
        <div id="shopping-cart">
            <div class="txt-heading">
                <div class="txt-heading-label">Carrito de compras</div>

                <a id="btnEmpty" href="<?= base_url() ?>index.php/welcome/shoppingCart/index.php?action=empty"><img
                        src="<?= base_url() ?>public/images/image/empty-cart.png" alt="empty-cart"
                        title="Empty Cart" class="float-right" /></a>
                <div class="cart-status">
                    <div>Cantidad Total: <?php echo $item_quantity; ?></div>
                    <div>Precio Total: $ <?php echo $item_price; ?></div>
                </div>
            </div>
            <?php
            if (!empty($cartItem)) {
                ?>
                <?php
                require_once ("cart-list.php");
                ?>  
                <div class="align-right">
                    <a href="<?= base_url() ?>index.php/welcome/checkOutCart"><button class="btn-action" name="check_out">Continuar</button></a>
                </div>
                <?php
            } // End if !empty $cartItem
            ?>

        </div>
        <?php
        require_once "product-list.php";
        ?>
        </div>
    </body>
</HTML>