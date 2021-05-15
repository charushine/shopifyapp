<?php

include("header1.php");

$store = $_GET['shop'];	
$redirect_uri = urlencode($SHOPIFY_REDIRECT_URI);

$sql = "SELECT * FROM installs WHERE store ='$store'";
$result = mysqli_query($db, $sql);
$rowcount = mysqli_num_rows($result);


if($rowcount > 0) {
	echo 'Welcome to Advanced Pre-order...';
	echo '<script type="text/javascript">window.top.location.href = "https://'.$_GET['shop'].'/admin/apps/'.$SHOPIFY_APIKEY.'/'.$SHOPIFY_DIRECTORY_NAME.'/dashboard.php?shop=' . $_GET['shop'] . '"; </script>';
}
else{
	echo 'Welcome to Advanced Pre-order...';
	$url = "https://{$store}/admin/oauth/authorize?client_id={$SHOPIFY_APIKEY}&scope={$SHOPIFY_SCOPES}&redirect_uri={$redirect_uri}";
	header("Location: {$url}");
}


