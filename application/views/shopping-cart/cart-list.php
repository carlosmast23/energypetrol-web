
<div class="shopping-cart-table">
    <div class="cart-item-container header">
        <div class="cart-info title">Producto</div>
        <div class="cart-info desc">Descripcion</div>
        <div class="cart-info">Cantidad</div>
        <div class="cart-info price">Precio</div>
        <div class="cart-info price">Total</div>

    </div>
    <?php
    foreach ($cartItem as $item) {
        ?>
        <div class="cart-item-container">
            <div class="cart-info title">
                <img class="cart-image" width="5%"
                     src="<?php
                     if ($item["image"] != null || $item["image"] != "") {
                         echo base_url()."public/images/".$item["image"];
                     } else {
                         echo base_url()."public/images/"."product/noImage.jpg";
                     }
                     ?>">
                     <?php echo $item["name"]; ?>
            </div>
            <div class="cart-info desc" style="overflow-x: scroll">
                <?php echo $item["name"]; ?> (<?php echo $item["description"]; ?>)
            </div>

            <div class="cart-info">
                <?php echo $item["quantity"]; ?>
            </div>

            <div class="cart-info price">
                <?php echo "$" . $item["price"]; ?>
            </div>
            <div class="cart-info price" style="text-align: right">
                <?php echo "$" . $item["price"] * $item["quantity"]; ?>
            </div>


            <div class="cart-info action" style="text-align: right">
                <a
                    href="index.php?action=remove&id=<?php echo $item["cart_id"]; ?>"
                    class="btnRemoveAction"><img
                        src="<?= base_url() ?>public/images/image/icon-delete.png" alt="icon-delete"
                        title="Remove Item" /></a>
            </div>
        </div>
        <?php
    }
    ?>
</div>
