<?php
$currency = '£'; //Currency Character or code

$db_username = 'root';
$db_password = '';
$db_name = 'testdb';
$db_host = '127.0.0.1';

$shipping_cost      = 1.50;
$vat     = 5.50;
$tax      = 3.00; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );                      
//connect to MySql                      
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);                        
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>