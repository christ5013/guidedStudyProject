<?php
// include another php file 
    include ('functions.php');
// instance variable of class Milktea calling a function check_login
    $milktea->check_login();
  
?>
<?php
$email = $_SESSION['email'];
    
if(isset($_POST['button1'])){
    $id = $_POST['firstId'];
    $connection = $milktea->openConnection();
    // $query = $connection->prepare("INSERT INTO `cart` (`product_id`, `email` , `product_image`, `product_name`, `product_price`) SELECT `product_id` , `product_image` ,`product_name`, `product_price` FROM `product` WHERE `product_id` = '$id'");
    $fulljoin =$connection->query("SELECT * FROM `product` FULL JOIN `users`");
    $query = $connection->prepare("INSERT INTO `cart` (`product_id` , `product_image`, `product_name`, `product_price`) (SELECT * FROM `product` FULL JOIN `users`) WHERE `product_id` = '$id' ");
    // $query = $connection->prepare("INSERT INTO `cart`(`email`) SELECT `email` FROM users WHERE email = '$email'");
    $query->execute();


}


if(isset($_POST['button2'])){
    $id = $_POST['secondId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id` , `product_image`, `product_name`, `product_price`) SELECT `product_id` , `product_image` ,`product_name`, `product_price` FROM `product` WHERE `product_id` = '$id'");
    $query->execute();
}

if(isset($_POST['button3'])){
    $id = $_POST['thirdId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id` , `product_image`, `product_name`, `product_price`) SELECT `product_id` , `product_image` ,`product_name`, `product_price` FROM `product` WHERE `product_id` = '$id'");
    $query->execute();
}

if(isset($_POST['button4'])){
    $id = $_POST['fourId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id` , `product_image`, `product_name`, `product_price`) SELECT `product_id` , `product_image` ,`product_name` ,`product_price` FROM `product` WHERE `product_id` = '$id'");
    $query->execute();
}

if(isset($_POST['button5'])){
    $id = $_POST['fiveId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id` , `product_image`, `product_name`, `product_price`) SELECT `product_id` , `product_image` ,`product_name`, `product_price` FROM `product` WHERE `product_id` = '$id'");
    $query->execute();
}

if(isset($_POST['button6'])){
    $id = $_POST['sixId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id` , `product_image`, `product_name`, `product_price`) SELECT `product_id` , `product_image` ,`product_name`, `product_price` FROM `product` WHERE `product_id` = '$id'");
    $query->execute();
}

// fecth data from the database
    $connection = $milktea->openConnection();
    $query =$connection->prepare("SELECT * FROM `product`");
    $query->execute();
    $fetchId= $query->fetch();
    $fetchData = $query->fetchAll();

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
    <!-- css -->
    <link rel="stylesheet" href="../css/index_style.css">
    <link rel="stylesheet" href="../css/productStyle.css">
    <title>Products Section</title>
    <style>

    </style>
</head>

<body>
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top one-edge-shadow">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="store-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Cart -->
      <div class="cart" id="cart">
        <div class="cart_container d-flex flex-row align-items-center justify-content-end">
          <div class="cart_icon">
            <a class="nav-link" href="cart.php" id="icon"><i class="fa fa-shopping-cart"
                style="font-size:30px;color:rgb(20, 189, 231)"></i></a>
            </div>
          </div>
      </div>
       <!-- logout -->
      <div class="logout" id="logout">
        <div class="logout d-flex flex-row align-items-center justify-content-end">
          <div class="logout_icon">
            <a href="form.php?logout=<?php echo $milktea->logout()?>"><i class="fa fa-sign-out"></i> Log out</a>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product2.php">Products</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

<!-- second navigation bar -->
<div class="container" id = "secondNav">
    <h2 style="margin-left:50px">Featured Products</h2>
    <hr style="width:400px">
        <header>
                <div class = "nav">
                    <ul>
                        <li><a href="frozenmilktea.php">Frozen Milk Tea</a></li>
                        <li><a href="bubbletea.php">Bubble Tea</a></li>
                        <li><a href="boba.php">Boba Milk Tea</a></li>
                        <li><a href="special.php">Special Milk Tea</a></li>
                    </ul>
                </div>
        </header>
</div>
      <form method="POST">
            <div class="row ">
                <!-- Product 1 -->
                <div class="col-md-4 ">
                    <div class="product-top" id="top1">
                    <input type="hidden" name="firstId" value="<?php echo $fetchId['product_id']?>">
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
                                    <button name="button1" class="btn btn-secondary" title="Add to cart">
                                        <i class="fa fa-shopping-cart fa-5px" > Add To Cart</i>
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
                    <input type="hidden" name="secondId" value="<?php echo $fetchData[0]['product_id']?>">
                    <img src="<?php echo $fetchData[0]['product_image']?>" alt="First Product" class="card-img-top">
                        <!-- Rating Section -->
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                        <div class="card-body">
                            <h6><?php echo $fetchData[0]['product_name'] ?></h6>
                            <div class="price"><?php echo '₱'.$fetchData[0]['product_price'] ?><span>₱249.00</span></div>
                            <div id="show1">
                            <div class="overlay">
                                <button name="button2" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="thirdId" value="<?php echo $fetchData[1]['product_id']?>">
                <img src="<?php echo $fetchData[1]['product_image']?>" alt="First Product" class="card-img-top">
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    <div class="card-body">
                        <h6><?php echo $fetchData[1]['product_name'] ?></h6>
                        <div class="price"><?php echo '₱'.$fetchData[1]['product_price'] ?><span>₱249.00</span></div>
                        <!-- <div id="show1" style="display:none"> -->
                            <div class="overlay">
                                <button name= "button3" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="fourthId" value="<?php echo $fetchData[2]['product_id']?>">
                <img src="<?php echo $fetchData[2]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Product Name -->
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    <div class="card-body">
                        <h6><?php echo $fetchData[2]['product_name'] ?></h6>
                        <div class="price"><?php echo '₱'.$fetchData[2]['product_price'] ?><span>₱249.00</span></div>
                        <div class="overlay">
                            <button name="button4" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="fifthId" value="<?php echo $fetchData[3]['product_id']?>">
                <img src="<?php echo $fetchData[3]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    <div class="card-body">
                        <h6><?php echo $fetchData[3]['product_name'] ?></h6>
                        <div class="price"><?php echo '₱'.$fetchData[3]['product_price'] ?><span>₱299.00</span></div>
                        <div class="overlay">
                            <button name="button5" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="sixId" value="<?php echo $fetchData[4]['product_id']?>">
                <img src="<?php echo $fetchData[4]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>

                    <div class="card-body">
                        <h6><?php echo $fetchData[4]['product_name'] ?></h6>

                        <div class="price"><?php echo '₱'.$fetchData[4]['product_price'] ?><span>₱249.00</span></div>
                        <div class="overlay">
                            <button name="button6" class="btn btn-secondary" title="Add to cart">
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
        </form>

    </div>

    <!-- </section> -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="../js/products.js"></script>
</body>

</html>