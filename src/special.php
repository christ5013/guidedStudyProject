<?php
// include another php file 
    include ('functions.php');
// instance variable of class Milktea calling a function check_login
    $milktea->check_login();
?>
<?php 

$email = $_SESSION['email'];
if(isset($_POST['button33'])){
    $id = $_POST['thirtythreeId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}
if(isset($_POST['button34'])){
    $id = $_POST['thirtyfourId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}
if(isset($_POST['button35'])){
    $id = $_POST['thirtyfiveId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}
if(isset($_POST['button36'])){
    $id = $_POST['thirtysixId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}
if(isset($_POST['button37'])){
    $id = $_POST['thirtysevenId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}
if(isset($_POST['button38'])){
    $id = $_POST['thirtyeigthId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}
if(isset($_POST['button39'])){
    $id = $_POST['thirtynineId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}
if(isset($_POST['button40'])){
    $id = $_POST['fourtyId'];
    $connection = $milktea->openConnection();
    $query = $connection->prepare("INSERT INTO `cart` (`product_id`,`email` , `product_image`, `product_name`, `product_price`) SELECT `product`.`product_id`,`users`.`email` , `product`.`product_image` ,`product`.`product_name`, `product`.`product_price` FROM `product` CROSS JOIN `users` WHERE `product_id` = '$id' AND `email` ='$email' " );
    $query->execute();
    echo "<script>alert('successfully added to cart!') </script>";
}

// fecth data from the database
    $connection = $milktea->openConnection();
    $query =$connection->prepare("SELECT * FROM `product`");
    $query->execute();
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
  
    <title>Special Product</title>
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
            <div id="cart" class="cart">
                <div class="container">
                    <span class="p1 fa-stack fa-2x has-badge" data-count="<?php $milktea->countCart(); ?>">
                        <a class="nav-link" href="cart.php" id="icon"><i class="fa fa-shopping-cart" data-count="4b" style="font-size:30px;color:rgb(20, 189, 231)"></i></a>
                    </span>
                </div>
            </div>
       <!-- logout -->
      <div class="logout" id="logout">
        <div class="logout d-flex flex-row align-items-center justify-content-end">
          <div class="logout_icon">
            <a href="landing.php?logout=<?php echo $milktea->logout()?>"><i class="fa fa-sign-out"></i> Log out</a>
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
<form method = "POST">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtythreeId" value="<?php echo $fetchData[40]['product_id']?>">
                <img src="<?php echo $fetchData[40]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Product name and price -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[40]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '???'.$fetchData[40]['product_price'] ?></p>
                        <!-- Rating Section -->
                        <div class="overlay">
                              <button name="button33" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o "></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of product 1 -->
            <!-- Start of product 2 -->
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtythreeId" value="<?php echo $fetchData[28]['product_id']?>">
                <img src="<?php echo $fetchData[28]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[28]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '???'.$fetchData[28]['product_price'] ?></p>
                        <div class="overlay">
                              <button name="button33" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtyfourId" value="<?php echo $fetchData[29]['product_id']?>">
                <img src="<?php echo $fetchData[29]['product_image']?>" alt="First Product" class="card-img-top">
                    <div class="card-body">
                        <h6><?php echo $fetchData[29]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '???'.$fetchData[29]['product_price'] ?></p>
                        <div class="overlay">
                              <button name="button34" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtyfiveId" value="<?php echo $fetchData[30]['product_id']?>">
                <img src="<?php echo $fetchData[30]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Product Name -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[30]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '???'.$fetchData[30]['product_price'] ?></p>
                        <div class="overlay">
                            <button name="button35" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 5-->
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtysixId" value="<?php echo $fetchData[31]['product_id']?>">
                <img src="<?php echo $fetchData[31]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->
                    <div class="card-body">
                        <h6><?php echo $fetchData[31]['product_name'] ?></h6>
                        <p class="text-muted card-text"><?php echo '???'.$fetchData[31]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button36" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtysevenId" value="<?php echo $fetchData[32]['product_id']?>">
                <img src="<?php echo $fetchData[32]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[32]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '???'.$fetchData[32]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button37" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtyeightId" value="<?php echo $fetchData[33]['product_id']?>">
                <img src="<?php echo $fetchData[33]['product_image']?>" alt="First Product" class="card-img-top">


                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[33]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '???'.$fetchData[33]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button38" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="thirtynineId" value="<?php echo $fetchData[34]['product_id']?>">
                <img src="<?php echo $fetchData[34]['product_image']?>" alt="First Product" class="card-img-top">

                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[34]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '???'.$fetchData[34]['product_price'] ?></p>
                        <div class="overlay">
                             <button name="button39" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                <input type="hidden" name="fourtyId" value="<?php echo $fetchData[35]['product_id']?>">
                <img src="<?php echo $fetchData[35]['product_image']?>" alt="First Product" class="card-img-top">
                    <!-- Rating Section -->

                    <div class="card-body">
                        <h6><?php echo $fetchData[35]['product_name'] ?></h6>

                        <p class="text-muted card-text"><?php echo '???'.$fetchData[35]['product_price'] ?></p>
                        <div class="overlay">
                              <button name="button40" class="btn btn-secondary" title="Add to cart">
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
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
    </div>
    </section>

</body>

</html>