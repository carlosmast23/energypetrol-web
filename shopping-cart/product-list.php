<script type="text/javascript" language="javascript" src="DataTables/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css"/>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function () {
        $('#example').dataTable({
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, 'All'],
            ],
            "aProcessing": true,
            "aServerSide": true,
            "responsive": true
        });
    });

</script>
<div id="product-grid">
    <div class="txt-heading" style="text-align: center">
        <div class="txt-heading-label" style="text-align: center">Productos</div>
    </div>

    <form method="post" action="index.php?action=catSelect&cate=cat">
        <label>Selecciona una categoria:</label>
        <select name="cat">
            <option value="Todos">Todos</option>
            <?php
            $queryCat = "SELECT distinct category FROM tbl_product";
            $arrayCat = $shoppingCart->getCategories($queryCat);
            if (!empty($arrayCat)) {
                foreach ($arrayCat as $key => $value) {
                    $catL = $arrayCat[$key]["category"];
                    ?>
                    <option value="<?php echo $catL; ?>"><?php echo $catL; ?></option>
                    <?php
                }
            }
            ?>
        </select>
        <br/>
        <br/>
        <div>
            <input type="submit" value=" Filtrar " style="font-size: 15px;font-weight: bold;border: 2px solid #000;background-color: #3a9ee0;color: #ffffff;  order-radius: 90px 90px 90px 90px;
                   -moz-border-radius: 5px 5px 5px 5px;
                   -webkit-border-radius: 90px 90px 90px 90px;
                   border: 0px solid #000000;">
        </div>
    </form>


    <?php
    if (!empty($_GET["cate"])) {
        $selectOPT = $_GET["cate"];
        if (!empty($_POST["cat"])) {
            $selectOPT = $_POST["cat"];
        }
        if ($selectOPT == 'Todos') {//select all products
            $query = 'SELECT * FROM tbl_product ORDER BY id ASC';
        } else {
            $query = 'SELECT * FROM tbl_product WHERE category="' . $selectOPT . '" ORDER BY id ASC';
        }

        $product_array = $shoppingCart->getProdCat($query);

        if (!empty($product_array)) {
            ?>
            <div class="row">
                <table id="example" class="table-striped" style="width:100%">
                    <thead>
                    <th style="text-align: center">Item</th>
                    <th style="text-align: center">Nombre</th>
                    <th style="text-align: center">Accion</th>
                    <th style="text-align: center">Precio</th>
                    <th style="text-align: center">Description</th>
                    </thead>
                    <tbody>   
                        <?php
                        foreach ($product_array as $key => $value) {
                            ?>
                            <tr>
                        <form method="post"
                              action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                            <td style="text-align: center;width: 15%">
                                <div class="product-image">
                                    <img src="<?php
                                    if ($product_array[$key]["image"] != null || $product_array[$key]["image"] != "") {
                                        echo $product_array[$key]["image"];
                                    } else {
                                        echo "product/noImage.jpg";
                                    }
                                    ?>">
                                    <div class="product-title">
                                        <?php echo $product_array[$key]["code"]; ?>
                                    </div>
                                </div>
                            </td>
                            <td style="text-align: center;width: 15%">
                                <?php echo $product_array[$key]["name"]; ?>                                
                            </td>
                            <td style="text-align: left">
                                <div style="text-align: center">
                                    <input type="number" name="quantity" value="1"
                                           size="1" class="input-cart-quantity" /><input type="image"
                                           src="image/add-to-cart.png" class="btnAddAction" />
                                </div>
                            </td>
                            <td style="text-align: center">
                                <?php echo "$" . $product_array[$key]["price"]; ?>
                            </td>
                            <td style="text-align: center;width: 50%">
                                <?php echo $product_array[$key]["description"]; ?>                                
                            </td>
                        </form>
                        </tr>    
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php
        }
    } else {
        ?>
        <table id="example" class="table-striped" style="width:100%" >
            <thead>
            <th style="text-align: center">Item</th>
            <th style="text-align: center">Nombre</th>
            <th style="text-align: center">Accion</th>
            <th style="text-align: center">Precio</th>
            <th style="text-align: center">Description</th>
            </thead>
            <tbody>   
                <?php
                $query = 'SELECT * FROM tbl_product ORDER BY id ASC';
                $product_array = $shoppingCart->getProdCat($query);
                if (!empty($product_array)) {
                    foreach ($product_array as $key => $value) {
                        ?>
                        <tr>
                    <form method="post"
                          action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                        <td style="text-align: center;width: 15%">
                            <div class="product-image">
                                <img src="<?php
                                if ($product_array[$key]["image"] != null || $product_array[$key]["image"] != "") {
                                    echo $product_array[$key]["image"];
                                } else {
                                    echo "product/noImage.jpg";
                                }
                                ?>">
                                <div class="product-title">
                                    <?php echo $product_array[$key]["code"]; ?>
                                </div>
                            </div>
                        </td>
                        <td style="text-align: center;width: 15%">
                            <?php echo $product_array[$key]["name"]; ?>                                
                        </td>
                        <td style="text-align: left">
                            <div style="text-align: center">
                                <input type="number" min="1" name="quantity" value="1"
                                       size="2" class="input-cart-quantity" /><input type="image"
                                       src="image/add-to-cart.png" class="btnAddAction" />
                            </div>
                        </td>
                        <td style="text-align: center">
                            <?php echo "$" . $product_array[$key]["price"]; ?>
                        </td>
                        <td style="text-align: center;width: 50%">
                            <?php echo $product_array[$key]["description"]; ?>                                
                        </td>
                    </form>
                    </tr>    
                <?php } ?>
                </tbody>
            </table>
            <?php
        }
    }
    ?>
</div>