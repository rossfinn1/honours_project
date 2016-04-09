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
                                            <thead>
                                                <tr class="edd_cart_header_row">
                                                    <th class="edd_cart_item_name">
                                                        Item Name
                                                    </th>
                                                    <th class="edd_cart_item_price">
                                                        Item Price
                                                    </th>
                                                    <th class="edd_cart_actions">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <!-- cart item 1 -->
                                                <tr class="edd_cart_item">
                                                    <td class="edd_cart_item_name">
                                                        <div class="edd_cart_item_image">
                                                            <img width="25" height="25" src="http://www.themepush.com/demo-kailo/wp-content/uploads/sites/6/edd/2015/03/172_1-150x150.jpg"
                                                            class="attachment-25x25 wp-post-image" alt="172_1" />
                                                        </div>
                                                        <span class="edd_checkout_cart_item_title">Eyes Wide Shut</span>
                                                    </td>
                                                    <td class="edd_cart_item_price">
                                                        $17.00
                                                    </td>
                                                    <td class="edd_cart_actions">
                                                        <a class="edd_cart_remove_item_btn" href="#">Remove</a>
                                                    </td>
                                                </tr>

                                                <!-- cart item 2 -->
                                                <tr class="edd_cart_item">
                                                    <td class="edd_cart_item_name">
                                                        <div class="edd_cart_item_image">
                                                            <img width="25" height="25" src="http://www.themepush.com/demo-kailo/wp-content/uploads/sites/6/edd/2015/03/163_1-150x150.jpg"
                                                            class="attachment-25x25 wp-post-image" alt="163_1" />
                                                        </div>
                                                        <span class="edd_checkout_cart_item_title">Travel Fashion</span>
                                                    </td>
                                                    <td class="edd_cart_item_price">
                                                        $19.00
                                                    </td>
                                                    <td class="edd_cart_actions">
                                                        <a class="edd_cart_remove_item_btn" href="#">Remove</a>
                                                    </td>
                                                </tr>

                                                <!-- cart item 3 -->
                                                <tr class="edd_cart_item">
                                                    <td class="edd_cart_item_name">
                                                        <div class="edd_cart_item_image">
                                                            <img width="25" height="25" src="http://www.themepush.com/demo-kailo/wp-content/uploads/sites/6/edd/2015/03/168_1-150x150.jpg"
                                                            class="attachment-25x25 wp-post-image" alt="168_1" />
                                                        </div>
                                                        <span class="edd_checkout_cart_item_title">Bananas</span>
                                                    </td>
                                                    <td class="edd_cart_item_price">
                                                        $6.50
                                                    </td>
                                                    <td class="edd_cart_actions">
                                                        <a class="edd_cart_remove_item_btn" href="#">Remove</a>
                                                    </td>
                                                </tr>

                                                <!-- cart item 4 -->
                                                <tr class="edd_cart_item">
                                                    <td class="edd_cart_item_name">
                                                        <div class="edd_cart_item_image">
                                                            <img width="25" height="25" src="http://www.themepush.com/demo-kailo/wp-content/uploads/sites/6/edd/2015/03/5_1-150x150.jpg"
                                                            class="attachment-25x25 wp-post-image" alt="5_1" />
                                                        </div>
                                                        <span class="edd_checkout_cart_item_title">Sandy Banner</span>
                                                    </td>
                                                    <td class="edd_cart_item_price">
                                                        $8.00
                                                    </td>
                                                    <td class="edd_cart_actions">
                                                        <a class="edd_cart_remove_item_btn" href="#">Remove</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="edd_cart_footer_row">
                                                    <td>
                                                        Total: <span class="edd_cart_amount" data-subtotal="50.5"
                                                        data-total="50.5">$50.50</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </form>
                                <div id="edd_checkout_form_wrap" class="edd_clearfix">
                                    <form id="edd_purchase_form" class="edd_form" action="#" method="POST">
                                        <fieldset id="edd_purchase_submit">
                                            <p id="edd_final_total_wrap">
                                                <strong>Purchase Total:</strong>
                                                <span class="edd_cart_amount" data-subtotal="50.5" data-total="50.5">$50.50</span>
                                            </p>
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
</div>
</div>
<!-- MAIN CONTENT ENDS -->
</div>
</div>
</div>