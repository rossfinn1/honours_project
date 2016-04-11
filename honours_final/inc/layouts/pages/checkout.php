<!-- PAGE CONTENT / CHECKOUT AREA
    ================================================== -->
    <div class="shoppage container-fluid">
        <!-- TITLE BEGINS -->
        <div class="headerimage side-body" style="background-image: url(http://www.themepush.com/demo-kailo/wp-content/uploads/sites/6/2015/03/header.jpg);"></div>
        <!-- TITLE ENDS -->

        <!-- MAIN CONTENT BEGINS -->
        <div class="row">
            <div class=" wowitemboxlist side-body padbot30">
                <!-- Breadcrumb and Sorting -->
                <div class="container-fluid ">
                    <div class="col-md-12">
                        <span class="pagesit fleft"><?php echo "$pageTitle"; ?></span>
                        <div class="sortitemsarea fright">
                            <form method="GET" action="#" class="wowsortitems">
                                <select name="data" id="data" onchange='this.form.submit()'>
                                    <option value="1">Sort by newest</option>
                                    <option value="2">Sort by price: low to high</option>
                                    <option value="3">Sort by price: high to low</option>
                                    <option value="4">Sort by popularity</option>
                                    <option value="5">Sort by oldest</option>
                                    <option value="6">Sort by comments</option>
                                    <option value="7">Sort alphabetically</option>
                                </select>
                                <noscript>
                                    <input type="submit" value="Submit">
                                </noscript>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <!-- Checkout List -->
                        <div class="col-md-12">
                            <div id="edd_checkout_wrap">
                                <form id="edd_checkout_cart_form" method="post">
                                    <div id="edd_checkout_cart_wrap">
                                        <table id="edd_checkout_cart" class="ajaxed">
                                            




                                        <form method="post" action="cart_update.php">
<table id="edd_checkout_cart" class="ajaxed"  width="100%"  cellpadding="6" cellspacing="0"><thead><tr class="edd_cart_header_row"><th class="edd_cart_item_name">Quantity</th><th class="edd_cart_item_name">Name</th><th class="edd_cart_item_name">Price</th><th class="edd_cart_item_name">Total</th></tr></thead>
  <tbody>
    <?php
    if(isset($_SESSION["cart_products"])) //check session var
    {
        $total = 0; //set initial total value
        $b = 0; //var for zebra stripe table 
        foreach ($_SESSION["cart_products"] as $cart_itm)
        {
            //set variables to use in content below
            $product_name = $cart_itm["product_name"];
            $product_qty = $cart_itm["product_qty"];
            $product_price = $cart_itm["product_price"];
            $product_code = $cart_itm["product_code"];
            $subtotal = ($product_price * $product_qty); //calculate Price x Qty
            
            $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
            echo '<tr class=" edd_cart_item '.$bg_color.'">';
            echo '<td class="edd_cart_item_name"><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
            echo '<td class="edd_checkout_cart_item_title">'.$product_name.'</td>';
            echo '<td class="edd_cart_item_price">'.$currency.$product_price.'</td>';
            echo '<td class="edd_cart_remove_item_btn">'.$currency.$subtotal.'</td>';
            $total = ($total + $subtotal); //add subtotal to total var
        }
        
        $grand_total = $total + $shipping_cost + $vat + $tax; //grand total including shipping cost
        foreach($taxes as $key => $value){ //list and calculate all taxes in array
                $tax_amount     = round($total * ($value / 100));
                $tax_item[$key] = $tax_amount;
                $grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
        }
        
        $list_tax       = '';
        foreach($tax_item as $key => $value){ //List all taxes
            $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
        }
        $shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
    }
    ?>
  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>




                                        </table>
                                    </div>
                                <div id="edd_checkout_form_wrap" class="edd_clearfix">
                                    <form id="edd_purchase_form" class="edd_form" action="#" method="POST">
                                        <fieldset id="edd_purchase_submit">



                                <table id="edd_checkout_cart" class="ajaxed">
                                            <thead>
                                                <tr class="edd_cart_header_row">
                                                    <th class="edd_cart_item_name">
                                                        <?php echo $shipping_cost; ?>
                                                    </th>
                                                    <th class="edd_cart_item_price">
                                                        VAT: £ <?php echo $vat ?>0
                                                    </th>
                                                    <th class="edd_cart_actions">
                                                        Tax £<?php echo $tax; ?>.00
                                                    </th>
                                                    <th class="edd_cart_actions">
                                                    Purchase Total: £<?php echo sprintf("%01.2f", $grand_total);?>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>

                                            <input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Pay with PayPal" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MAIN CONTENT ENDS -->

                    </div>
                </div>
            </div>
            <!-- .wowitembox-->
        </div>
    </div>
<!-- MAIN CONTENT ENDS -->