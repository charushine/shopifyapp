<?php

include("header1.php");

include("header.php");



$getProductLink = '/admin/api/2021-04/products.json';

$result = $sc->call('GET', $getProductLink);

//Create new product

// $products_array = array(
//     "product" => array(
//         "title"        => "New Test Product 123444",
//         "body_html"    => "<strong>Description!</strong>",
//         "vendor"       => "DC",
//         "product_type" => "Test",
//         "published"    => true ,
//         "variants"     => array(
//             array(
//                 "sku"     => "t_009",
//                 "price"   => 20.00,
//                 "grams"   => 200,
//                 "taxable" => false,
//                 "inventory_policy" => "deny",
//                 "inventory_quantity" => 0,
//                 "inventory_management" => "shopify",
//             )
//             ),
//             "images" => array(
//                 array(
//                     "src" => "https://cdn.shopify.com/s/files/1/0566/9663/5562/files/173-1732194_myntra-logo-png-transparent-png.png?v=1622788092"
//                 )
//             ),
//     )
// );

//     $getr = $sc->call('POST',"/admin/api/2021-04/products.json", $products_array);

//     echo'<pre>';print_r($getr);


?>

<div class="container-fluid">

    <div class="row">
    <div>
  <div class="Polaris-Page">
    <div class="Polaris-Page-Header Polaris-Page-Header--isSingleRow Polaris-Page-Header--mobileView Polaris-Page-Header--noBreadcrumbs Polaris-Page-Header--mediumTitle">
      <div class="Polaris-Page-Header__Row">
        <div class="Polaris-Page-Header__TitleWrapper">
          <div>
            <div class="Polaris-Header-Title__TitleAndSubtitleWrapper">
              <h1 class="Polaris-Header-Title">Sales by product</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="Polaris-Page__Content">
      <div class="Polaris-Card">
        <div class="">
          <div class="Polaris-DataTable__Navigation"><button class="Polaris-Button Polaris-Button--disabled Polaris-Button--plain Polaris-Button--iconOnly" aria-label="Scroll table left one column" type="button" disabled=""><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16z"></path>
                    </svg></span></span></span></button><button class="Polaris-Button Polaris-Button--plain Polaris-Button--iconOnly" aria-label="Scroll table right one column" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M8 16a.999.999 0 0 1-.707-1.707L11.586 10 7.293 5.707a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5A.997.997 0 0 1 8 16z"></path>
                    </svg></span></span></span></button></div>
          <div class="Polaris-DataTable">
            <div class="Polaris-DataTable__ScrollContainer">
              <table class="Polaris-DataTable__Table">
                <thead>
                  <tr>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col">Product</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Price</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">SKU Number</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Net quantity</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Net sales</th>
                  </tr>
                  <tr>
                    <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--total" scope="row">Totals</th>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--total"></td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--total"></td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--total Polaris-DataTable__Cell--numeric">255</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--total Polaris-DataTable__Cell--numeric">$155,830.00</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                    <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn" scope="row">Emerald Silk Gown</th>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$875.00</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">124689</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">140</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$122,500.00</td>
                  </tr>
                  <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                    <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn" scope="row">Mauve Cashmere Scarf</th>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$230.00</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">124533</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">83</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$19,090.00</td>
                  </tr>
                  <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                    <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn" scope="row">Navy Merino Wool Blazer with khaki chinos and yellow belt</th>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$445.00</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">124518</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">32</td>
                    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$14,240.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="PolarisPortalsContainer"></div>
</div>

        <h2 class="title">Products</h2>

        <table class="table table-striped">

            <thead>

                <tr>

                    <th scope="col">#</th>

                    <th scope="col">Product Image</th>

                    <th scope="col">Product Name</th>

                    <th scope="col">Action</th>

                </tr>

            </thead>

            <tbody>

                <?php

                if ($result) {

                    $count = 1;

                    foreach ($result as $key => $value) {
                        ?>
                        <tr>

                            <th scope="row"><?php echo $count ?></th>

                            <td><img src="<?php echo $value['image']['src'] ?>" width="50" height="50"></td>

                            <td><?php echo $value['title'] ?></td>

                            <td>-</td>

                        </tr>
                    <?php
                    $count++;
                    }



                }

                ?>

            </tbody>

        </table>

    </div>

</div>

</body>

</html>