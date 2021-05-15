<?php
include("header1.php");
include("header.php");

$getProductLink = '/admin/api/2021-04/products.json';

$result = $sc->call('GET', $getProductLink);
?>
<div class="container-fluid">
    <div class="row">
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