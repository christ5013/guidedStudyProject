<?php 

include('functions.php');
$email = $_SESSION['email'];
$connection = $milktea->openConnection();
$query =$connection->prepare("SELECT * FROM `cart` WHERE email= '$email'");
$query->execute();
// $fetchId= $query->fetch();
$fetchData = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Shopping Cart</title>
</head>

<body>

    <div class="card">
        <div class="row">
            <div class="col-md-10 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">3 items</div>
                    </div>
                </div>
                <?php foreach($fetchData as $data){?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="<?php echo $data['product_image']?>"></div>
                            <div class="col">
                                <div class="row text-muted">Milktea</div>
                                <div class="row"><?php echo $data['product_name']?></div>
                            </div>
                            <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                            <div class="col">&euro; <?php echo $data['product_price']?> <span class="close"><i class="fa fa-trash-alt"></i></span></div>
                        </div>
                    </div>
                <?php }?>
                <!-- <div class="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/ba3tvGm.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                        <div class="col">&euro; 44.00<span class="close"><i class="fa fa-trash-alt"></i></span> </div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                        <div class="col">&euro; 44.00 <span class="close"><i class="fa fa-trash-alt"></i></span></div>
                    </div>
                </div> -->
                <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        
            <div class="col-md-6 summary" style="float:right;">
                
                    <h5><b>Summary</b></h5>
                
                <hr>
                <div class="row">
                    <div class="col" style="margin-left:10px;">ITEMS 3</div>
                    <div class="col text-right">&euro; 132.00</div>
                </div>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">&euro; 137.00</div>
                </div> <button class="btn"cstyle="font-size:14px">CHECKOUT</button>
            </div>
        </div>
    </div>
</body>

</html>