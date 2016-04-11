<!-- Login/register/logout Functions -->
<?php include("inc/layouts/sessions/register.php"); ?>


<!DOCTYPE html>
<html lang="en-US">
<head>
    <title> <?php echo "$pageTitle"; ?> </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/libs/animate.min.css">
    <link rel='stylesheet' href='style.css' type='text/css' media='all' />

    <!-- CSS Custom Styles -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/themes/theme.css">
</head>

<!-- Includes Syles top Nav & Side Nav -->
<?php $pageTitle = "Cases"; include("inc/layouts/top_nav.php"); include("inc/layouts/side_nav.php"); ?>

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

$results = $mysqli->query("SELECT id, product_code, product_name, product_desc, product_img_name, price FROM products ORDER BY id ASC");
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
