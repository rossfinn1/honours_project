 <!-- PAGE CONTENT / PRODUCT DETAIL
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
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- Product Detail -->
                    <div class="col-md-12">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">
                                <article class="contentdownloadphp">
                                    <div class="row">

                                    <!-- Database Info -->
                                   <?php  $id = $_GET["id"]; 
                                    $results = $mysqli->query("SELECT id, product_code, product_name, product_desc, product_log_desc, Category, Retailer, product_img_name, price FROM products where id = " . $id);
                                    //While Loop
                                    if($results){ 
                                    $products_item = '<div class="loop">';
                                    //fetch results set as object and output HTML
                                    while($obj = $results->fetch_object())
                                    {
                                    //Product info display
                                    $id = ["id"];
                                    $products_item .= <<<EOT
                                        <div class="col-md-3 fright padbot20">
                                            <span class="entryitemname"><b>Item: </b>{$obj->product_name}<br/></span>
                                            <span class="entryprice"><b>Price:</b> {$obj->price}<br/></span>
                                            <span class="entrysku"><b>Retailer: </b> {$obj->Retailer}<br/></span>
                                            <span class="entrysku"><b>Category: </b> {$obj->Category}<br/></span>
                                            <span class="entrysku"><b>Product Code: </b> {$obj->product_code}<br/></span>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="padbot20">
                                                <img src="img/thumbnails/{$obj->product_img_name}"></div>
                                                <p>
                                                    {$obj->product_desc}
                                                </p>
                                                <p>
                                                    {$obj->product_log_desc}
                                                </p>
                                            </div>
                                        </div>

EOT;
}
$products_item .= '</div>';
echo $products_item;
}
?>
                                    </article>
                                </main>
                            </div>
                        </div>
                        <!-- MAIN CONTENT ENDS -->

                    </div>
                </div>
            </div>

            <!-- MAIN CONTENT ENDS -->

        </div>
    </div>
</div>
<!-- .wowitembox-->
</div>
            <!-- MAIN CONTENT ENDS -->