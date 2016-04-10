<!-- TOP NAVIGATION
    ================================================== -->
    <body class="flat-blue">
        <div class="app-container">
            <div class="row content-container">
                <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                    <div class="container-fluid">

                        <!--SECTION HEADER-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-expand-toggle">
                                <i class="fa fa-bars icon"></i>
                            </button>
                            <ol class="breadcrumb navbar-breadcrumb">
                                <li class="active"><?php echo "$pageTitle"; ?></li>
                            </ol>
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-th icon"></i>
                            </button>
                        </div>
                        <!--SECTION HEADER ENDS-->

                        <!--PROFILE DROPDOWN -->
                        <ul class="nav navbar-nav navbar-right ">
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>  
                            <li class="dropdown profile">
                                <?php if (isset($_SESSION['usr_id'])) { ?> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['usr_name']; ?><span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInDown">
                                    <li>
                                        <div class="profile-info">
                                           <h4 class="username"><?php echo $_SESSION['usr_name']; ?></h4>
                                           <p>Thanks For Visiting</p>
                                           <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Orders</button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> <a href="logout.php">Log Out</a></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!--LOGIN DROPDOWN BEGINS -->
                        <?php } else { ?><li class="dropdown profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <div class="container padtop40 padbot50">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wraplogin">
                                            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform" id="edd_login_form" class="edd_form">
                                                <fieldset>
                                                    <legend>Log into Your Account</legend>
                                                    <p>
                                                        <label>Email</label>
                                                        <input type="text" name="email" required class="form-control" id="edd_user_login" class="required edd-input" />
                                                    </p>
                                                    <p>
                                                        <label>Password</label>
                                                        <input type="password" name="password" required class="form-control" id="edd_user_pass" class="password required edd-input" />
                                                    </p>
                                                    <p>
                                                        <input id="edd_login_submit" type="submit" class="edd_submit" name="login" value="Log In" />
                                                    </p>
                                                    <li class="divider"></li>
                                                </fieldset>
                                            </form>
                                            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <!--REGISTER DROPDOWN BEGINS -->
                    <li class="dropdown profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Register <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <div class="container padtop40 padbot50">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wrapregister">
                                            <!--Start Form -->
                                            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform" id="edd_register_form" class="edd_form" action="#" method="post">
                                                <fieldset>
                                                    <legend>Register New Account</legend>
                                                    <!--Username -->
                                                    <p>
                                                        <label>Name</label>
                                                        <input type="text" name="name" required value="<?php if($error) echo $name; ?>" id="edd-user-login" class="required edd-input" />
                                                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                                    </p>
                                                    <!--Email -->
                                                    <p>
                                                        <label>Email</label>
                                                        <input type="text" name="email" required value="<?php if($error) echo $email; ?>" id="edd-user-email" class="required edd-input" />
                                                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                                                    </p>
                                                    <!--Password -->
                                                    <p>
                                                        <label>Password</label>
                                                        <input type="password" name="password" required id="edd-user-pass" class="password required edd-input" />
                                                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                                                    </p>
                                                    <!--Verify Password -->
                                                    <p>
                                                        <label>Confirm Password</label>
                                                        <input type="password" name="cpassword" required id="edd-user-pass2" class="password required edd-input" />
                                                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span> 
                                                    </p>
                                                    <p>


                                                        <input type="submit" name="signup" value="Register" class="button" />

                                                        <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                                                        <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

                                                    </p>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </ul>
                        </li><?php } ?>

                        <!--CART DROPDOWN-->
                        <li class="dropdown dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span>- Cart<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-cart dropdown-menu animated fadeInDown" role="menu">
                                <legend class="padtop30">Cart</legend>
                                
                                <?php
                                if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
                                {
                                    echo '<div class="cart-view-table-front" id="view-cart">';
                                    echo '<form method="post" action="cart_update.php">';
                                    echo '<table width="100%"  cellpadding="6" cellspacing="0">';
                                    echo '<tbody>';

                                    $total =0;
                                    $b = 0;
                                    foreach ($_SESSION["cart_products"] as $cart_itm)
                                    {
                                        $product_name = $cart_itm["product_name"];
                                        $product_qty = $cart_itm["product_qty"];
                                        $product_price = $cart_itm["product_price"];
                                        $product_code = $cart_itm["product_code"];
        $bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
        echo '<tr class="'.$bg_color.'">';
        echo '<td>'.$product_name.'</td>';
        echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
        echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
        echo '</tr>';
        $subtotal = ($product_price * $product_qty);
        $total = ($total + $subtotal);
    }
    echo '<td colspan="4">';
    echo '<button type="submit">Delete Items</button><a href="checkout.php" class="button">Checkout</a>';
    echo '</td>';
    echo '</tbody>';
    echo '</table>';
    
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
    echo '</form>';
    echo '</div>';

}
?>
<li class="divider"></li>
<li>
    <input id="edd_login_submit" type="submit" class="edd_submit" value="Checkout" />
</li>

</ul>
</li>





<!--CART DROPDOWN ENDS-->


</ul>
</div>
</nav>