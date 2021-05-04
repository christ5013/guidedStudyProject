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
    <style>

    </style>
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
      
            <div class="row ">
                <!-- Product 1 -->
                <div class="col-md-4 ">
                    <div class="product-top" id="top1">

                        <img src="<?php echo $fetchId['product_image']?>" alt="First Product" class="card-img-top">
                        <!-- Product name and price -->
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                        <div class="card-body">
                            <h6><?php echo $fetchId['product_name'] ?></h6>
                            <div class="price"><?php echo  "₱".$fetchId['product_price'] ?><span>₱249.00</span></div>
                            <!-- Rating Section -->
                            <div class="show">
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
                </div>
                <!-- End of product 1 -->
                <!-- Start of product 2 -->
                <div class="col-md-4 ">
                    <div class="product-top">
                    <img src="<?php echo $fetchData[0]['product_image']?>" alt="First Product" class="card-img-top">
                        <!-- Rating Section -->
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                        <div class="card-body">
                            <h6><?php echo $fetchData[0]['product_name'] ?></h6>
                            <div class="price"><?php echo '₱'.$fetchData[0]['product_price'] ?><span>₱249.00</span></div>
                            <div id="show1">
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
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product-top">
                <img src="<?php echo $fetchData[1]['product_image']?>" alt="First Product" class="card-img-top">
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    <div class="card-body">
                        <h6><?php echo $fetchData[1]['product_name'] ?></h6>
                        <div class="price"><?php echo '₱'.$fetchData[1]['product_price'] ?><span>₱249.00</span></div>
                        <!-- <div id="show1" style="display:none"> -->
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
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-4">
                <div class="product-top">
                <img src="<?php echo $fetchData[2]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Product Name -->
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    <div class="card-body">
                        <h6><?php echo $fetchData[2]['product_name'] ?></h6>
                        <div class="price"><?php echo '₱'.$fetchData[2]['product_price'] ?><span>₱249.00</span></div>
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
                <img src="<?php echo $fetchData[3]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    <div class="card-body">
                        <h6><?php echo $fetchData[3]['product_name'] ?></h6>
                        <div class="price"><?php echo '₱'.$fetchData[3]['product_price'] ?><span>₱299.00</span></div>
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
                <img src="<?php echo $fetchData[4]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>

                    <div class="card-body">
                        <h6><?php echo $fetchData[4]['product_name'] ?></h6>

                        <div class="price"><?php echo '₱'.$fetchData[4]['product_price'] ?><span>₱249.00</span></div>
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

    <!-- </section> -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="../js/products.js"></script>
</body>

</html>