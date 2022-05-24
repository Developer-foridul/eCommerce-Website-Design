<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Webzoon-eCoommerce</title>
  </head>
  <body>

<?php
$producs = [["Name"=> "T-shirt","price"=>200, "product-quentiy"=> 10, "product_img"=> "imag1.jpg"],
            ["Name"=> "T-shirt","price"=>150, "product-quentiy"=> 20, "product_img"=> "imag1.jpg"],
            ["Name"=> "T-shirt","price"=>250, "product-quentiy"=> 6, "product_img"=> "imag1.jpg"],
            ["Name"=> "T-shirt","price"=>300, "product-quentiy"=> 17, "product_img"=> "imag1.jpg"],
            ["Name"=> "T-shirt","price"=>290, "product-quentiy"=> 11, "product_img"=> "imag1.jpg"],
            ["Name"=> "T-shirt","price"=>205, "product-quentiy"=> 24, "product_img"=> "imag1.jpg"],
            ];

           
?>


    <section>
        <div class="container">
            <div class="product-list-item">
                <div class="product-heading">
                     <h1>Top Selling product</h1>
                </div>

                <?php foreach ($producs as $key => $value) {
                    
                
                 ?>

                <div class="product-img-list">
                <img src="./img/<?php echo $value["product_img"]?> " alt="">

                <div class="product-name">
                  <?php echo $value["Name"]?>
                </div>

                <div class="product-price"><?php echo $value["price"]?> </div>

                <div class="product-quentiy"> <?php echo $value["product-quentiy"] ?> </div>
                

                </div>

               <?php }?>

            </div>
        </div>
    </section>
  </body>
</html>

