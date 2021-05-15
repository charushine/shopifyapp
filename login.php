<?php

include("header1.php");

$hmac = $_GET['hmac'];
$store = $_GET['shop'];
$code = $_GET['code'];



$shopifyClient = new ShopifyClient($store, "", $SHOPIFY_APIKEY, $SHOPIFY_SECRET);
global $shopifyClient;
$access_token = $shopifyClient->getAccessToken($code);

$sql = "INSERT INTO installs(access_token,store)VALUES('$access_token','$store')";
mysqli_query($db, $sql);


echo 'You are been automatically redirected...';
$urls = "https://{$store}/admin/apps/{$SHOPIFY_APIKEY}/{$SHOPIFY_DIRECTORY_NAME}/dashboard.php?shop={$store}";
echo '<script type="text/javascript">window.top.location.href = "' . $urls . '"; </script>';
//header("Location: {$urls}");
  






