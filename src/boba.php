


<?php
include ('functions.php');
    // $milktea->productcheck_login();

    $connection = $milktea->openConnection();
    $query =$connection->prepare("SELECT * FROM `product`");
    $query->execute();
    $fetchId= $query->fetch();
    // echo $fetchId['product_name'];
    $fetchData = $query->fetchAll();
    // echo $fetchData;
    // print_r($fetchData[2]);
    // echo $fetchData[2]['product_name'];
    

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/4.1.3/css/boostrap.min.css">
    <link rel="stylesheet" href="../css/productStyle.css">
    <title>Products Section</title>
</head>

<body>
    <div class="container">
        <h2 style="margin-left:50px">Featured Products</h2>
        <hr style="width:400px">
        <header>
            <nav>
                <ul>
                    <li><a href="frozenmilktea.php">Frozen Milk Tea</a></li>
                    <li><a href="bubbletea.php">Bubble Tea</a></li>
                    <li><a href="boba.php">Boba Milk Tea</a></li>
                    <li><a href="special.php">Special Milk Tea</a></li>
                </ul>
            </nav>
        </header>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product-top">
                <img src="<?php echo $fetchData[22]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Product name and price -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[22]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[22]['product_price'] ?></p>
                        <!-- Rating Section -->
                        <div class="overlay">
                             <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart fa-5px"> Add To Cart</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of product 1 -->
            <!-- Start of product 2 -->
            <div class="col-md-4 ">
                <div class="product-top">
                <img src="<?php echo $fetchData[23]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[23]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[23]['product_price'] ?></p>
                        <div class="overlay">
                              <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart fa-5px"> Add To Cart</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product-top">
                <img src="<?php echo $fetchData[27]['product_image']?>" alt="First Product" class="card-img-top">
                    <div class="card-body">
                        <h6><?php echo $fetchData[27]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[27]['product_price'] ?></p>
                        <div class="overlay">
                             <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart fa-5px"> Add To Cart</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <!-- Rating Section -->
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-4">
                <div class="product-top">
                <img src="<?php echo $fetchData[24]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Product Name -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[24]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[24]['product_price'] ?></p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart fa-5px"> Add To Cart</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <!-- Rating Section -->
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 5-->
            <div class="col-md-4">
                <div class="product-top">
                <img src="<?php echo $fetchData[25]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[25]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[25]['product_price'] ?></p>
                        <div class="overlay">
                             <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart fa-5px"> Add To Cart</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                <img src="<?php echo $fetchData[26]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[26]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[26]['product_price'] ?></p>
                        <div class="overlay">
                             <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart fa-5px"> Add To Cart</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

    </div>
    </section>

</body>

</html>