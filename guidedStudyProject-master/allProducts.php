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
    <link rel="stylesheet" href="./css/productStyle.css">
    <link rel="stylesheet" href="./css/option.css">
    <title>Products Section</title>
    <style>
        .product-top {
            transition: transform .2s;
        }

        .product-top:hover {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Safari 3-8 */
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 style="margin-left:50px">Featured Products</h2>
        <hr style="width:400px">
        <header>
            <nav>
                <ul>
                    <li><a href="allproducts.html" id="current">All Products</a></li>
                    <li><a href="frozenmilktea.html">Frozen Milk Tea</a></li>
                    <li><a href="bubbletea.html">Bubble Tea</a></li>
                    <li><a href="boba.html">Boba Milk Tea</a></li>
                    <li><a href="special.html">Special Milk Tea</a></li>
                </ul>
            </nav>
        </header>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/honeydew.png" alt="First Product" class="card-img-top">

                    <!-- Product name and price -->
                    <div class="card-body">
                        <h6>Honey Dew MilkTea</h6>
                        <p class="text-muted card-text">249.00</p>
                        <!-- Rating Section -->
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="View Details">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star-half-o "></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of product 1 -->
            <!-- Start of product 2 -->
            <div class="col-md-3 ">
                <div class="product-top">
                    <img src="./img/lychee.png" alt="" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6>Lychee MilkTea</h6>
                        <p class="text-muted card-text">229.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="View Details">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/ube.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h6>Ube MilkTea</h6>
                        <p class="text-muted card-text">199.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart">Add to Cart </i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <!-- Rating Section -->
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/melon.png" alt="" class="card-img-top">
                    <!-- Product Name -->
                    <div class="card-body">
                        <h6>Watermelon MilkTea</h6>
                        <p class="text-muted card-text">259.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <!-- Rating Section -->
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 5-->
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/mango.png" alt="" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6>Mango MilkTea</h6>
                        <p class="text-muted card-text">299.99</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/strawberry.png" alt="" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6>Strawberry MilkTea </h6>

                        <p class="text-muted card-text">199.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/plum.png" alt="" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6>Plum MilkTea </h6>

                        <p class="text-muted card-text">199.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/matcha.jpeg" alt="" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6>Matcha MilkTea </h6>

                        <p class="text-muted card-text">199.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/cookiesandcream.png" alt="" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6>Cookies'nCream MilkTea </h6>

                        <p class="text-muted card-text">199.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-top">
                    <img src="./img/avocado.png" alt="" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6>Avocado MilkTea </h6>

                        <p class="text-muted card-text">199.00</p>
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                Details
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <h4 style="margin-left:50px">Boba Milk Tea</h2>
                <hr style="width:400px">
                <!-- Start of product 2 -->
                <div class="col-md-3 ">
                    <div class="product-top">
                        <img src="./img/peachboba.png" alt="" class="card-img-top">
                        <!-- Rating Section -->
                        <div class="card-body">
                            <h6>Peach MilkTea</h6>
                            <p class="text-muted card-text">229.00</p>
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="View Details">
                                    Details
                                </button>
                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                            <div class="product-bottom text-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./img/cookiesandcreamboba.png" alt="" class="card-img-top">
                        <div class="card-body">
                            <h6>Cookies'nCream MilkTea</h6>
                            <p class="text-muted card-text">199.00</p>
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="View Details">
                                    Details
                                </button>
                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                    <i class="fa fa-shopping-cart"> </i>
                                </button>
                                <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                            <!-- Rating Section -->
                            <div class="product-bottom text-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./img/cafeboba.png" alt="" class="card-img-top">
                        <!-- Product Name -->
                        <div class="card-body">
                            <h6>Cafe MilkTea</h6>
                            <p class="text-muted card-text">259.00</p>
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                    Details
                                </button>
                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                            <!-- Rating Section -->
                            <div class="product-bottom text-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 5-->
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./img/chocolateboba.png" alt="" class="card-img-top">
                        <!-- Rating Section -->
                        <div class="card-body">
                            <h6>Chocolate MilkTea</h6>
                            <p class="text-muted card-text">299.99</p>
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                    Details
                                </button>
                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                            <div class="product-bottom text-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./img/vanillaboba.png" alt="" class="card-img-top">

                        <!-- Rating Section -->

                        <div class="card-body">
                            <h6>Vanilla MilkTea </h6>

                            <p class="text-muted card-text">199.00</p>
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Add to wishlist">
                                    Details
                                </button>
                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" title=" Add to wishlist">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                            <div class="product-bottom text-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
    </section>

</body>

</html>