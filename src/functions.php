
<?php
// start a session
session_start();

    class Milktea {

        // initialize variables
        private $server ="mysql:host=localhost;dbname=milktea";
        private $user = "root";
        private $password = "";
        private $options = array(
            PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        protected $connection;

        // function that holds the connection
        public function openConnection(){
            try {
                $this->con = new PDO (
                    $this->server,
                    $this->user,
                    $this->password,   
                    $this->options
                );
                
                return $this->con;
            } catch (PDOException $error) {
                echo "Error connection: ".$error->getMessage();
            }
        }

        // function to close the connection
        // public function closeConnection(){
        //     $this->$connection =null;
        // }

     //check if the user is already log in
        function check_login(){
            
            if($_SESSION['email'] != ""){
                $id = $_SESSION['email'];
                $connection = $this->openConnection();
                $emailVer = $connection->prepare("SELECT * FROM users WHERE email = ? ");
                $emailVer->execute([$id]);
                $fetch = $emailVer->fetch();
                return $fetch;
             }else{
                header("location:landing.php");
            }

       
        } 
       
        // register user
        public function register(){

            if(isset($_POST['register'])){

                $fullname = $_POST['name'];
                $email = $_POST['regEmail'];
                $password =password_hash($_POST['regPass'],PASSWORD_DEFAULT);

                $connection = $this->openConnection();

                if($_POST['regPass'] != $_POST['confirmPass']){

                    echo "<script>alert('password did not match!')</script>";

                }else{

                    $statement = $connection->prepare("INSERT INTO users (fullname,email,password) VALUES ('".$fullname."','".$email."','".$password."')");
                    $statement -> execute ([$fullname,$email,$password]);
                    echo "<script>alert('Please login first')</script>";
                 
    
                }

                
            }
        }
        // user login
        public function login(){
            
                if(isset($_POST['login'])){
                    $username = $_POST['username'];
                    $password = $_POST ['loginPass'];
                    $connection = $this->openConnection();

                    $emailVer = $connection->prepare("SELECT * FROM users WHERE email = ? ");
                    $emailVer->execute([$username]);
                    $passwordVar = $emailVer->fetch();

                    if(password_verify($password, $passwordVar['password'])){
                        $_SESSION['email'] = $username;
                        header ('location:home.php');
                    }else{
                        echo "<script>alert('Wrong Credentials!')</script>";
                       
                    }
                
                }
                
        }
       
        // logout user
        public function logout(){
            if(isset($_GET['logout'])){
                session_destroy();
                $_SESSION['email']="";
                echo header("location:form.php?logout=true");
                exit;
            }
            
           
        }
// wala pani
        public function countItems(){
            if (isset($_POST['countItems'])){
                $items = $_POST['countItems'];
                echo $items;
            }
        }

    //   wala pani
        public function addItemQuantity(){
           $countQuantity = 1;
            if(isset($_POST['addItem'])){
                echo $countQuantity+1;
            }

        }

        public function getCheckOutData(){
            $email = $_SESSION['email'];
            // echo $email;
            if(isset($_POST['checkout'])){
                $total = $_POST['totalSummary'];
                $connection = $this->openConnection();
                $query =$connection->prepare("INSERT INTO shoppingcart(email,total) VALUES('$email','$total')");
                $query->execute();
                echo "<script>alert('Your have successfully ordered!') </script>";
                

            }
          
        }
        // count items in shopping cart
        public function countCart(){
            $username = $_SESSION['email'];
            $connection = $this->openConnection();
            $statement= $connection->prepare("SELECT * FROM cart WHERE email =?");
            $statement->execute([$username]);
           $count=$statement->rowCount();
           echo $count;
        }

        // delete to cart
        public function delete($id){
           
                $connection = $this->openConnection();
                $query = $connection->prepare("DELETE FROM cart WHERE product_id = '$id'");
                $query->execute();
                
            
        }

    }

    $milktea = new Milktea();

    

?>
    
