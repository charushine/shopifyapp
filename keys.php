<?php
$MYSQL_HOST = "localhost";
$MYSQL_DB = "shinedez_banner";
$MYSQL_USER = "root";
$MYSQL_PASS = "wp12hkrmtE4s";

// Create connection
$db = mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB);

// Check connection
if (!$db){
  die("Connection failed: " . mysqli_connect_error());
}

$SHOPIFY_APIKEY = "d4b82b5cfeacf9718892f1964ac55044";
$SHOPIFY_SECRET = "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";
$SHOPIFY_SCOPES = "read_inventory,write_inventory,read_products,write_products";
$SHOPIFY_API_VERSION = "2021-05";
$SHOPIFY_DIRECTORY_NAME = "CharuTestApp";
$SHOPIFY_DOMAIN_URL = "https://shinedezigninfotech.com/CharuTestApp/";
$SHOPIFY_REDIRECT_URI = "https://shinedezigninfotech.com/CharuTestApp/login.php";

