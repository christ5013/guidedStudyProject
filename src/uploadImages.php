<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
</head>
<body>
<form method="POST" enctype = "multipart/form-data">
    <label>choose a picture:</label>
    <input type="file" name="image" id="image"><br>
    <br>
    <label>Enter Product Name:</label>
    <input type="text" name="product_name" id="product_name"><br><br>
    <label>enter Product Price</label>
    <input type="text" name="product_price" id="product_price"><br><br>
  
    <input type="submit" name="connect" value="Upload image/data">
</form>
</body>
</html>

<?php
    $connection = new mysqli("localhost","root","","milktea");
  
    if(isset($_POST['connect'])){
        echo "heloooooo";
        $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        

            $query = "INSERT INTO product (product_image,product_name,product_price) VALUES
            ('".$file."','".$product_name."','".$product_price."')";
            
            $query_run = mysqli_query($connection,$query);
        
            if ($query_run){
                echo "<script type='text/javascript'>alert('image uploaded')</script>";
    
            }else{
                echo "<script type='text/javascript'>alert('image not upload')</script>";
            }
      
       
    }

    // $conn = new PDO ("mysqli:host=localhost, dbname =milktea" , "root","");
    // if (isset($_POST['connect'])){
    //     $product_name = $_POST['product_name'];
    //     $product_price = $_POST['product_price'];
    //     $product_image = $_FILES['image']['name'];
    //     $product_get_type = $_FILES(['images'],['type']);
    //     $data = file_get_contents($_FILES['images']['tmp_name']);
    //     $statement = $conn->prepare("insert into product values ('$product_image','$product_name','$product_price')");
    //     $statement->bindParam(1,$product_image);
    //     // $statement->bindParam(2,$product_get_type);
    //     // $statement->bindParam(3,$data);
    //     $statement->execute();
     
        
    // }
?>