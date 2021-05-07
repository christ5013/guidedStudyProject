<?php 

// include another php file 
include ('functions.php');
// instance variable of class Milktea calling a function check_login
 $milktea->check_login();

//  delete item from cart
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $milktea->delete($id);
}

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Shopping Cart</title>
</head>

<body>


<form method="POST">
    <div class="card">
        <div class="row">
            <div class="col-md-10 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted"><?php echo $milktea->countItems();" items" ?></div>
                    </div>
                </div>
                <?php $count=0; $total=0;?>
                <?php foreach($fetchData as $data){?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="<?php echo $data['product_image']?>"></div>
                            <div class="col">
                                <div class="row text-muted">Milktea</div>
                                <div class="row"><?php echo $data['product_name']?></div>
                            </div>
                            <!-- <div class="col"> <button class="subtractItem" style="border:none; margin-right:4px">-</button><a name="quantity" class="border"><?php echo $milktea->addItemQuantity();?></a><button name="addItem" style="border:none; margin-left:4px">+</button> </div> -->
                            <div class="col"> <?php echo "₱".$data['product_price']?> <span class="close"><a href="cart.php?delete=<?php echo $data['product_id']?>"><i class="fa fa-trash-alt"></i></a></span></div>
                        </div>
                    </div>

                    <?php 
                        $price = $data['product_price'];
                        $total += $price;
                    ?>
                <?php $count++; }?>
                    <!-- <input type="hidden" name="total" value=<?php //echo $total?>> -->
                    <input type="hidden" name="countItems" value="<?php echo $count?>">
               
                <div class="back-to-shop"><a href="product.php">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
        
            <div class="col-md-6 summary" style="float:right;">
                
                    <h5><b>Summary</b></h5>
                
                <hr>
               
                <div class="row" >
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right" ><input readonly value=<?php echo $total?> name="totalSummary"></div>
                </div> <button type="submit" class="btn"cstyle="font-size:14px" name="checkout">CHECKOUT</button>
            </div>
        </div>
    </div>
   
    </form>
    <?php  $milktea->getCheckOutData();?>

  
</body>

</html>