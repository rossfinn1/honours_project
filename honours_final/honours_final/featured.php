
<?php
session_start();
include_once 'dbconnect.php';
?>

<!-- Includes Syles top Nav & Side Nav -->
<?php $pageTitle = "Featured"; include("inc/layouts/header.php"); include("inc/layouts/top_nav.php"); include("inc/layouts/side_nav.php"); ?>

<!-- Includes Landing/Featured Content -->
<?php include("inc/layouts/pages/landing.php"); ?>

<!-- Includes Footer and Scripts -->
<?php include("inc/layouts/footer.php"); include("inc/layouts/scripts.php"); ?>
