<?php 

// include php file name function 
 include ('functions.php');
 //call a variable instantiated to call a class name Milktea 
//  call a function name check_login
 $milktea->check_login();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tea'kTalker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../img/logo.png" type="image/icon type">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- CSS Files -->

  <link rel="stylesheet" href="../css/index_style.css">

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
          <span class="p1 fa-stack fa-2x has-badge" data-count="<?php $milktea->countCart();?>">
          <a class="nav-link" href="cart.php" id="icon"><i class="fa fa-shopping-cart" data-count="4b"
              style="font-size:30px;color:rgb(20, 189, 231)"></i></a>
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

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="container">
      
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/image1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/image2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/image3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Who We Are</h3>
          <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
          <p>
            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
          </p>
          <div class="text-center text-lg-start">
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Read More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="../img/banner.png" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section>
<!-- End About Section -->


<!-- Starts of the Section for the favorites -->

  <div class="container mt-40">
    <h3 class="text-center">Favorites</h3>
    <div class="row mt-30">
      <!-- This is the first pic -->
        <div class="col-md-4 col-sm-6">
            <div class="box3">
                <img src="../img/fav1.jpg" height="375px;">
                <div class="box-content">
                  <h3 class="text-center text-white">Jasmine</h3>
                  <p class="description">
                    This is the perfect option for those looking for a stronger tea flavor. Often times, there are variations which include Jasmine green tea which is just as amazing, only a little lighter. 
                  </p>
                </div>
            </div>
        </div>
        <!-- This is for 2nd pic -->
        <div class="col-md-4 col-sm-6">
            <div class="box3">
                <img src="../img/fav2.jpeg">
                <div class="box-content">
                  <h3 class="text-center text-white">HongKong Milk Tea</h3>
                  <p class="description">
                    This style of milk tea is a tea drink made from black tea and milk. It is usually part of lunch in Hong Kong tea culture.
                  </p>
                </div>
            </div>
        </div>
         <!-- This is the 3rd pic -->
        <div class="col-md-4 col-sm-6">
            <div class="box3">
                <img src="../img/fav3.jpg">
                <div class="box-content">
                    <h3 class="text-center text-white">Taro Milk Tea</h3>
                    <p class="description">
                      This fun purple drink is made from a slightly sweet Asian root called Taro. Don’t let the unique name or color scare you away, or you’re sure to regret it.
                  </p>
                </div>
            </div>
        </div>
    </div>
  </div>
 <!-- This is the 4th pic -->
  <div class="container mt-40">
    <div class="row mt-30">
        <div class="col-md-4 col-sm-6">
            <div class="box3">
                <img src="../img/fav4.jpg" height = "400px";>
                <div class="box-content">
                    <h3 class="text-center text-white">Honeydew Milk Tea</h3>
                    <p class="description">
                      This flavor is amazingly refreshing in the blazing summer heat. If you love fruit, this is your drink to start with.
                    </p>
                  </div>
            </div>
        </div>
         <!-- This is the 5th pic -->
        <div class="col-md-4 col-sm-6">
            <div class="box3">
                <img src="../img/fav5.jpg">
                <div class="box-content">
                  <h3 class="text-center text-white">Strawberry Milk Tea</h3>
                  <p class="description">
                    Bring back childhood memories with this fresh take on the simple but delicious strawberry milk. 
                  </p>
                </div>
            </div>
        </div>
         <!-- This is the 6th pic -->
        <div class="col-md-4 col-sm-6">
            <div class="box3">
                <img src="../img/fav6.jpg" height="400px">
                <div class="box-content">
                  <h3 class="text-center text-white">Classic Milk Tea</h3>
                  <p class="description">
                    Its rich and creamy flavor combined with its smooth tea flavor is sure to send you straight to your happy place.
                  </p>
                </div>
            </div>
        </div>
    </div>
  </div>
  
<!-- Ends of the Section for the favorites  -->


  <!-- Subscribe Form Starts Here -->
  <div class="subscribe-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Subscribe on Tea'kTalker now!</h1>
          </div>
        </div>
        <div class="col-md-8 offset-md-2">
          <div class="main-content">
            <p>Make your day be a delightful and terrific! <br> Just got by Tea'kTalker Milk Tea Shop and you taste the heaven feels you want.</p>
            <div class="container">
              <form id="subscribe" action="" method="get">
                <div class="row">
                  <div class="col-md-7">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email"
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                        onBlur="if(this.value == '') { this.value = 'Your Email...';}" value="Your Email..."
                        required="">
                    </fieldset>
                  </div>
                  <div class="col-md-5">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Subscribe Form Ends Here -->



  <!-- Footer Starts Here -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="logo">
            <img src="../img/logo.png" alt="store-logo">
          </div>
        </div>
        <footer>
          <div class="container">
              <div class="sec aboutus">
                  <h2>About Us</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem unde cum iste nihil excepturi illo
                      deserunt veniam, sit, sint aliquam architecto libero saepe dolorum iure eos. Nisi a laudantium
                      deserunt!</p>
                  <ul class="sci">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-linkedin"></a></li>
                      <li><a href="#" class="fa fa-youtube"></a></li>
                      <li><a href="#" class="fa fa-instagram"></a></li>
                  </ul>
              </div>
              <div class="sec contact">
                  <h2>Contact Info</h2>
                  <ul class="info">
                      <li>
                          <span><i class="fa fa-map-marker" style="font-size:30px;color:rgb(17, 150, 212);"></i></span>
                          <span>Thomas Missonnier Center Samjung Building, <br>
                              Nasipit Road, Talamban, Cebu City, Cebu, <br>Philippines</span>
                      </li>
                      <li>
                          <span><i class="fa fa-phone" style="font-size:30px;color:rgb(17, 150, 212);"></i></span>
                          <p><a href="tel:12345678900">+1 234 567 8900</a><br>
                              <a href="tel:12345678900">+1 234 567 8900</a></p>
                      </li>
                      <li>
                          <span><i class="fa fa-envelope" style="font-size:30px;color:rgb(17, 150, 212);"></i></span>
                          <p><a href="mailto:knowmore@email.com">knowmore@email.com</a><br>

                      </li>
                  </ul>
              </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <!-- Footer Ends Here -->


  <!-- Sub Footer Starts Here -->
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>Copyright &copy; 2020 Tea'kTalker Milk Tea Station. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sub Footer Ends Here -->



</body>

</html>