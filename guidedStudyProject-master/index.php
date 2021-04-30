<?php

    require_once('login.php');
    $user = $milktea->getUsers();
    print_r($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
</head>
<body>
    


<!-- modal -->
<div class=bg-modal>
<div class="modal-content">
<img src="" alt="">
<form>
    <input type="text" placeholder="name">
<input type="text">
<input type="text">
</form>

</div>
</div>

</body>

<style>
.bg-modal {
width:100%;
height:100%;
background-color:rgba(0,0,0,0.7);
position:absolute;
top:0;
display:flex;
justify-content:center;
align-items:center;

}

.modal-content{
width:300px;
height:300px;
background-color:white;
border-radius:4px;
text-align:center;
padding:20px;


}

</style>

<!-- how to upload images in the database -->
<form methos="POST" enctype = "multipart/form-data"></form>

    <label>choose a profile pic:</label>
    <input type="file" nmae="image" id="image">

    <label>enter username:</label>
    <input type="text" nmae="username" id="image">
    <input type="submit" name="upload" value="Upload image/data">
    
<?php
    $connection = mysqli_connect("localhost","root","",)
    $db=mysqli =mysqli_selsect_db($connection,"milktea");

    if(isset($_POST['upload'])){
        $file = addslashes(file_get_content($_FILES["image"]["tmp_nmae"]));
        $username = $_POST['username'];
        // kuhaon nimo tanan data nga kinahanglan e adto sa database 
        $query = "INSERT INTO `product` (roduct_images,product_name,product_price) VALUES
        ('$file','$product_name','$product_price')";
        $query_run = mysqli_query($connection,$query);
        if ($quert_run){
            echo "<script type='text/javascript'>alert('image uploaded')</script>";

        }else{
            echo "<script type='text/javascript'>alert('image not upload')</script>";
        }
    }
?>



<!-- how to fetch image in the database -->

<html>
    <body>
        
        <center>
    <form  method="post" enctype="multipart/form-data">
        <table>
            <thead>
                <tr>
                    <th>image</th>
                    <th>name</th>
                    <th>price</th>
                </tr>
            </thead>
            
            <?php
                $connection = mysqli_connect("localhost","root","",)
                 $db=mysqli =mysqli_selsect_db($connection,"milktea");

                $query ="SELECT * FROM product";
                $query_run = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_array_($query)){
                    ?>
                        <tr>
                            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image"> style = "width:100px,height:100px;"';?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['price']?></td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </form>
        </center>
    </body>
</html>
