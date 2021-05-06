<?php
// include another php file 
    include ('functions.php');
// instance variable of class Milktea calling a function check_login
    $milktea->check_login();
?>
<?php 

if(isset($_POST['button17'])){
    $id = $_POST['seventeenId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button18'])){
    $id = $_POST['eighteenId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button19'])){
    $id = $_POST['nineteenId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button20'])){
    $id = $_POST['twentyId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button21'])){
    $id = $_POST['twentyoneId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button22'])){
    $id = $_POST['twentytwoId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button23'])){
    $id = $_POST['twentythreeId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button24'])){
    $id = $_POST['twentyfourId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button25'])){
    $id = $_POST['twentyfiveId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
}

if(isset($_POST['button26'])){
    $id = $_POST['twentysixId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
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
    <title>bubbletea</title>
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
            <a class="nav-link" href="product.php">Products</a>
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
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="seventeenId" value="<?php echo $fetchData[12]['product_id']?>">
                <img src="<?php echo $fetchData[12]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Product name and price -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[12]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[12]['product_price'] ?></p>
                        <!-- Rating Section -->
                        <div class="overlay">
                             <button name="button17" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of product 1 -->
            <!-- Start of product 2 -->
            <div class="col-md-4 ">
                <div class="product-top">
                <input type="hidden" name="eighteenId" value="<?php echo $fetchData[13]['product_id']?>">
                <img src="<?php echo $fetchData[13]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[13]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[13]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button18" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="nineteenId" value="<?php echo $fetchData[14]['product_id']?>">
                <img src="<?php echo $fetchData[14]['product_image']?>" alt="First Product" class="card-img-top">
                    <div class="card-body">
                        <h6><?php echo $fetchData[14]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[14]['product_price'] ?></p>
                        <div class="overlay">
                           <button name="button19" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="twentyId" value="<?php echo $fetchData[15]['product_id']?>">
                <img src="<?php echo $fetchData[15]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Product Name -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[15]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[15]['product_price'] ?></p>
                        <div class="overlay">
                            <button name="button20" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="twentyoneId" value="<?php echo $fetchData[16]['product_id']?>">
                <img src="<?php echo $fetchData[16]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[16]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[16]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button21" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="twentytwoId" value="<?php echo $fetchData[17]['product_id']?>">
                <img src="<?php echo $fetchData[17]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[17]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[17]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button22" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="twentythreeId" value="<?php echo $fetchData[18]['product_id']?>">
                <img src="<?php echo $fetchData[18]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[18]['product_name'] ?> </h6>

                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[18]['product_price'] ?></p>
                        <div class="overlay">
                              <button name="button23" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="twentyfourId" value="<?php echo $fetchData[19]['product_id']?>">
                <img src="<?php echo $fetchData[19]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[19]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[19]['product_price'] ?></p>
                        <div class="overlay">
                              <button name="button24" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="twentyfiveId" value="<?php echo $fetchData[20]['product_id']?>">
                <img src="<?php echo $fetchData[20]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[20]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[20]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button25" class="btn btn-secondary" title="Add to cart">
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
                <input type="hidden" name="twentysixId" value="<?php echo $fetchData[21]['product_id']?>">
                <img src="<?php echo $fetchData[21]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[21]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '₱'.$fetchData[21]['product_price'] ?></p>
                        <div class="overlay">
                              <button name="button26" class="btn btn-secondary" title="Add to cart">
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