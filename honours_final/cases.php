<!-- Login/register/logout Functions -->
<?php include("inc/layouts/sessions/register.php"); ?>

<!-- Includes Syles top Nav & Side Nav -->
<?php $pageTitle = "Welcome"; include("inc/layouts/header.php"); include("inc/layouts/top_nav.php"); include("inc/layouts/side_nav.php"); ?>

<!-- Includes Landing/Featured Content -->
 <!-- PAGE CONTENT / PRODUCT VIEW
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
<div class="products">
<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT id, product_code, product_name, product_desc, product_img_name, price FROM cases ORDER BY id ASC");
if($results){ 
$products_item = '<div class="loop">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{

$id = ["id"];
$products_item .= <<<EOT
    <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="wowitembox">
                                <div class="wowitemboxinner">
                                    <div class="imagearea">
                                    <form method="post" action="cart_update.php">
                                        <div class="product-thumb"><img src="img/thumbnails/{$obj->product_img_name}"></div>
                                            <div class="caption">
                                                <div class="blur">
                                                </div>
                                            <div class="caption-text">
                                                <div class="captionbuttons">
                                                    <a href="product_detail.php?id={$obj->id}" class="captiondetails"><i class="fa fa-link"></i> View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="notesarea">

                                        <div class="notesbottom">
                                                <div class="price fright">
                                                    {$currency}{$obj->price}
                                                </div>

                                                <!--LINK DETAIL -->
                                            <a href="product_detail.php?id={$obj->id}"><h2>{$obj->product_name}</h2>
                                            </a>

                                        <div class="description">
                                                <p>
                                                    {$obj->product_desc}
                                                </p>
                                            </div>

                                        <fieldset class="field">
                                         <label class ="pull-left">
                                        <input type="text" size="2" maxlength="2" name="product_qty" value="1" />
                                        
                                         </label>
                                        </fieldset>

                                        <form class="form1">
                                        <input type="hidden" name="product_code" value="{$obj->product_code}" />
                                        <input type="hidden" name="type" value="add" />
                                        <input type="hidden" name="return_url" value="{$current_url}" />
                                        <div align="right"><button type="submit" class="add-cart"> <i class="fa fa-shopping-cart"></i>
Add To Cart</button>
                                        </form>

                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .wowitemboxinner-->
                        </div>
                    </div>
EOT;
}
$products_item .= '</div>';
echo $products_item;
}
?>
</div>
                    
                </div>
                <!-- MAIN CONTENT ENDS -->
            </div>
        </div>

<!-- Includes Footer and Scripts -->
<?php include("inc/layouts/footer.php"); include("inc/layouts/scripts.php"); ?>
