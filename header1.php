<?php 
ob_start();
set_time_limit(0);
ini_set("display_errors", 1);
error_reporting(E_ALL);
require 'keys.php';
require 'shopify.php';

$store = $_GET['shop'];

$sql = "SELECT * FROM installs WHERE store ='$store'";
$result = mysqli_query($db, $sql);
$fieldinfo = $result -> fetch_assoc();
$access_token = $fieldinfo['access_token'];

$sc = new ShopifyClient($store, $access_token, $SHOPIFY_APIKEY, $SHOPIFY_SECRET);

header("Access-Control-Allow-Origin: *");
header('Frame-Ancestors: ALLOWALL');
header('X-Frame-Options: ALLOWALL');
header('Set-Cookie: cross-site-cookie=bar; SameSite=None; Secure');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
?>